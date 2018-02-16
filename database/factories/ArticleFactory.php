<?php

use App\Models\Article;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Article::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->sentence,
        'body' => $faker->paragraphs($nb = random_int(1, 12), $asText = true),
    ];
});
