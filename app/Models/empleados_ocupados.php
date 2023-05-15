<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class empleados_ocupados
 * @package App\Models
 * @version May 15, 2023, 9:03 am UTC
 *
 * @property \App\Models\Ejecucion $idEjecucion
 * @property integer $id_ejecucion
 * @property time $ultima_hora
 */
class empleados_ocupados extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'empleados_ocupados';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_ejecucion',
        'ultima_hora'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_empleado_ocupado' => 'integer',
        'id_ejecucion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ejecucion' => 'nullable|integer',
        'ultima_hora' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEjecucion()
    {
        return $this->belongsTo(\App\Models\Ejecucion::class, 'id_ejecucion');
    }
}
