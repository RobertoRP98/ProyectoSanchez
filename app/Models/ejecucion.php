<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ejecucion
 * @package App\Models
 * @version May 15, 2023, 9:01 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $autosInformacions
 * @property \Illuminate\Database\Eloquent\Collection $empleadosOcupados
 * @property string $fecha_programada
 * @property string $fecha_de_ejecucion
 * @property time $hora_de_ejecucion
 * @property time $tiempo_de_ejecucion
 * @property string $responsable
 * @property integer $resultado_final
 */
class ejecucion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'ejecucion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha_programada',
        'fecha_de_ejecucion',
        'hora_de_ejecucion',
        'tiempo_de_ejecucion',
        'responsable',
        'resultado_final'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ejecucion' => 'integer',
        'fecha_programada' => 'date',
        'fecha_de_ejecucion' => 'date',
        'responsable' => 'string',
        'resultado_final' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_programada' => 'nullable',
        'fecha_de_ejecucion' => 'nullable',
        'hora_de_ejecucion' => 'nullable',
        'tiempo_de_ejecucion' => 'nullable',
        'responsable' => 'nullable|string|max:250',
        'resultado_final' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function autosInformacions()
    {
        return $this->belongsToMany(\App\Models\AutosInformacion::class, 'cronograma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function empleadosOcupados()
    {
        return $this->hasMany(\App\Models\EmpleadosOcupado::class, 'id_ejecucion');
    }
}
