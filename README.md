# Bienvenido a OREC EX

> **OREC EX** es un software web para facilitar la digitalización, emisión y control de actas de nacimientos, matrimonios y defunciones, además de nuevas características que se irán agregando de acuerdo a las necesidades de las OREC (Oficina de Registros del Estado Civil) a nivel nacional en Peru.

***OREC EX** es un software de código abierto (MIT) que puede ser usado de forma libre sin restricciones.*

### INSTRUCCIONES DE INSTALACIÓN

##### REQUISITOS:
 - Git
 - Laragon (xampp o wamp)
 - Composer
 - Sistema Operativo compatible con PHP 7.*

##### INSTALACIÓN
 - Clonar el proyecto con git.
 `git clone https://gitlab.com/dcyar/orec-ex.git`
 
 - O descargar el proyecto en .zip
![enter image description here](https://i.imgur.com/eDYT2dz.jpg)

- Copiar el archivo a la siguiente ruta:
(laragon) `C:\laragon\www\`
(xampp) `C:\xampp\htdocs\`
(wamp) `C:\wamp\www\`

- Descomprimir el archivo `orec-ex-master.zip`
- Abir la consola o cmd y navegar hacia la carpeta del proyecto.
- Ejecutar el comando `composer update`
- Renombrar el archivo `.env.example` a `.env`
- Generar una llave en consola para el proyecto `php artisan key:generate`
- Correr las migraciones y seeders `php artisan migrate --seed`
- Abrir en el navegador la ruta `http://orec-ex.test`

##### CREDENCIALES PARA ACCEDER AL SISTEMA

**Usuario:** administrador@mail.com
**Contraseña:** password

> Para cualquier duda o consulta puede escribirme al correo **jachata.m@gmail.com**
