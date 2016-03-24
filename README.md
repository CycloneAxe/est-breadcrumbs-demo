## Description
[davejamesmiller/laravel-breadcrumbs](https://github.com/davejamesmiller/laravel-breadcrumbs) A simple Laravel-style way to create breadcrumbs in [Laravel 5](http://laravel.com/).

This project is very simple demo to show you how to use Laravel Breadcrumbs quickly.

> This project was created by [The EST Group](http://estgroupe.com/) and [PHPHub](https://phphub.org/).

### Screenshots

![](http://ww3.sinaimg.cn/large/76dc7f1bjw1f2825h2x6mj21kw0zbn05.jpg)

### Run the demo

You can refer to this [documentation](https://github.com/Aufree/laravel-packages-top100/blob/master/how-to-run-a-laravel-project.md) to know how to run this demo.

## The Tutorial

### Table of contents

1. Installation
2. Define your breadcrumbs
3. Choose a template
4. Basic Usage

### 1. Installation

1). To get started with Breadcrumbs, add to your `composer.json` file as a dependency:

```shell
composer require davejamesmiller/laravel-breadcrumbs
```

2). Integration in Laravel

Add the service provider to providers:

```php
'providers' => [
    // ...
    DaveJamesMiller\Breadcrumbs\ServiceProvider::class,
],
```

And add the facade to aliases:

```php
'aliases' => [
    // ...
    'Breadcrumbs' => DaveJamesMiller\Breadcrumbs\Facade::class,
],
```

### 2. Define your breadcrumbs
Create a file called app/Http/breadcrumbs.php that looks like this:

```php
<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('home'));
});

// Home > Blog
Breadcrumbs::register('blog', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Blog', route('blog'));
});
```

### 3. Choose a template
By default a Bootstrap-compatible ordered list will be rendered, so if you’re using Bootstrap 3 you can skip this step.

First initialise the config file by running this command:

```shell
$ php artisan vendor:publish
```

Then open config/breadcrumbs.php and edit this line:

```php
'view' => 'breadcrumbs::bootstrap3',
```

The possible values are:

```php
Bootstrap 3: breadcrumbs::bootstrap3
Bootstrap 2: breadcrumbs::bootstrap2
```

### 4. Basic Usage

```php
{!! Breadcrumbs::render('blog'); !!}
```

That's it! :beers: :beers: :beers:

You can refer to the [documentation](http://laravel-breadcrumbs.davejamesmiller.com/en/latest/start.html) to learn more about Laravel Breadcrumbs.

---

欢迎关注 `LaravelTips`, 这是一个专注于为 Laravel 开发者服务, 致力于帮助开发者更好的掌握 Laravel 框架, 提升开发效率的微信公众号.

![](http://ww4.sinaimg.cn/large/76dc7f1bjw1f23moqj4qzj20by0bywfa.jpg)
