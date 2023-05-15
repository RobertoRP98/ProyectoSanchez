<?php

namespace App\Repositories;

use App\Models\empleados_ocupados;
use App\Repositories\BaseRepository;

/**
 * Class empleados_ocupadosRepository
 * @package App\Repositories
 * @version May 15, 2023, 9:03 am UTC
*/

class empleados_ocupadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_ejecucion',
        'ultima_hora'
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
        return empleados_ocupados::class;
    }
}
