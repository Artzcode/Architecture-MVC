<?php

class HomeController extends Controller
{
	function index()
	{
		$data = '';
		
		$this->view('home/index', $data);
	}
}