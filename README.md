# Instalaciones recomendadas - Curso de Laravel 7
## Instalaciones necesarias

* [Visual Studio Code](https://code.visualstudio.com/)

* [Wamp Server](https://www.wampserver.com/en/)

* [Composer](https://getcomposer.org/download/)

* [Node js](https://nodejs.org/es/)

* [Git](https://git-scm.com/)

## Comandos necesarias

* Verificamos que todo este bien instalado 
```
php -v && echo 'Node version' && node --version && composer -v
``` 

* Confirmamos que tenemos las versiones necesarias 
    - PHP >= 7.2.5
    - node >= 6.17.0
    - composer >= 2.0.13

* Instalamos laravel en el equipo via composer 
```
composer global require laravel/installer
```

## Extensiones de VSCode
[Laravel Extension Pack](https://marketplace.visualstudio.com/items?itemName=onecentlin.laravel-extension-pack)

Opcional

[Material Icon Theme](https://marketplace.visualstudio.com/items?itemName=PKief.material-icon-theme)

## Links de ayuda

* [Laravel Docs 7.x](https://laravel.com/docs/7.x)

## Comandos

* Nuevo proyecto de laravel 7.x
```
composer create-project laravel/laravel:^7.0 Project-Name
```
* Levantar un local server
```
php artisan serve
```
* Crear un nuevo controlador
```
php artisan make:controller NameController
```
```
php artisan make:controller --resource NameController
```
* Ver todas las rutas del proyecto
```
php artisan route:list
```
```
php artisan r:l
```