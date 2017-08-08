## Registeration_System_Mongo

This project is a simple registeration system. System in php laravel framework. This includes Mongo and Laravel Framework. "laravel" folder is obtained from "https://github.com/laravel/laravel".

 ### Requirements
 - [Docker](https://docs.docker.com/)

 ### Install w/ MongoDB
- `$ sudo docker-compose up -d` Installs MongoDB, php and Laravel Framework to docker.
- `$ docker-compose build`
- `$ sudo docker exec -it register_app bash` Connects the docker.
#### In Docker
- `$ composer install` Installs required package.
- `$ chmod -R 777 storage` Gives privilege to access logs.
-  Uncomment the line that is last line of /MongoDB/laravel/config/app.php 'providers' variable.
```php
Jenssegers\Mongodb\MongodbServiceProvider::class,
```
- `$ php artisan key:generate` Gives a key ("base64:Nd/kXnzZfPRhQV+ELuKdOuFc4DzFH99WQfNK2gKRm10="). Open /MongoDB/laravel/.env and assign "APP_KEY=" field to this key.

Now, you can access the website with [localhost:80](http://localhost:80).
# RegisterationSystem-Mongo
