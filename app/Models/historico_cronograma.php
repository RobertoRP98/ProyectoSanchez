<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class historico_cronograma
 * @package App\Models
 * @version May 15, 2023, 9:04 am UTC
 *
 * @property \App\Models\Cronograma $idCronograma
 * @property string $fecha_anio
 * @property string $fecha_mes
 * @property integer $id_cronograma
 */
class historico_cronograma extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'historico_cronograma';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fecha_anio',
        'fecha_mes',
        'id_cronograma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_historico_cronograma' => 'integer',
        'fecha_anio' => 'date',
        'fecha_mes' => 'date',
        'id_cronograma' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fecha_anio' => 'nullable',
        'fecha_mes' => 'nullable',
        'id_cronograma' => 'nullable|integer',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCronograma()
    {
        return $this->belongsTo(\App\Models\Cronograma::class, 'id_cronograma');
    }
}
