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