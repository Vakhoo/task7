<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$roles=[
    		"admin",
    		"guest",
    		"vip"

    	];
    	foreach ($roles as $role) {
    		Db::table("roles")->insert([
        	"role"=>$role
        	]);
    	}

        
    }
}
