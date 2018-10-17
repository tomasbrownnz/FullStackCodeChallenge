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

Auth::routes();

Route::get('/home', function(){
    $tasks = DB::select('select * from tasks where userId = :id', ['id' => Auth::user()->id]);
    return view('home', [
        'tasks' => $tasks
    ]);
});

Route::get('/newtask', function () {
    $taskName = $_GET['taskName'];
    $userId = $_GET['userId'];
    DB::insert('insert into tasks (name, userId) values ( ?, ?)', [$taskName, $userId]);
    return redirect('home');
});

Route::get('/completetask', function () {
    $taskId = $_GET['taskId'];
    DB::delete('delete from tasks where id = (?)', [$taskId]);
    return redirect('home');
});
    
Auth::routes();
