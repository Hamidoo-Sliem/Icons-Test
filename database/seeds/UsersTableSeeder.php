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
        DB::table('users')->truncate();        

        for ($i = 0; $i < 10; $i++)       
        {
            DB::table('users')->insert([
                'name' => $faker->firstName ." ". $faker->lastName,
				'email' => $faker->safeEmail,
                'password' => bcrypt('123456'),
				 'remember_token' => bcrypt(str_random(10)),
				 'created_at' => date("Y-m-d h:i:s")
            ]);
			
        }
	}
}
