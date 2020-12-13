<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function members()
    {
    	$this->belongsToMany("App\Members","members_roles", "members_id", "roles_id");
    }
}
