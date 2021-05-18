
## OREC -EX
*"Proyecto Open Source para la digitalizacion, emision y control de actas (nacimientos, matrimonios, defunciones) en las _Oficinas de Registros del Estado Civil_, que hay en distintos, distritos o provincias a nivel nacional."*

### Requerimientos
- [php >= 7.3](https://www.php.net/)
- [laravel 8.5.18](https://laravel.com)
- [barryvdh/laravel-dompdf](https://github.com/barryvdh/laravel-dompdf)
- [spatie/laravel-searchable](https://github.com/spatie/laravel-searchable)

### Características
-   Registro de Actas.
-   Digitalizacion de Actas.
-   Expedicion de Actas.
-   Busqueda de Actas.

## Instalación
```bash
# Clone this repository in your root folder
git clone https://github.com/dcyar/orec-ex.git

# Navigate to the bookstore folder
cd orec-ex

# Install dependencies
composer install

npm install && npm run dev

# Create file .env
cp .env.example .env

# Generate key
php artisan key:generate

# Setup database access

# Run migrations (tables and Seeders)
php artisan migrate --seed

# Run Server
php artisan serve

# Access to project in your browser
http://localhost:8000

# Admin account
administrador@mail.com
password
```

#

Gracias por tu visita
[@dcyar_](https://twitter.com/dcyar_)