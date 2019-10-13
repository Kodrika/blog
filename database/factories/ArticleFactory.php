<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'category_id' => 1,
        'image' => $faker->imageUrl(800, 600),
        'name' => $faker->name,
        'slug' => \Illuminate\Support\Str::slug($faker->name),
        'reading_time' => '1 Min Read',
        'summary' => $faker->realText(1000),
        'content' => $faker->realText(30000),
        'description' => $faker->realText(200),
    ];
});
