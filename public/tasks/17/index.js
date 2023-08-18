alert('hello')
let data = {
    hello1: 'value2',
    hello2: 'value3',
    hello3: 'value4',
    hello4: 'value5',
    hello5: 'value1',
    hello6: 'value2',
    hello7: 'value3'
};

let data1 = {};
let data2 = {};

for (let key in data) {
    let lastDigit = parseInt(key.slice(-1));
    if (lastDigit % 2 === 0) {
        data1[key] = data[key];
    } else {
        data2[key] = data[key];
    }
}


console.log(data1, data2);