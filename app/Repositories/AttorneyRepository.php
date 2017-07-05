<?php

namespace App\Repositories;

use App\Models\Attorney;
use InfyOm\Generator\Common\BaseRepository;

class AttorneyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'meta_description',
        'content',
        'bio',
        'banner',
        'slug',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Attorney::class;
    }
}
