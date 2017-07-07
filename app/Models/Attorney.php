<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Attorney
 * @package App\Models
 * @version July 6, 2017, 6:48 pm UTC
 */
class Attorney extends Model
{
    use SoftDeletes;

    public $table = 'attorneys';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'upper_content',
        'lower_content',
        'meta_description',
        'bio',
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
        'name' => 'string',
        'upper_content' => 'string',
        'lower_content' => 'string',
        'meta_description' => 'string',
        'bio' => 'string',
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
        'name' => 'required'
    ];

    
}
