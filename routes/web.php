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
    // return view('welcome',[
    //   'name'=>'hello world'
    // ]);

    //return view('welcome')->with('name','working fine');

    // $name = "one more method";
    // return view('welcome')->with('name',$name);

    // $name = "i love it";
    // return view('welcome',compact('name'));

    $tasks = [
      'go to store',
      'bring vegitables',
      'do home work',
      'play well'
    ];

    return view('welcome',compact('tasks'));
});

Route::get('about', function () {
    return view('about');
});

Route::get('tasks', function () {
  $tasks = DB::table('tasks')->get();
//  return $tasks;
  // return view('tasks/index');
  return view('tasks.index',compact('tasks'));
});

Route::get('task/{id}', function ($id) {
  $task = DB::table('tasks')->find($id);
//  return $task;
  // return view('tasks/index');
    return view('tasks.show',compact('task'));
});
