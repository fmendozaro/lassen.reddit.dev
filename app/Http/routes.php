<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('sayhello/{name?}', 'HomeController@sayHello');

Route::get('uppercase/{str}', function($str){
	$data = ['ostr' => $str,
			 'ustr' => strtoupper($str)];
	return view('uppercase', $data);
});

Route::get('increment/{i?}', 'HomeController@increment');

Route::get('add/{a}/{b}', function($a, $b){
	return $a+$b;
});

Route::get('rolldice/{guess}', function($guess){
	$rnd = mt_rand(1,6);
	$res = ($rnd == $guess) ? 'You guessed.':'You failed.';

	$data = [
			'guess' => $guess,
			'rnd' => $rnd,
			'res' => $res
			];

	return view('rolldice', $data);
});

Route::resource('posts', 'PostsController');

Route::get('orm-test', function ()
{
    $post1 = new \App\Models\Post();
	$post1->title = 'Eloquent is awesome!';
	$post1->url='https://laravel.com/docs/5.1/eloquent';
	$post1->content  = 'It is super easy to create a new post.';
	$post1->created_by = 1;
	$post1->save();

	$post2 = new \App\Models\Post();
	$post2->title = 'Eloquent is really easy!';
	$post2->url='https://laravel.com/docs/5.1/eloquent';
	$post2->content = 'It is super easy to create a new post.';
	$post2->created_by = 1;
	$post2->save();
});


