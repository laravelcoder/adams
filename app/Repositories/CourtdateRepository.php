<?php

namespace App\Repositories;

use App\Models\Courtdate;
use InfyOm\Generator\Common\BaseRepository;

class CourtdateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'notes'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Courtdate::class;
    }
}
