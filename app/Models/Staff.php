<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Staff
 * @package App\Models
 * @version July 8, 2017, 4:05 am UTC
 */
class Staff extends Model
{
    use SoftDeletes;

    public $table = 'staff';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'staff_type',
        'name',
        'upper_content',
        'lower_content',
        'meta_description',
        'bio',
        'image',
        'banner',
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
        'name' => 'string',
        'upper_content' => 'string',
        'lower_content' => 'string',
        'meta_description' => 'string',
        'bio' => 'string',
        'image' => 'string',
        'banner' => 'string',
        'slug' => 'string',
        'lang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'staff_type' => 'required',
        'name' => 'required'
    ];

    
}
