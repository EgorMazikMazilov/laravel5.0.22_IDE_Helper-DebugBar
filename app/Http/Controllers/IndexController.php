<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends MainController{

	public function index(){

		return view('pages.index', $this->data);
	}
};