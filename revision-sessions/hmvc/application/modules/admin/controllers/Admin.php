<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function phpinfo(){
		phpinfo();
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */