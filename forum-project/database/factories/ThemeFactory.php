<?php


use App\Theme;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(App\Theme::class, function ($faker) {
    $name = $faker->word;
    return [
        'name' => $name,
        'slug' => $name
    ];
});
