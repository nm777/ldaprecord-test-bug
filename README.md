Commands to create this project (commit #1):

```
laravel new ldaptest
cd ldaptest
composer require laravel/ui
php artisan ui bootstrap --auth
composer require directorytree/ldaprecord-laravel
php artisan vendor:publish ---provider="LdapRecord\Laravel\LdapServiceProvider"
touch database/database.sqlite
```

Subsequent Steps:

1. Setup plain authentication (commit #2): https://ldaprecord.com/docs/laravel/auth/quickstart/#plain
