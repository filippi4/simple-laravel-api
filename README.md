# Laravel API with token

## Description

Simple laravel application using api requests with token.

## Requests

### Auth

- POST /api/login
- POST /api/logout
- POST /api/register

### Model

- GET api/articles
- POST api/articles
- GET api/articles/{id}
- PUT api/articles/{id}
- DELETE api/articles/{id}

## Install

```
git clone https://github.com/kfilippovk/simple-laravel-api.git
cd simple-laravel-api
cp .env.example .env
./vendor/bin/sail up -d
./vendor/bin/sail artisan migrate --seed
```