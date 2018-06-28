<?php



/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

//factory defined
$factory->define(App\Todo::class, function(Faker\Generator $faker){
	return [
		'todos' => $faker->sentence(10)	//adds a sentence of 10 words to the data base
	];
});