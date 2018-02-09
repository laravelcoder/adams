<?php

namespace App\Repositories;

use App\Models\Service;
use InfyOm\Generator\Common\BaseRepository;
use Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;
use View;

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
        'icon_class',
        'is_published'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Service::class;
    }

    /**
     * @param $slug
     *
     * @return mixed
     */
    public function getBySlug($slug)
    {
        return $this->service->where('slug', $slug)->first();
    }
}
