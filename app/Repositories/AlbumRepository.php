<?php

namespace App\Repositories;

use App\Models\Album;
use App\Repositories\BaseRepository;

/**
 * Class AlbumRepository
 * @package App\Repositories
 * @version October 25, 2021, 5:45 am UTC
*/

class AlbumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'song',
        'singer',
        'date_release'
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
        return Album::class;
    }
}
