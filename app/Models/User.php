<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Access\Authorizable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relacion uno a uno con la tabla student
    public function student()
    {
        return $this->hasOne('App\Models\student', 'user', 'id');
    }

    // //relacion uno a uno con la tabla jefes_departamento
    // public function jefedepartamento()
    // {
    //     return $this->hasOne('App\Models\JefeDepartamento', 'user_id', 'id');
    // }

    // //relacion uno a uno con la tabla admins
    // public function admin()
    // {
    //     return $this->hasOne('App\Models\student', 'user_id', 'id');
    // }
    
    public function setPasswordAttribute($value){
        // esto encripta el attributo password en la base de datos 
        $this->attributes['password'] = bcrypt($value);	
    }
}
