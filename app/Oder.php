<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    
    protected $table='order';
	protected $primaryKey = 'id';

	protected $fillable=['orderdate','shippeddate','total','status'];

	public $timestamps = false; 
	public function orderdetail()
	{
		return $this->hasMany('App\Order','id');
	}
}
