//Выведите список всех таблиц в базе данных
show tables;

//Выберите все счета за последние 2 месяца
SELECT *
FROM invoice
WHERE created_at >= DATE_SUB((SELECT MAX(created_at) FROM invoice), INTERVAL 2 MONTH);

//Выведите даты счетов в формате "June 15 2017"
SELECT DATE_FORMAT(created_at, '%M %e %Y') AS formatted_date
FROM invoice;


//Выведите список ФИО всех клиентов. Например: Solyanka E.S
SELECT CONCAT(last_name, ' ', SUBSTRING(first_name, 1, 1), '.', SUBSTRING(middle_name, 1, 1)) AS FIO FROM client;


//Выведите клиентов и их питомцев через запятую. Например: Shevchenko | Tayson, Rex, Baron
SELECT CONCAT(client.last_name, ' | ', GROUP_CONCAT(pet.alias SEPARATOR ', ')) AS cliens_and_pets
FROM client
         INNER JOIN pet ON pet.client_id = client.id
GROUP BY client.id;



//Посчитайте сумму всех счетов по клиентам. Вывод 2 колонки: FIO, Summ.

SELECT CONCAT(client.last_name, ' ', client.first_name, ' ', client.middle_name) AS FIO,
        SUM(invoice.amount) AS Summ
FROM client
    LEFT JOIN invoice ON invoice.client_id = client.id
GROUP BY client_id, client.last_name, client.first_name, client.middle_name;
------------



//Сделать дамп базы через CLI
show databases;
docker exec intern-mysql /usr/bin/mysqldump -u root --password=123456 intern > backup.sql  //work
docker exec intern-mysql /usr/bin/mysqldump -u root --password=123456 intern > /Users/areza/Desktop/Projects/SQL.Bro/mysql-with-questions-main/backup.sql //work
docker exec intern-mysql sh -c 'exec mysqldump -u root -p123456 intern' > /Users/areza/Desktop/Projects/SQL.Bro/mysql-with-questions-main/backup.sql; //work




//Удалить базу и импортировать из дампа через CLI
make exec;
DROP DATABASE intern;

USE intern;
show tables;
docker exec -i intern-mysql mysql -uroot -p123456 intern < backup.sql








