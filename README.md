# A preset RESTful Laravel app
This is a simple Laravel app using a local copy of the ``sehrgut/laravel5-api`` package to expose an `Article` model.

It can be used to easily test changes in a local copy of our `sehrgut/laravel5-api` repository when contributing.

Further, it can used be to get started with the `sehrgut/laravel5-api` package understanding how things work. If you do so, please update `composer.json` to use non local and stable version of the `sehrgut/laravel5-api` repository.

## Getting started

**1. Set the relative url to your local copy in `composer.json`:**

```php
"repositories": [
    {
        "type": "path",
        "url": "../packages/laravel5-api"
    }
],
```

**2. Create a local .env file and generate app key**

```bash
cp .env.examle .env
php artisan key:generate
```

Be sure to set `DB_DATABASE`!

**3. Install dependencies**

```bash
composer install
```

**4. Create sqlite database file**

```bash
touch database/database.sqlite
```

**5. Run migrations**

```bash
php artisan migrate
```

**6. Test the API**

You can use [Postman](https://www.getpostman.com/) to consume the API. In this case, import `postman_collection.json` and `postman_environment.json` to get started.
