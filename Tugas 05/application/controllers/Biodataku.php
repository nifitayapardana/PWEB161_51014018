<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodataku extends CI_Controller {

	
	
	public function index()
	{
		$this->load->view('biodata_saya');
	}
}
