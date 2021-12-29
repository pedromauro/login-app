

## Proyecto realizado con Laravel
Para poder Realizar el despliegue de la aplicación es necesario tener instalado las siguientes dependencias.

    1.-Laravel v.8
    2.-Composer v.2.2.2
    3.-MySql v.7.4.27
    4.-Apache v.2.4.52 
    5.-PHP v.7.4.27


## Pasos para despliegue 
1.- Iniciar los servicios de Apache y MySql

2.- Configuración de conexión a la BD
    a) Crear un archivo  ".env"  el cual contendra las variables de entorno en la ruta "/ruta/del/proyecto/login-app"
    b) Pegar el siguiente codigo :
        APP_NAME=Laravel
        APP_ENV=local
        APP_KEY=base64:5m+OpvQYm8Q7j+IJSWZ8/untW7sBtpK+8ogWMIMaVBs=
        APP_DEBUG=true
        APP_URL=http://login-app.test

        LOG_CHANNEL=stack
        LOG_DEPRECATIONS_CHANNEL=null
        LOG_LEVEL=debug

        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=login
        DB_USERNAME=root
        DB_PASSWORD=

3.-Base de Datos:
 ejecutar el siguiente comando en la terminal  con la ruta del proyecto   
"/ruta/del/proyecto/login-app"     
    php artisan migrate


 