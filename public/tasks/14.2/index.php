<?php
/*3. При помощи trait добавьте классам новый метод, почините тесты заменив троеточие на код

```php
trait UpperNameTrait {
...
}

class User {
...
    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
}

class Customer {
...
    public string $name;
    public function __construct(string $name){
        $this->name = $name;
    }
}

assert(
    (new User('vova'))->upperName() == 'VOVA'
);

assert(
    (new Customer('vova'))->upperName() == 'VOVA'
);
```*/
use App\task142\Customer;
use App\task142\User;

require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


echo (new User('vova'))->upperName();
assert(
    (new User('vova'))->upperName() == 'VOVA'
);

assert(
    (new Customer('vova'))->upperName() == 'VOVA'
);