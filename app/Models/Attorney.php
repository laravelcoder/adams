<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Attorney
 * @package App\Models
 * @version July 5, 2017, 7:30 pm UTC
 */
class Attorney extends Model
{
    use SoftDeletes;

    public $table = 'attorneys';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'meta_description',
        'content',
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
        'meta_description' => 'string',
        'content' => 'string',
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
