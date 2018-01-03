<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $table='product';
	protected $primaryKey = 'id';

	protected $fillable=['name','description','price','sale','quanlity','status','stock','image','content'];

	public $timestamps = false; 
}
