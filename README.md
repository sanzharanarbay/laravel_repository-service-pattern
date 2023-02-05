<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# RUN PROJECT WITHOUT DOCKER
#### 1. CLONE PROJECT
```code
git clone 
cp .env.example .env . (in Windows copy)
```

#### 2. OPEN PROJECT AND INSTALL DEPENDENCIES
```code
composer install
php artisan:key generate
php artisan migrate
php artisan migrate:fresh
php artisan db:seed
php artisan optimize:clear
php artisan serve
```


# RUN PROJECT WITH DOCKER

## 1. Initial Commands
- cp .env.example .env .  (in Windows copy)
- docker-compose build --no-cache
- docker-compose up -d
- docker-compose ps
- docker-compose logs -f {service-name}
____

## 2. Container commands
- docker-compose exec server bash , (You can also run console bash from Portainer)
- composer install
- php artisan key:generate
- php artisan migrate (if database is empty)
- php artisan migrate:fresh
- php artisan db:seed (if database is empty)
- php artisan optimize:clear
- exit  (exit from container)
____

## GUI
- visit http://localhost:8000/ - Application
- visit http://localhost:5050/ - PgAdmin
- visit http://localhost:9000/ - Portainer if installed on your local docker(GUI for docker containers)
____


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
