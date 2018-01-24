<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $table='order';
	protected $primaryKey = 'id';

	protected $fillable=['orderdate','shippeddate','total','status'];

	public $timestamps = false; 
	public function orderdetail()
	{
		return $this->belongsTo('App\Orderdetail','product_id');
	}
	public function product(){
		return $this->belongsTo('App\Product','id');
	}
}
