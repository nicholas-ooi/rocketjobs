<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
 * The database table used by the model.
 *
 * @var string
 */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function jobs()
    {
        return $this->hasMany('App\Jobs');
    }

    public function testimonials()
    {
        return $this->hasMany('App\Testimonials');
    }

    public function jobPosts()
{
    return $this->belongsToMany('App\Jobs')->withPivot('status')
    	->withTimestamps();
}

}
