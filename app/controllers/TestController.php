<?php

class TestController extends BaseController {

	public function index($id)
	{
    echo "test index toto ".$id;
    //return View::make('hello');
	}

}