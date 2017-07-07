<?php

namespace App\Repositories;

use App\Models\Service;
use InfyOm\Generator\Common\BaseRepository;

class ServiceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'service',
        'intro',
        'upper_content',
        'lower_content',
        'meta_description',
        'banner',
        'slug',
        'lang',
        'icon_class'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Service::class;
    }


}
