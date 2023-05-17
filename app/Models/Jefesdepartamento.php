<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jefesdepartamento extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'jefesdepartamentos';

    protected $fillable = ['user_id','depto_id','uni_id','accountnumber'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function departamento()
    {
        return $this->hasOne('App\Models\Departamento', 'id', 'depto_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function uni()
    {
        return $this->hasOne('App\Models\Uni', 'id', 'uni_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
