<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Store;
use Faker\Generator as Faker;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'name'=>$this->faker->word,
        'location'=>$this->faker->word,
        'owner'=>$this->faker->word,
        'net_worth'=>rand(2, 250),
    ];
});
