<?php

namespace App\Repositories;

use App\Models\ejecucion;
use App\Repositories\BaseRepository;

/**
 * Class ejecucionRepository
 * @package App\Repositories
 * @version May 15, 2023, 9:01 am UTC
*/

class ejecucionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_programada',
        'fecha_de_ejecucion',
        'hora_de_ejecucion',
        'tiempo_de_ejecucion',
        'responsable',
        'resultado_final'
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
        return ejecucion::class;
    }
}
