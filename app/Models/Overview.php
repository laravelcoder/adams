<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Overview
 * @package App\Models
 * @version July 17, 2017, 10:24 pm UTC
 */
class Overview extends Model
{
    use SoftDeletes;

    public $table = 'overviews';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'details'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'details' => 'string'
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
