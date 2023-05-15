<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class cronograma
 * @package App\Models
 * @version May 15, 2023, 8:59 am UTC
 *
 * @property \App\Models\AutosInformacion $idInfoAutos
 * @property \App\Models\Ejecucion $idEjecucion
 * @property \Illuminate\Database\Eloquent\Collection $historicoCronogramas
 * @property integer $id_info_autos
 * @property string $ult_mp
 * @property string $ult_fecha
 * @property integer $id_ejecucion
 */
class cronograma extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cronograma';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_info_autos',
        'ult_mp',
        'ult_fecha',
        'id_ejecucion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cronograma' => 'integer',
        'id_info_autos' => 'integer',
        'ult_mp' => 'string',
        'ult_fecha' => 'date',
        'id_ejecucion' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_info_autos' => 'nullable|integer',
        'ult_mp' => 'nullable|string|max:50',
        'ult_fecha' => 'nullable',
        'id_ejecucion' => 'nullable|integer',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idInfoAutos()
    {
        return $this->belongsTo(\App\Models\AutosInformacion::class, 'id_info_autos');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEjecucion()
    {
        return $this->belongsTo(\App\Models\Ejecucion::class, 'id_ejecucion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function historicoCronogramas()
    {
        return $this->hasMany(\App\Models\HistoricoCronograma::class, 'id_cronograma');
    }
}
