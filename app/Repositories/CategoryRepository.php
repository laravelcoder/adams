<?php

namespace App\Repositories;

use App\Models\Category;
use InfyOm\Generator\Common\BaseRepository;

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'meta_description',
        'banner',
        'slug',
        'lang'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Category::class;
    }
}
