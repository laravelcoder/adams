<?php

namespace App\Repositories;

use App\Models\Timeline;
use InfyOm\Generator\Common\BaseRepository;

class TimelineRepository extends BaseRepository
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
        return Timeline::class;
    }
}
