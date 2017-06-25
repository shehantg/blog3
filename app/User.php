<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Role;
use App\Slider;
use App\Homeslider;
use App\Blog;
use App\Event;
use App\Campaign;


class User extends Authenticatable
{
    use Notifiable;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    public function hasAnyRole($roles)
    {
        if(is_array($roles)){
            foreach ($roles as $role) {
                if ($this->hasRole($role)){
                    return true;
                }
            }
        }else {
            if ($this->hasRole($roles)){
                
                return true;
                    }
            }


        

        return false;
    }

    public function hasRole($role)
    {

        if ($this->roles()->where('name', $role)->first()){

            return true;
        }

        return false;
    }

    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function sliders()
    {
        return $this->hasMany('App\Slider','user_id');
    }

    public function homesliders()
    {
        return $this->hasMany('App\Homeslider','user_id');
    }

    public function blogs()
    {
        return $this->hasMany('App\Blog','user_id');
    }

    public function events()
    {
        return $this->hasMany('App\Event','user_id');
    }

    public function campaigns()
    {
        return $this->hasMany('App\Campaign','user_id');
    }
}
