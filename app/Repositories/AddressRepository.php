<?php

namespace App\Repositories;

use App\Models\Address;
use InfyOm\Generator\Common\BaseRepository;

class AddressRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'street',
        'town',
        'postcode',
        'country'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Address::class;
    }
}
