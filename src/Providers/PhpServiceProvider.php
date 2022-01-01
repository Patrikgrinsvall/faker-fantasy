<?php

namespace Patrikgrinsvall\FakerFantasy\Providers\PhpServiceProvider {

    use Faker\Factory;
    use Faker\Generator;

    function faker(string $locale = null): Generator
    {
        return Factory::create($locale ?? Factory::DEFAULT_LOCALE);
    }
}
