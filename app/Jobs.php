<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{

  public function users()
  {
      return $this->belongsToMany('App\User')->withPivot('status')
    	->withTimestamps();
  }


    public function user()
    {
      return $this->belongsTo('App\User',"employer_id");
    }

    public function images()
    {
        return $this->hasMany('App\JobsImages',"job_id");
    }

    public function keywords()
    {
        return $this->hasMany('App\jobKeywords',"job_id");
    }

}
