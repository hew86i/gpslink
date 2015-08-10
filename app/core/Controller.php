<?php
/**
* Core Controller
*/
class Controller
{
	public function model($model)
	{
		require_once '../app/models/' . $model . '.php';
		return new $model;
	}

	public function view($view, $data = [])
	{
		$dir_path = '../app/views/';

		if(file_exists($dir_path . $view . '.php'))
		{
			require_once $dir_path . $view . '.php';
		}
		else
		{
			require_once $dir_path . $view . '.html';
		}
	}
}

 ?>