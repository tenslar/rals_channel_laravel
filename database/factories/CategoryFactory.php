<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'handle_name_template' => $faker->name . '的名無しさん',
    ];
});
