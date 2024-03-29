<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    public function usuario()
    {
        return $this->hasOne('App\Models\User', 'user_id', 'id');
    }
}
