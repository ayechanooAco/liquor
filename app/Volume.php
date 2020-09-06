<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
      public function items()
    {
    	return $this->hasMany('App\Item');
    }
}
