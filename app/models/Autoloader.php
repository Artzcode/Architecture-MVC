<?php

class Autoloader
{
	static function register()
	{
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}
	
	static public function autoload($class) 
	{
		$class = str_replace('\\', '/', $class);
	  	require "app/models/" . $class . ".php";
	}
}