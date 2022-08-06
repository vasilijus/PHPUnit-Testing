# PHPUnit 

 - ➜ composer require --dev phpunit/phpunit ^9
 - ➜ ./vendor/bin/phpunit --version

Your composer.json should look similar to this:

```php
{
    "autoload": {
        "classmap": [
            "src/"
        ]
    },
    "require-dev": {
        "phpunit/phpunit": "^9"
    }
}
```
