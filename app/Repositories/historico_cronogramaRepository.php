<?php

namespace App\Repositories;

use App\Models\historico_cronograma;
use App\Repositories\BaseRepository;

/**
 * Class historico_cronogramaRepository
 * @package App\Repositories
 * @version May 15, 2023, 9:04 am UTC
*/

class historico_cronogramaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fecha_anio',
        'fecha_mes',
        'id_cronograma'
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
        return historico_cronograma::class;
    }
}
