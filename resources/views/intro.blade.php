<?php
/**
 * Created by PhpStorm.
 * User: 11356839
 * Date: 10/2/2017
 * Time: 7:16 PM
 */


Route::get('/', function(){
    return view('welcome');
});

Route::get('hello', function(){
    return "Hello world";
});

Route::