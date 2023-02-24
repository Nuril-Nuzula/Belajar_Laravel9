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
    return view('welcome');
});

Route::get('about', function() {
    return view('about');
});

Route::get('/hello', function() {
    $dataArray = [
        'message' => 'Hello, World'
    ];
    // return $dataArray;
    return response()->json($dataArray);
});
Route::get('/debug', function() {
    $dataArray = [
        'message' => 'Hello, world'
    ];
    // pake yg mana aja bebas (bawah) cuma yg ddd lebih bagus tampilannya
    ddd(request());
    dd($dataArray);
});

$taskList = [
    'first => Sleep',
    'second => Eat',
    'third => Work',
];

Route::get('/tasks', function () use ($taskList) {
    return $taskList;
});

Route::get('/tasks/{param}', function ($param) {
    return $param;
});