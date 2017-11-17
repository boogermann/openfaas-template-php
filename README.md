# PHP templates for openfaas

## Versions
Open FAAS templates for PHP 5.6 and latest stable version of PHP 7

## Usage:

faas-cli add-template https://github.com/gaiterjones/openfaas-template-php

faas-cli new php5function --lang php5

faas-cli new php7function --lang php7

faas-cli build -f phpxfunction.yml

faas-cli deploy -f  phpxfunction.yml

faas-cli invoke -f phpxfunction.yml myfunction or curl 127.0.0.1:8080/function/phpxfunction -d 'hello world'

PHP Version : 5.6.32
Data : hello world


To customise -> `php5function` - `php7function`:

- Handler.php::handle() : entrypoint
- php-extension.sh : is for installing PHP extensions if needed
- composer.json : is for dependency management
