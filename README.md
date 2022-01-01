# faker-fantasy
WIP - so far only words function works

Fantasy names and locales in fakerphp. Works with vanilla php and with laravel

usage vanilla: 
```
use Faker\Factory;
use Patrikgrinsvall\FakerFantasy\FantasyProvider;

$faker = Factory::create('fantasy');
$faker->addProvider(new FantasyProvider($faker));
$faker->word();
```
