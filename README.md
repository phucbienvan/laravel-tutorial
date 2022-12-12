### Setup 
```
composer install --ignore-platform-req=php
npm install 
cp .env.example .env
php artisan key:generate
php artisan migrate
