<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
     protected $table='orderdetail';
	protected $primaryKey = 'id';

	protected $fillable=['orderdate','shippeddate','total','status'];

	public $timestamps = false; 

	public function order()
	{
		return $this->belongsTo('App\Order','id');
	}
	public function product()
	{
		return $this->belongsTo('App\Product','product_id');
	}
}
	
