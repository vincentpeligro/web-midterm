<?php

namespace App\Repositories;

use App\Models\PetShop;
use App\Repositories\BaseRepository;

/**
 * Class PetShopRepository
 * @package App\Repositories
 * @version October 25, 2021, 5:28 am UTC
*/

class PetShopRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'store_name',
        'store_owner',
        'pets',
        'breed',
        'price'
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
        return PetShop::class;
    }
}
