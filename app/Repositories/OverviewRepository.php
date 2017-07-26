<?php

namespace App\Repositories;

use App\Models\Overview;
use InfyOm\Generator\Common\BaseRepository;

class OverviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'details'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Overview::class;
    }
}
