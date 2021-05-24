<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Synopsis extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('synopsis');
		$this->load->view('footer');
	}
}
