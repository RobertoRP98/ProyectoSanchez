<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class autos_informacion
 * @package App\Models
 * @version May 15, 2023, 8:59 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $ejecucions
 * @property \Illuminate\Database\Eloquent\Collection $historicoAutoInfos
 * @property string $num_economico
 * @property string $modelo_auto
 * @property string $marca_auto
 * @property string $anio_modelo
 * @property string $tipo_unidad
 * @property string $departamento
 * @property string $ult_mp
 * @property integer $ult_hra_km
 * @property string $ult_fecha
 * @property integer $act_hra_km
 * @property string $act_fecha
 * @property string $periocidad
 * @property number $km_prom_mensual
 * @property string $prox_mp
 * @property integer $prox_hra_km
 * @property integer $prox_hra_km_faltante
 * @property integer $prox_dias_faltantes
 * @property string $prox_fecha_estim
 * @property string $fecha_recomendada
 * @property string $programar_por_km
 * @property string $programar_por_tiempo
 */
class autos_informacion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'autos_informacion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'num_economico',
        'modelo_auto',
        'marca_auto',
        'anio_modelo',
        'tipo_unidad',
        'departamento',
        'ult_mp',
        'ult_hra_km',
        'ult_fecha',
        'act_hra_km',
        'act_fecha',
        'periocidad',
        'km_prom_mensual',
        'prox_mp',
        'prox_hra_km',
        'prox_hra_km_faltante',
        'prox_dias_faltantes',
        'prox_fecha_estim',
        'fecha_recomendada',
        'programar_por_km',
        'programar_por_tiempo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'num_economico' => 'string',
        'modelo_auto' => 'string',
        'marca_auto' => 'string',
        'anio_modelo' => 'string',
        'tipo_unidad' => 'string',
        'departamento' => 'string',
        'ult_mp' => 'string',
        'ult_hra_km' => 'integer',
        'ult_fecha' => 'date',
        'act_hra_km' => 'integer',
        'act_fecha' => 'date',
        'periocidad' => 'string',
        'km_prom_mensual' => 'float',
        'prox_mp' => 'string',
        'prox_hra_km' => 'integer',
        'prox_hra_km_faltante' => 'integer',
        'prox_dias_faltantes' => 'integer',
        'prox_fecha_estim' => 'date',
        'fecha_recomendada' => 'date',
        'programar_por_km' => 'string',
        'programar_por_tiempo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'num_economico' => 'nullable|string|max:50',
        'modelo_auto' => 'nullable|string|max:50',
        'marca_auto' => 'nullable|string|max:50',
        'anio_modelo' => 'nullable|string|max:50',
        'tipo_unidad' => 'nullable|string|max:50',
        'departamento' => 'nullable|string|max:50',
        'ult_mp' => 'nullable|string|max:50',
        'ult_hra_km' => 'nullable|integer',
        'ult_fecha' => 'nullable',
        'act_hra_km' => 'nullable|integer',
        'act_fecha' => 'nullable',
        'periocidad' => 'nullable|string|max:50',
        'km_prom_mensual' => 'nullable|numeric',
        'prox_mp' => 'nullable|string|max:50',
        'prox_hra_km' => 'nullable|integer',
        'prox_hra_km_faltante' => 'nullable|integer',
        'prox_dias_faltantes' => 'nullable|integer',
        'prox_fecha_estim' => 'nullable',
        'fecha_recomendada' => 'nullable',
        'programar_por_km' => 'nullable|string|max:10',
        'programar_por_tiempo' => 'nullable|string|max:10',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function ejecucions()
    {
        return $this->belongsToMany(\App\Models\Ejecucion::class, 'cronograma');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function historicoAutoInfos()
    {
        return $this->hasMany(\App\Models\HistoricoAutoInfo::class, 'id_autos_info');
    }
}
