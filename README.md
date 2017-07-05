# A preset RESTful Laravel app
This is a simple Laravel app using a local copy of the ``sehrgut/laravel5-api`` package to expose an `Article` model.

It can be used to easily test changes in a local copy of our `sehrgut/laravel5-api` repository when contributing.
Please set the relative url to your local copy in `composer.json`:

```
"repositories": [
    {
        "type": "path",
        "url": "../packages/laravel5-api"
    }
],
```

Further it can used be to get started with the `sehrgut/laravel5-api` package understanding how things work. If you do so please update `composer.json` to use non local and stable version of the `sehrgut/laravel5-api` repository.
