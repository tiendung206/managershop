<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table='customer';
	protected $primaryKey = 'id';

	protected $fillable=['name','address','phone','	email'];

	public $timestamps = false; 
    public function order()
	{
		return $this->hasMany('App\Order','customer_id');
	}
}
