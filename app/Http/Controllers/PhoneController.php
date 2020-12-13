<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;
use App\phone;
use App\Role;

class PhoneController extends Controller
{
    public function OneToOne()
    {
    	// return Members::join("phones", "members.id", "user_id")->get();
    	return Members::with("phones")->get();



    }

    public function OneToMany()
    {
    	// return Members::join("phones", "members.id", "user_id")->get();
    	return Members::with("phoneNumbers")->get();

    }

    public function OneToManyInverse()
    {
    	// return phone::join("members", "members.id", "user_id")->get();
    	return phone::with("member")->get();
    }

    public function ManyToMany()
    {
    	$user =Members::first();

    	$role = Role::get();

    	$user->roles()->sync($role);



    	return Members::with("roles")->get();
    }
}
