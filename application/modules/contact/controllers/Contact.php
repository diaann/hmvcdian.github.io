<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
	public function index(){
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
	}
}
