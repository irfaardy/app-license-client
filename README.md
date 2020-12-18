
# 🚀 Application License uses a Serial Number for client side
[![Latest Stable Version](https://poser.pugx.org/irfa/app-license-client/v)](//packagist.org/packages/irfa/app-license-client) [![GitHub license](https://img.shields.io/github/license/irfaardy/encrypt-file-laravel?style=flat-square)](https://github.com/irfaardy/encrypt-file-laravel/blob/master/LICENSE) [![Support me](https://img.shields.io/badge/Support-Buy%20me%20a%20coffee-yellow.svg?style=flat-square)](https://www.buymeacoffee.com/OBaAofN) [![ko-fi](https://www.ko-fi.com/img/githubbutton_sm.svg)](https://ko-fi.com/S6S52P7SN)

This plugin will run if you install a plugin for an endpoint server please visit here https://github.com/irfaardy/app-license-server

<p>This plugin is used to install the application serial number on the client server<p>
<h3>🛠️ Installation with Composer </h3>


    composer require irfa/app-license-client

>You can get Composer [ here]( https://getcomposer.org/download/)

***


<h2>🛠️ Laravel Setup </h2>

<h3>Add to config/app.php</h3>

    'providers' => [
        ....
        Irfa\AppLicenseClient\AppLicenseClientServiceProvider::class,
         ];



<h3>Add to config/app.php</h3>

    'aliases' => [
             ....
            'ALC' => Irfa\AppLicenseClient\Facades\AppLicenseClient::class,
    
        ],

  <h2>Publish Vendor</h2>


    php artisan vendor:publish --tag=app-license-client

<h2>Config File</h2>

    config/irfa/app-license-client.php

<h2>Plugin Settings</h2>

Tambahkan baris ini di file .env


```php
APP_SERIAL_NUMBER=XXXX-XXXX-XXXX-XXXX
APP_LICENSE_ENDPOINT=https://example.com/check/license
```

<h2>Setting Middleware</h2>

Buka file App\Http\Kernel.php
Tambahkan item ini di $routeMiddleware 


```php
'licenseCheck' => \Irfa\AppLicenseClient\Middleware\AppLicenseChecker::class,
```

<h2>Implementasi di route</h2>

```php
Route::middleware('licenseCheck')->get('/example','TestController@index');
```

