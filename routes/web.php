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

Route::get('/BackGround',function () {
    $BackGround	=	new	\App\BackGround();
    $BackGround->student_id	=	'1';
    $BackGround->name	=	'哇哈哈';
    $BackGround->account	=	'3115318';
    $BackGround->password	=	'1513153';
    $BackGround->phone	=	'0911225484';
    $BackGround->email	=	'5542184@mgail.com';
    $BackGround->sex	=	'0';
    $BackGround->class	=	'四資三乙';
    $BackGround->address	=	'台中市西屯區XX路';
    $BackGround->save();
});