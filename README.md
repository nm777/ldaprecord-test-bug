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
2. Set phpunit to use SQLite (commit #3)
3. Create the example test (commit #4): https://ldaprecord.com/docs/laravel/auth/testing/#creating-the-test
4. Create 2 branches to show mixed-case (tests fail) and lower-case (tests pass)
