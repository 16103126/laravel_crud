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
        'name', 'email', 'password',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_users', 'user_id', 'role_id');
    }

    //Accessories

    // public function getNameAttribute($value)
    // {
    //     return $value . ' (active)';
    // }

    // public function getNameAttribute($value)
    // {
    //     return strtoupper($value);
    // }

    //Mutatot

    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = bcrypt($value);
    // }

    // public function setEmailAttribute($value)
    // {
    //     $this->attributes['email'] = strtoupper($value);
    // }

    // public function setNameAttribute($value)
    // {
    //     $this->attributes['name'] = 'Mr. '.$value;
    // }

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
}
