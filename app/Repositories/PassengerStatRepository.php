<?php

namespace App\Repositories;

use App\Models\PassengerStat;
use App\Repositories\BaseRepository;

/**
 * Class PassengerStatRepository
 * @package App\Repositories
 * @version October 25, 2021, 1:51 am UTC
*/

class PassengerStatRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'lastname',
        'address',
        'number',
        'age'
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
        return PassengerStat::class;
    }
}
