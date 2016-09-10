<?php

class App extends Controller{

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->native_helper('URLHelper');

		$this->render('index');
	}
}

?>