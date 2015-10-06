<?php
 
class UserTableSeeder extends Seeder {
 
  public function run()
  {
  		$faker = Faker\Factory::create();
 
		for ($i = 0; $i < 30; $i++)
		{
		  $user = User::create(array(
		    'firstname' => $faker->firstName,
		    'lastname' => $faker->lastName,
		    'email' => $faker->email,
		    'birthday' => $faker->date
		  ));
		}
  }
 
}