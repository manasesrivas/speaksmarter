```bash
php artisan make:model Lesson --migration
php artisan make:model Category --migration
php artisan make:model Level --migration
php artisan make:migration create_category_lesson_table
# usé este comando para limpiar las configuraciones, me equivoqué en el nombre de una variable de entorno.
php artisan config:clear

# al final me tocó utilizar 
php artisan migrate:fresh # elimina todas las tablas, hasta las que no estan registradas en la tabla migrations
```


## Instalacion de paquetes utilizados


```bash
composer require laravel/jetstream
php artisan jetstream:install inertia
# roles y permisos
composer require spatie/laravel-permission
# publicar el provider
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

## creacion de seeder para roles

```bash
php artisan make:seeder RoleSeeder
# seeder para los usuarios
php artisan make:seeder UserSeeder
# poblar la base de datos con los seeder
php artisan db:seed
```

## configuracion del frontend con vue
como en el Dockerfile ya esta agregado node 26 y pnpm 12 entonces solo corremos el siguiente comando
```bash
pnpm install
```

## refrescar la base de datos y poblar la base de datos con los seeder
```bash
php artisan migrate:refresh && php artisan db:seed
```

1. Detener y eliminar los contenedores
docker compose down


Esto elimina los contenedores y las redes creadas por Compose, pero conserva los volúmenes, incluyendo los datos de MySQL.
2. Descargar las imágenes actualizadas
docker compose pull


3. Reconstruir las imágenes sin caché
docker compose build --no-cache --pull


Esto reconstruye las imágenes que tienen build: en tu Compose, incluyendo la imagen personalizada de Node.js si configuraste su Dockerfile.
4. Levantar todos los servicios
docker compose up -d --force-recreate