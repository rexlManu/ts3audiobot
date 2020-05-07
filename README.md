# Laravel Ts3AudioBot Api Client

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Latest Version on Packagist](https://img.shields.io/packagist/v/rexlManu/ts3audiobot.svg?style=flat-square)](https://packagist.org/packages/rexlManu/ts3audiobot)
[![Total Downloads](https://img.shields.io/packagist/dt/rexlManu/ts3audiobot.svg?style=flat-square)](https://packagist.org/packages/rexlManu/ts3audiobot)

- [Introduction](#introduction)
- [Installation](#installation)
- [Usage](#usage)
- [Support](#support)

<a name="introduction"></a>
## Introduction

Php Api client for the c# musicbot [Ts3AudioBot](https://github.com/Splamy/Ts3AudioBot) for the laravel artisan framework

<a name="installation"></a>
## Installation

* Use following command to install:

```bash
composer require rexlmanu/ts3audiobot
```
Only when for laravel below 5.4:
* Add the service provider to your `providers[]` array in `config/app.php` file like: 

```php
rexlManu\Ts3AudioBot\Providers\Ts3AudioBotServiceProvider::class
```

* Add the alias to your `aliases[]` array in `config/app.php` file like: 

```php
'Ts3AudioBot' => rexlManu\Ts3AudioBot\Facades\Ts3AudioBot::class
```

<a name="usage"></a>
## Usage

Following are some ways through which you can access the ts3audiobot provider:

```php
// Import the class namespaces first, before using it directly
use rexlManu\Ts3AudioBot\Facades\Ts3AudioBot;

$instance = Ts3AudioBot::instance('your address', 58913, 'your token', true);

$instance->bot(1)->play(rawurlencode('https://www.youtube.com/watch?v=yHwGIA4VeOc'));

$instance->help();

$instance->systemInfo();
```

<a name="support"></a>
## Support

This plugin only supports Laravel 5.1 or greater.
* In case of any issues, kindly create one on the [Issues](https://github.com/rexlManu/ts3audiobot/issues) section.
* If you would like to contribute:
  * Fork this repository.
  * Implement your features.
  * Generate pull request.