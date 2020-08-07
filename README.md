Commands to create this project:
```
laravel new ldaptest
cd ldaptest
composer require laravel/ui
php artisan ui bootstrap --auth
composer require directorytree/ldaprecord-laravel
php artisan vendor:publish ---provider="LdapRecord\Laravel\LdapServiceProvider"
touch database/database.sqlite
```
