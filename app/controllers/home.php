<?php

class Home extends Controller
{
	function index()
	{
		$data = '';
		
		$this->view('home/index', $data);
	}
}