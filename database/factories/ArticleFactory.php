<?php

use Faker\Generator as Faker;



$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->text(50),//50 is the number of letters
        'body'  => $faker->text(250)//250 is the number of letters
    ];
});

//php artisan make:factory (_name)
/*
'title' => $faker->sentence,
'body'  => $faker->paragraph
*/
