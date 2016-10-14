<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function showWelcome()
    {
    	return redirect()->action('HomeController@sayHello', array('Bob'));
    }

    public function sayHello($name = 'World')
	{
	    $data = array('name' => $name);
	    return view('my-first-view', $data);
	}

	public function increment($n = 0)
	{
		$data = array('incremented' => ($n+1));
		return view('my-first-view')->with($data);
	}

}