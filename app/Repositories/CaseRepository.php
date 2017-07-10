<?php

namespace App\Repositories;

use App\Models\Case;
use InfyOm\Generator\Common\BaseRepository;

class CaseRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Case::class;
    }
}
