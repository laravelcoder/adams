<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Staff
 * @package App\Models
 * @version July 10, 2017, 2:24 am UTC
 */
class Staff extends Model
{
    use SoftDeletes;

    public $table = 'staff';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'staff_type' => 'string',
        'title' => 'string',
        'intro' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'upper_content' => 'string',
        'lower_content' => 'string',
        'meta_description' => 'string',
        'bio' => 'string',
        'image' => 'string',
        'banner' => 'string',
        'facebook' => 'string',
        'twitter' => 'string',
        'googleplus' => 'string',
        'youtube' => 'string',
        'slug' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'intro' => 'required',
        'phone' => 'required',
        'email' => 'required'
    ];

    
}
