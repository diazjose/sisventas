<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facturacion extends CI_Controller {

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
		if ($this->session->userdata('is_logged')) {
			$this->load->view('estructura/head');
			$this->load->view('facturas/facturas');
			$this->load->view('estructura/footer');	
		}else{
			show_404();
		}
		
	}

	public function nueva(){
		if ($this->session->userdata('is_logged')) {
			$this->load->view('estructura/head');
			$this->load->view('facturas/nueva');
			$this->load->view('estructura/footer');	
		}else{
			show_404();
		}
	}

}
