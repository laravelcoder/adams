<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMediaConversions;


/**
 * Class Service
 * @package App\Models
 * @version July 6, 2017, 8:53 pm UTC
 */
class Service extends Model
{
    use SoftDeletes;
    use HasMediaTrait;

    public $table = 'services';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'service',
        'intro',
        'upper_content',
        'lower_content',
        'meta_description',
        'banner',
        'slug',
        'lang',
        'icon_class',
        'is_published'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'service' => 'string',
        'intro' => 'string',
        'upper_content' => 'string',
        'lower_content' => 'string',
        'meta_description' => 'string',
        'banner' => 'string',
        'slug' => 'string',
        'lang' => 'string',
        'icon_class' => 'string',
        'is_published' => 'boolean'
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
