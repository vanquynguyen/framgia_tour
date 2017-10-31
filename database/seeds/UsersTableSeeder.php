<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'full_name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => $faker->password,
                'gender' => $faker->randomElement($array = array(0,1)),
                'address' => $faker->address,
                'avatar' => $faker->text,
            ]);
    	}
    }
}
