<?php

use Illuminate\Database\Seeder;

class LeadsrcTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker\Factory::create();
        DB::table('leadsrc')->truncate();        

        for ($i = 0; $i < 12; $i++)       
        {
            DB::table('leadsrc')->insert([
                'name' => $faker->catchPhrase,
				 'created_at' => NOW()
            ]);
			
        }
    }
}
