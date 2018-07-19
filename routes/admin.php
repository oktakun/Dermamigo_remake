<?php

Route::get('/home', function () 
{
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');

})->name('home');

  Route::get('/dashboard/', 'DashboardController@dashboard');
  Route::get('/product/', 	'ProductController@product');
  Route::get('/product/add', 'ProductController@add');

