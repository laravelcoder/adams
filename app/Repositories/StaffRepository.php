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
        'staff_type',
        'title',
        'intro',
        'phone',
        'email',
        'upper_content',
        'lower_content',
        'meta_description',
        'bio',
        'image',
        'banner',
        'facebook',
        'twitter',
        'googleplus',
        'youtube',
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
