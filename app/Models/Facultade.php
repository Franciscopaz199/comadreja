<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultade extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'facultades';

    protected $fillable = ['name','shortname'];
	
}
