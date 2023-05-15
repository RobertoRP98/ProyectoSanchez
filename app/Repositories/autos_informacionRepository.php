<?php

namespace App\Repositories;

use App\Models\autos_informacion;
use App\Repositories\BaseRepository;

/**
 * Class autos_informacionRepository
 * @package App\Repositories
 * @version May 15, 2023, 8:59 am UTC
*/

class autos_informacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return autos_informacion::class;
    }
}
