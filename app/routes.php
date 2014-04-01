<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('tasks/create', array('as' => 'tasks_create', 'uses' => 'TasksController@create'));
Route::post('tasks/create', array('as' => 'tasks_store', 'uses' => 'TasksController@store'));
Route::get('/test/{name}', function($name)
{
  echo "test " . $name;
	return View::make('hello');
});
Route::get('/toto/{id}/{idx}', function($id,$idx)
{
  //echo "test toto ";
  //return View::make('test')->with('id', $id)->with('idx', $idx);
  return View::make('toto',array('id'=> $id,'idx'=>$idx));//autre méthode avec tableau
  //return View::make('test',compact('id', 'idx'));// compact = fonction php qui passe les params en tableau
});
//Route::get('/toto/index/{id}', 'TestController@index');
Route::get('/toto/index/{id}', array('as' => 'index', 'uses' => 'TestController@index'));