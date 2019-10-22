<?php
	
class Controller {

	public function view($view, $data = [])
	{
		$view = 'app/views/' . $view . '.php'; // path of the template view

		require_once 'app/views/index.php'; // require the base view | $view gonna be call in this file
	}
}