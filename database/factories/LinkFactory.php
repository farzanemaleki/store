<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Link;
use Faker\Generator as Faker;

$factory->define(Link::class, function (Faker $faker) {
    return [
        'title' => $faker->domainName,
        'link1' => $faker->text(20),
        'Address_link1' => $faker->domainName,
        'link2' => $faker->text(20),
        'Address_link2' => $faker->domainName,
        'link3' => $faker->text(20),
        'Address_link3' => $faker->domainName,
        'link4' => $faker->text(20),
        'Address_link4' => $faker->domainName,
        'link5' => $faker->text(20),
        'Address_link5' => $faker->domainName,
    ];
});
