<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    public function member()
    {
    	return $this->belongsTo("App\Members", "user_id");
    }
}
