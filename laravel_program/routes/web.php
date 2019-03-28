<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/program_test',function(){
	//echo bcdiv(105, 1.02523563333333333333334,3);
	echo bcmul(105.45555555555555555555555555555555, 1.02523563333333333333334444444444444555555,15);

	//echo 105.45555555555555555555555555555555 * 1.02523563333333333333334444444444444555555;
});
