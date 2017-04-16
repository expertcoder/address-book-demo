<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Address
 * @package App\Models
 * @version April 16, 2017, 11:15 pm UTC
 */
class Address extends Model
{
    use SoftDeletes;

    public $table = 'addresses';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'street',
        'town',
        'postcode',
        'country'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'street' => 'string',
        'town' => 'string',
        'postcode' => 'string',
        'country' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'street' => 'required|max:200',
        'town' => 'required|max:200',
        'postcode' => 'max:20',
        'country' => 'required|max:80'
    ];

    
}
