<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_home extends CI_Controller {

	public function index()
	{
		$this->load->view('member_home');
	}
}
