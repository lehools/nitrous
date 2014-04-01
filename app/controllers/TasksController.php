<?php

class TasksController extends BaseController {

	public function create()
	{
    return View::make('tasks.create');
	}
	public function store()
	{
    Tasks::create(Input::post());
    //Tasks::create(Input::get());
    //Tasks::create(Input::all()); //enregistre le formulaire dans la base de donnée
    //return Redirect::route('tasks.create');
   
    return Redirect::route('tasks_create');
	}
}