# yii2-toastr
Toastr notifications widget for yii2
========================
This is the [Toastr](https://github.com/CodeSeven/toastr) extension for Yii 2. It encapsulates Toastr plugin in terms of Yii widgets.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist alikdex/toastr "*"
```

or add

```
"alikdex/toastr": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, you can test that the extension works by simply use it in your code by  :

```php
<?= \alikdex\toastr\Toastr::widget([
    'toastType' => 'error',
    'message' => 'This is an error.',
]);?>
```

There are 2 main useful widgets

ToastrAlert
-----------

displays Yii flash messages in toastr notification style

```php
<?php
$session = \Yii::$app->getSession();
$session->setFlash('error', "msg1");
$session->setFlash('danger', "msg2");
$session->setFlash('warning', "msg3");
$session->setFlash('info', "msg4");
$session->setFlash('success', "msg5");
?>
```
```php
<?= \alikdex\toastr\ToastrAlert::widget([
    'options' => [
        'positionClass' => 'toast-bottom-left'
    ]
]);?>
```
