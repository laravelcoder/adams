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
        'title',
        'intro',
        'phone',
        'email',
        'upper_content',
        'bio',
        'lower_content',
        'meta_description',
        'facebook',
        'twitter',
        'googleplus',
        'youtube',
        'image',
        'banner',
        'status',
        'slug',
        'lang',
        'video',
        'video2',
        'video3'
    ];


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }


    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lawyer::class;
    }
}
