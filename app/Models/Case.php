<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Case
 * @package App\Models
 * @version July 5, 2017, 7:36 pm UTC
 */
class Case extends Model
{
    use SoftDeletes;

    public $table = 'cases';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class, 'post_id');
    }
}
