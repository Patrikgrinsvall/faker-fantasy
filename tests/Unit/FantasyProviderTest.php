<?php

use Faker\Factory;
use Patrikgrinsvall\FakerFantasy\FantasyProvider;
use Pest\test;

$faker = Factory::create('fantasy');

$faker->addProvider(new FantasyProvider($faker));
test('word works', function () use ($faker){
    echo expect($faker->word())->toBeString()->value . "\n";
});
test('adress works from parent', closure: function () use ($faker){
    echo expect($faker->address())->toBeString()->value . "\n";
});


