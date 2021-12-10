<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

##

Debemos iniciar un servidor en mi caso trabaje con xampp, y clonamos el repositorio dentro de la carpeta htdocs del servidor

## Configurar bd

Al descargar o clonar el repositorio, se debe establecer la bd en el archivo .env, el cual tiene la bd apparchivos, bien podriamos crear es bd o reemplazarla en el archivo .env

## Configurar bd

Debemos correr el comando dentro de la carpeta apparchivos

npm install
npm run dev

vamos a la url del navegador por ejemplo

http://localhost/apparchivos/public/

##Funcionamiento

Vamos a registrar un nuevo usuario en el enlace Registrar:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_01.jpg">

Una vez registrado, redirige al home ya logueado, donde tenemos un menu para usuarios logueados:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_02.jpg">

Enlace todo el menu a la gestion de los archivos, si damos click en el menu vamos a la lista de archivos que solo puede ver el usuario logueado, le damos a Subir nuevo archivo:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_03.jpg">

Imgresamos el nombre, seleccionamos el archivo, y una descripcion:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_04.jpg">

Se muestra el archivo recien creado el cual esta en la tabla archivos de la bd:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_05.jpg">

Aca se muestra la tabla con el registro, notese que tiene un user_id, para identificar los archivo de cada usuario:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_06.jpg">

El archivo se guarda en una subcarpeta con el id de usuario, en este caso:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_07.jpg">

Tambien podemos descargar el archivo:

<img src="https://galindoteam.com/frdigital/wp-content/uploads/2021/12/app_08.jpg">

Nota: se muestran solo los archivos de este usuario logueado, si registramos otro usuario e ingresamos no saldra este archivo
