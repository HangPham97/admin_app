<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','status','image','city','country','postal_code','first_name','last_name'
    ];
    public static function getImageUrl($data){
        if(!empty($data)){
            return env("APP_URL") . "images" . "/{$data}";
        }
        return env("APP_URL") . 'images/No_image_3x4.svg.png';
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
