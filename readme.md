## Simple Customer Management Interface

This project allows users to:
*  Add/remove Customers/lead customers in a simple clean interface
*  Add/remove jobs to customer accounts with information about job
*  Add images of completed jobs
*  See simple yet fun stats(total jobs, Lead customers, Active Customers)
*  Search customers by all information(Name,address,phone,job info, etc...)

###Tech

This project uses a couple of open source projects to work properly:

* [AngularJS] - HTML enhanced for web apps!
* [Twitter Bootstrap] - great UI boilerplate for modern web apps
* [Angular SVG Round Progressbar] - AngularJS module that uses SVG to create a circular progressar



To install copy contents over to your web root directory. 

Be sure to give web access to these folders

bootstrap/
storage/
public/assets

Database setup


```php

create database company_db

```

##Users

```php

create table users (id INT(32) NOT NULL AUTO_INCREMENT,name VARCHAR(50), password VARCHAR(50), 

email VARCHAR(50), updated_at VARCHAR(50), created_at VARCHAR(50), remember_token VARCHAR(50), 

PRIMARY KEY(id));

```

##Customers

```php

create table customers(id INT(32) NOT NULL AUTO_INCREMENT, name VARCHAR(50), homePhone 

VARCHAR(13), cellPhone VARCHAR(13), address VARCHAR(50), postal VARCHAR(10), town VARCHAR(25), 

status VARCHAR(10), PRIMARY KEY(id));

```

##Jobs

```php

create table jobs(id INT(32) NOT NULL, label VARCHAR(32), description VARCHAR(500), jobNumber 

INT(32) NOT NULL AUTO_INCREMENT, Service date, cost float(16), PRIMARY KEY(jobNumber));

```

##Job Images

```php

create table jobImages(imageID INT(32) NOT NULL AUTO_INCREMENT, customerID INT(32), jobNumber 

int(32), label1 VARCHAR(16), label2 VARCHAR(16), label3 VARCHAR(32), label4 VARCHAR(32), 

label5 VARCHAR(32), PRIMARY KEY(imageID));

```

Lastly update the config/database.php username and password with your credentials for mysql DB


## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

[Twitter Bootstrap]: <http://twitter.github.com/bootstrap/>
[AngularJS]: <http://angularjs.org>
[Angular SVG Round Progressbar]: https://github.com/crisbeto/angular-svg-round-progressbar

