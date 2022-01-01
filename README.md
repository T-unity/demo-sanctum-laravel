# normal-laravel

## build

```
$ git clone git@github.com:T-unity/normal-laravel.git
$ cd normal-laravel
$ docker compose up -d --build
$ docker compose exec app bash

[app container] $ composer install
[app container] $ cp .env.example .env
[app container] $ php artisan key:generate
[app container] $ php artisan storage:link
[app container] $ chmod -R 777 storage bootstrap/cache
[app container] $ php artisan migrate
```
