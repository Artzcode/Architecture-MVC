<?php
	
Class App 
{
	protected $controller = 'HomeController';

	protected $method = 'index';

	protected $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();

		// controller
		if($url[0] != '')
		{
			if (file_exists('app/controllers/' . ucfirst($url[0]) . 'Controller.php')) 
			{
				$this->controller = ucfirst($url[0]) . 'Controller';
				unset($url[0]);

				$this->load();
			}
			else
			{
				http_response_code(404);
				die('Page introuvable');
			}
		}
		else
		{
			$this->load();	
		}

		// method
		if(isset($url[1]))
		{
			if(method_exists($this->controller, $url[1]))
			{
				$this->method = $url[1];
				unset($url[1]);
			}
		}

		// params
		if($url)
		{
			$this->params = array_values($url);
		}
		else
		{
			$this->params = [];
		}

		call_user_func_array([$this->controller, $this->method], $this->params);
	}	

	private function parseUrl()
	{
		$request = (($_SERVER)["REQUEST_URI"]);

		$request = substr($request, 1);
		$url = explode('/', filter_var(rtrim($request, '/'), FILTER_SANITIZE_URL));

		return $url;
	}

	private function load()
	{
		require_once 'app/controllers/' . $this->controller . '.php';
		$this->controller = new $this->controller;
	}
}