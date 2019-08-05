<?php


use App\Theme;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(App\Theme::class, function ($faker) {
    return ['theme_id' => function () {
        return factory('App\Theme')->create()->id;
    },
    'name' => $faker->word,
    'slug' => $faker->word
    ];
});
