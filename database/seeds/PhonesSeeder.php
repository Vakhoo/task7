<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $nums =[
			[2, 123456], 
			[1, 1121],
			[3, 13579],
			[1, 2468]
		];



		foreach ($nums as list($user_id, $num)) {
			DB::table("phones")->insert([
				"user_id"=>$user_id,
				"number"=>$num,
			]);

			}
    }
}
