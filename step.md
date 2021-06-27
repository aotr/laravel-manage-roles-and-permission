php artisan make:controller AdminController --resource
php artisan make:controller HomeController --resource
php artisan make:controller UserController -m User --resource
php artisan make:controller GalleryController -m Gallery --resource


pa route:list

https://demo-basic.adminkit.io/index.html

https://laravel.com/docs/8.x

npm install  


php artisan make:migration create_roles_table
php artisan make:migration create_roles_permissions_table

foreign onDelete cascade
https://laravel.com/docs/8.x/migrations#dropping-indexes
https://dev.mysql.com/doc/refman/8.0/en/create-table-foreign-keys.html


php artisan make:migration create_permissions_table
php artisan make:migration create_users_permissions_table
php artisan make:migration create_users_roles_table

php artisan make:seeder UserSeeder

php artisan db:seed