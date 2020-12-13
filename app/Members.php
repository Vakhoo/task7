<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    public function phones()
    {
    	return $this->hasOne("App\phone", "user_id");
    }

    public function phoneNumbers()
    {
    	return $this->hasMany("App\phone", "user_id");
    }

    public function roles()
    {
    	return $this->belongsToMany("App\Role","members_roles", "members_id", "roles_id");
    	// return $this->belongsToMany("App\Role", "members_roles", "members_id", "roles_id");
    }
}
