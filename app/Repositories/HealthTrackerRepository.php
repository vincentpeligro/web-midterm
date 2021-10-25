<?php

namespace App\Repositories;

use App\Models\HealthTracker;
use App\Repositories\BaseRepository;

/**
 * Class HealthTrackerRepository
 * @package App\Repositories
 * @version October 25, 2021, 4:25 am UTC
*/

class HealthTrackerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'weight',
        'blood_pressure',
        'diagnosis'
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
        return HealthTracker::class;
    }
}
