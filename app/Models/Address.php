<?php

namespace App\Models;

use App\ElasticsearchConnect\ElasticsearchableInterface;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Address
 * @package App\Models
 * @version April 17, 2017, 7:29 pm UTC
 */
class Address extends Model implements ElasticsearchableInterface
{
    use SoftDeletes;

    public $table = 'addresses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'country',
        'postcode',
        'street',
        'town'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'country' => 'string',
        'id' => 'integer',
        'postcode' => 'string',
        'street' => 'string',
        'town' => 'string'
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

	public function getEsId()
	{
		return $this->id;
	}

	public function getEsData()
	{
		$data = [
			'street' => $this->street,
			'town' => $this->town,
			'postcode' => $this->postcode,
			'country' => $this->country,
		];

		return $data;
	}

	public function getEsType()
	{
		return 'address';
	}


}
