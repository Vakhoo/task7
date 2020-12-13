<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
     	$names =[
			["vakho", "batsikadze", "vakhobatsikadze@gmail.com"], 
			["tony", "ferguson", "tonyferguson@gmail"],
			["justin", "oliveira", "justinoliveira@gmail"]
		];



		foreach ($names as list($name, $lastname, $email)) {
			DB::table("members")->insert([
				"name"=>$name,
				"surname"=>$lastname,
				"email"=>$email
			]);

			}
    }
}
