<?php

namespace App\Repositories;

use App\Models\Courthouse;
use InfyOm\Generator\Common\BaseRepository;

class CourthouseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'courthouse',
        'street',
        'street2',
        'city',
        'state',
        'zip',
        'country',
        'notes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Courthouse::class;
    }
}
