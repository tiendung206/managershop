<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Chude extends Model
{
	protected $table = 'chude';
	protected $primaryKey = 'chude_id';
	//private $cat_id;
	private $chude_name;
	public $timestamps= false;
	//public $updated_at = false;

}

?>