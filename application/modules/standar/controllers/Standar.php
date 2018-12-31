<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Standar extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	

        $this->load->view('header_ultra');
        $this->load->view('sidebar_ultra');
        $this->load->view('top_navigation_ultra');
        $this->load->view('content_ultra');
        $this->load->view('footer_ultra');
	}
}
