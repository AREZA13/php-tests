<?php
/*2. Почините тест написал код вместо троеточия, не используйте `__construct()`
```php
    class Askar {
        private string $askar = "gg";
        ...
    }
    assert(
        "GG" == (new Askar)->a
    )
```*/


use App\Askar;
require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";


/*$askar = new Askar();
echo $askar->getAskar();*/

assert(
    "GG" == (new Askar)->getAskar());