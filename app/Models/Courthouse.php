<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Courthouse
 * @package App\Models
 * @version July 5, 2017, 7:38 pm UTC
 */
class Courthouse extends Model
{
    use SoftDeletes;

    public $table = 'courthouses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'courthouse',
        'street',
        'street2',
        'city',
        'state',
        'zip',
        'country',
        'notes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'courthouse' => 'string',
        'street' => 'string',
        'street2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'notes' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'courthouse' => 'required'
    ];

    
}
