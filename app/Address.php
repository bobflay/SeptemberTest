<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    protected $fillable = [
    	'name',
    	'floor',
    	'building',
    	'street',
    	'city',
    	'region',
    	'country',
    	'created_by',
    	'modified_by',
    	'user_id'
    ];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

}
