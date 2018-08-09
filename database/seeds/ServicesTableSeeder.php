<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	
	protected $services = [
		"Web Development",
		"Web Design",
		"Mobile Apps",
		"Digital Marketing",
		"Ecommerce Software",
		"Sales Representative",
		"Technology Solutions",
		"Web Design",
		"Mobile Apps",
		"Digital Marketing",
		"Web Development",
		"Sales Representative",
		"Technology Solutions",
		"Mobile Apps",
		"Digital Marketing"
	];
	
    public function run()
    {
        DB::table('services')->truncate();        

        foreach ($this->services as $type)       
        {
            DB::table('services')->insert([
                'service_name' => $type,
				'user_id' => mt_rand(1,10),
				'created_at' => date("Y-m-d h:i:s")
            ]);
			
        }
    }
}
