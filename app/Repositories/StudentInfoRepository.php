<?php

namespace App\Repositories;

use App\Models\StudentInfo;
use App\Repositories\BaseRepository;

/**
 * Class StudentInfoRepository
 * @package App\Repositories
 * @version October 25, 2021, 3:49 am UTC
*/

class StudentInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'lastname',
        'address',
        'age',
        'number',
        'course',
        'year'
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
        return StudentInfo::class;
    }
}
