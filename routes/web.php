<?php

use Illuminate\Support\Facades\Route;

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

    // 1. welcom대신 index 나오게 하기
    // return view('welcome');

    // 2. 변수 출력시키기
    // $hello = "Hellow World";
        // 방법 1
        // return view('index',compact('hello'));

        // 방법 2
        // return view('index')->with([
        //     'hello'=> 'Hello~',
        //     'name'=> 'Heo~'
        // ]);
        
    // 3. if 조건문 사용하여 출력시키기(if문 적용은 compact만 됨!)
    // $a = 1;
    // return view('index',compact('a'))->with([
    //     'hello'=> 'Hello~',
    //     'name'=> 'Heo~',
    // ]);

    // 4. foreach 반복문을 사용하여 해당 item 전체 출력하기
    $fruit = [
        '🍇',
        '🍋',
        '🍎',
        '🥝'
    ];
    
    return view('index',compact('fruit'))->with([
        'hello' => 'Hello~',
        'name' => 'Jellyshot!'
    ]);



});
