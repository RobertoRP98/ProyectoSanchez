<?php

namespace App\Repositories;

use App\Models\cronograma;
use App\Repositories\BaseRepository;

/**
 * Class cronogramaRepository
 * @package App\Repositories
 * @version May 15, 2023, 8:59 am UTC
*/

class cronogramaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_info_autos',
        'ult_mp',
        'ult_fecha',
        'id_ejecucion'
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
        return cronograma::class;
    }
}
