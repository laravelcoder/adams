<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;


/**
 * Class Lawyer
 * @package App\Models
 * @version July 10, 2017, 2:25 am UTC
 */
class Lawyer extends Model
{
    use SoftDeletes;


    public $table = 'lawyers';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
        'video3',
        'is_published'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'title' => 'string',
        'intro' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'upper_content' => 'string',
        'bio' => 'string',
        'lower_content' => 'string',
        'meta_description' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'googleplus' => 'string',
        'youtube' => 'string',
        'image' => 'string',
        'banner' => 'string',
        'status' => 'string',
        'slug' => 'string',
        'lang' => 'string',
        'video' => 'string',
        'video2' => 'string',
        'video3' => 'string',
        'is_published' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'title' => 'required',
        'intro' => 'required',
        'phone' => 'required',
        'email' => 'required'
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
}
