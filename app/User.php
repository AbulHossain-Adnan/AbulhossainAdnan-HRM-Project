<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status'
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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profilee()
    {
        return $this->hasOne('App\Profile');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function role()
    {
        return $this->hasOne('App\Role');
    }
    public function leaves()
    {
        return $this->hasMany('App\Leave');
    }
    public function files()
    {
        return $this->hasMany('App\File');
    }
}
