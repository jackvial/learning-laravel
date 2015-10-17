<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){

    	$first = "Jack";
    	$last = "Vial";
    	$people = ['Oscar', 'Kaetlyn', 'Brogan', 'Joe'];
    	return view('pages.about')->with([
    		'first' => $first,
    		'last' => $last,
    		'people' => $people
    	]);
    }

    public function contact(){
    	return view('pages.contact');
    }
}
