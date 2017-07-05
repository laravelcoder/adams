<?php

namespace App\Repositories;

use App\Models\Staff;
use InfyOm\Generator\Common\BaseRepository;

class StaffRepository extends BaseRepository
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
        return Staff::class;
    }
}
