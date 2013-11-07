<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	function __construct()
    {
        parent::__construct();
 		$this->load->helper('my_uri');
    }
 	public function view($page = 'home')
	{
		if ( ! file_exists('application/views/pages/'.$page.'.php'))
			{
				show_404();
			}

		$data['title'] = ucfirst($page); // Capitalize the first letter
		$this->load->view('templates/header', $data);
		$this->load->view('templates/nav', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}
?>