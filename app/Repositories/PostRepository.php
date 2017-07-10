<?php

namespace App\Repositories;

use App\Models\Post;
use InfyOm\Generator\Common\BaseRepository;

class PostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'status',
        'subtitle',
        'content',
        'notes',
        'image',
        'slug',
        'meta_title',
        'fb_title',
        'gp_title',
        'tw_title',
        'meta_description',
        'category_id',
        'user_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Post::class;
    }
}
