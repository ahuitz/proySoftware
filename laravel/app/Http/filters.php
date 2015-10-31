<?php

App::before(function($request){


});

App::after(function($request, $response){


});

Route::filter('guest',function(){
	if (Auth::check()) return Redirect::to('/');
		
	
});


Route::filter('csrf',function()
{
	if (Session::token() != Input::get('_token')) 
	{
		throw new Illuminate\Session\TokenMismatchException;
		
	}

});