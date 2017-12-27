<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Chude;
class ChudeController extends Controller{
	public function chude()
	{
		$list_chude = Chude::all();
		//update field
		$_news = Chude::where('chude_id',1)->first();

		$_news->chude_name = 'Công nghệ thông tin 1';

		$_news->save();

		//create
		//$_news_cre = new Category();
		//$_news_cre->cat_name = 'jhgfghjk';
		//$_news_cre->save();

		return view('chude',['list_chude'=>$list_chude]);

	}
}


?>