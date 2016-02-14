<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobKeywords extends Model
{
  public function job()
  {
    return $this->belongsTo('App\Job');
  }
}
