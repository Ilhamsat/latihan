<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();//import library faker
		$limit = 10;
		
		for($i=0; $i<$limit; $i++){
			DB::table('user')->insert([
				'nama'=>$faker->name,
				'username'=>$faker->unique()->username,
				'password'=>$faker->password,
			]);
    }
}
}