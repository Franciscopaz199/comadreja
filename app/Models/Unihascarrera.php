<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unihascarrera extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'unihascarreras';

    protected $fillable = ['university_id','career_id'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carrera()
    {
        return $this->hasOne('App\Models\Carrera', 'id', 'career_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uni()
    {
        return $this->hasOne('App\Models\Uni', 'id', 'university_id');
    }
    
}
