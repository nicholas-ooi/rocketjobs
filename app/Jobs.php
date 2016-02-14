<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function images()
    {
        return $this->hasMany('App\jobImages');
    }

}
