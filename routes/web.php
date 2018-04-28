<?php


Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

// Route for Post
Route::get('/', 'PostsController@index');







// Route::get('/tasks', function () {

// 	// $tasks = DB::table('tasks')->latest()->get();

// 	$tasks = App\Task::all();

// 	return view('welcome', compact('tasks'));

// });

// Route::get('/tasks/{task}', function ($id) {

// 	// $task = DB::table('tasks')->find($id);

// 	$task = App\Task::find($id);

// 	return view('tasks.show', compact('task'));
// });