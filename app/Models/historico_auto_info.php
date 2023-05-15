<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class historico_auto_info
 * @package App\Models
 * @version May 15, 2023, 9:05 am UTC
 *
 * @property \App\Models\AutosInformacion $idAutosInfo
 * @property string $fecha_anio
 * @property string $fecha_mes
 * @property integer $id_autos_info
 */
class historico_auto_info extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'historico_auto_info';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha_anio',
        'fecha_mes',
        'id_autos_info'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_historico_auto_info' => 'integer',
        'fecha_anio' => 'date',
        'fecha_mes' => 'date',
        'id_autos_info' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_anio' => 'nullable',
        'fecha_mes' => 'nullable',
        'id_autos_info' => 'nullable|integer',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAutosInfo()
    {
        return $this->belongsTo(\App\Models\AutosInformacion::class, 'id_autos_info');
    }
}
