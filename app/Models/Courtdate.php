<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Courtdate
 * @package App\Models
 * @version July 5, 2017, 7:44 pm UTC
 */
class Courtdate extends Model
{
    use SoftDeletes;

    public $table = 'courtdates';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'title',
        'notes',
        'case_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'notes' => 'string',
        'case_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function case()
    {
        return $this->belongsTo(\App\Models\Case::class, 'case_id', 'id');
    }
}
