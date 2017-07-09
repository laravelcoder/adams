<?php

namespace App\Repositories;

use App\Models\Lawyer;
use InfyOm\Generator\Common\BaseRepository;

class LawyerRepository extends BaseRepository
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
        'image',
        'banner',
        'slug',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lawyer::class;
    }
}
