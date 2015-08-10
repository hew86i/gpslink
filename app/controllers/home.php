<?php

/**
* Home controller
*/
class Home extends Controller
{
	public function index($name = '')
	{
		// load model by filename
		$user = $this->model('User');
		$user->name = $name;
		// echo $user->name;
		// $this->view('home/index', ['name' => $user->name]);
		$this->view('home/home');

	}

}
 ?>