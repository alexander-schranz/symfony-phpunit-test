# Test Setup to [fix simple-phpunit](https://github.com/symfony/symfony/issues/28895)

## Install first the dependencies with:

```bash
composer install
bin/phpunit -c src/Modul1/phpunit.xml.dist
SYMFONY_PHPUNIT_VERSION=5.7 bin/phpunit -c src/Modul2/phpunit.xml.dist
```

## Use the scripts

Unmodified symfony phpunit bridge:

```bash
bin/phpunit src/
```

Fixed symfony phpunit bridge:

```bash
bin/fixed-phpunit src/
```
