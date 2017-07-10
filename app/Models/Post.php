<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 * @package App\Models
 * @version July 7, 2017, 4:24 am UTC
 */
class Post extends Model
{
    use SoftDeletes;

    public $table = 'posts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'status' => 'string',
        'subtitle' => 'string',
        'content' => 'string',
        'notes' => 'string',
        'image' => 'string',
        'slug' => 'string',
        'meta_title' => 'string',
        'fb_title' => 'string',
        'gp_title' => 'string',
        'tw_title' => 'string',
        'meta_description' => 'string',
        'category_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
