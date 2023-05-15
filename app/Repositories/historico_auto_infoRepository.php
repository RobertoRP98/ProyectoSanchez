<?php

namespace App\Repositories;

use App\Models\historico_auto_info;
use App\Repositories\BaseRepository;

/**
 * Class historico_auto_infoRepository
 * @package App\Repositories
 * @version May 15, 2023, 9:05 am UTC
*/

class historico_auto_infoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_anio',
        'fecha_mes',
        'id_autos_info'
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
        return historico_auto_info::class;
    }
}
