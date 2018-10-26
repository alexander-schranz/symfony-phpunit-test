# Test Setup to [fix simple-phpunit](https://github.com/symfony/symfony/issues/28895)

## Install dependencies:

```bash
composer install
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
