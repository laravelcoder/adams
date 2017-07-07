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
        'upper_content',
        'lower_content',
        'meta_description',
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
