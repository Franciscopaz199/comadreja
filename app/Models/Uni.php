<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrera;

class Uni extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'unis';

    protected $fillable = ['name','address','logo','status','shortname'];
	
    // relacion muchos a muchos con carreras
    public function carreras()
    {
        return $this->belongsToMany(Carrera::class, 'unihascarreras', 'university_id', 'career_id');
    }

    // relacion uno a muchos con jefe departamento
    // public function jefes()
    // {
    //     return $this->hasMany('App\Models\JefeDepartamento', 'uni_id', 'id');
    // }

}
