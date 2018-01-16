<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productimage extends Model
{
    
    protected $table='image_produc';
	protected $primaryKey = 'id';

	protected $fillable=['images','produc_id'];

	public $timestamps = false; 

	public function product()
	{
		return $this->belongsTo('App\Product','product_id');
	}
}
