# PHP templates for openfaas

## Versions
Open FAAS templates for PHP 5.6 and latest stable version of PHP 7

## Usage:

faas-cli add-template https://github.com/gaiterjones/openfaas-template-php

faas-cli new php5function --lang php5

faas-cli new php7function --lang php7


You will find in the newly created directories `php5function` and `php7function`:

- Handler.php : entrypoint
- php-extension.sh : is for installing PHP extensions if needed
- composer.json : is for dependency management
