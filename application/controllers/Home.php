<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('konten');
		$this->load->view('footer');
	}

	public function synopsis(){
		$this->load->view('synopsis');
	}

	public function contact(){
		$this->load->view('contact');
	}

}
