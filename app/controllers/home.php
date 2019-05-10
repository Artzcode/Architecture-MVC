<?php

class Home
{
	function index()
	{
		$data = '';
		
		$this->view('home/index', $data);
	}
}