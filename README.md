# 🎉 DEMO Laravel Breeze Dusk

Laravel Dusk is a browser testing tool for Laravel applications, providing an expressive API to write end-to-end tests in a simple, fluent manner. It automates browser interactions using a headless Chrome driver, making it easy to test complex user scenarios.

![version](https://img.shields.io/badge/version-1.0-blue)
![rating](https://img.shields.io/badge/rating-★★★★★-yellow)
![uptime](https://img.shields.io/badge/uptime-100%25-brightgreen)

### ✅ Requirements

- Enable extension `php.ini`

```
extension=zip
```

### 🚀 Setup

- Create Project

```shell
composer create-project laravel/laravel example-app
```

- Install Package

```shell
composer require laravel/dusk --dev
```

- Configure Environment

```shell
cp .env.example .env
```

- Install Dusk

```shell
php artisan dusk:install
php artisan dusk:chrome-driver --all
```

- Migrate

```
php artisan migrate
```

- Enable Dusk Headless `.env`

```shell
DUSK_HEADLESS_DISABLED=true
```

- Run Test

```shell
php artisan dusk
```

```
PASS  Tests\Browser\ExampleTest
  ✓ basic example                                                                                                                        1.28s  

  Tests:    1 passed (1 assertions)
  Duration: 1.61s
```

### 🏆 Run

- [http://localhost:8000/](http://localhost:8000/) username : `admin` password : `admin`

```shell
php artisan serve
php artisan dusk
```
