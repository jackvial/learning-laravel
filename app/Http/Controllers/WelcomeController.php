<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {
	public function __contstruct(){
		$this->middleware("guest");
	}

	public function index(){
		echo "Hello Roboto!!!!";
	}

	public function contact(){
		return view("contact");
	}
}