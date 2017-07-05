<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Service
 * @package App\Models
 * @version July 5, 2017, 7:18 pm UTC
 */
class Service extends Model
{
    use SoftDeletes;

    public $table = 'services';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'service',
        'intro',
        'content',
        'meta_description',
        'banner',
        'slug',
        'lang',
        'icon-class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'service' => 'string',
        'intro' => 'string',
        'content' => 'string',
        'meta_description' => 'string',
        'banner' => 'string',
        'slug' => 'string',
        'lang' => 'string',
        'icon-class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'service' => 'required',
        'intro' => 'required'
    ];

    
}
