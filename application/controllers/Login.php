<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('auth/login_rules_helper');
		$this->load->model('auth');

	}
	
	public function index()
	{
		$this->load->view('login');
	}

	public function validate(){
		
		$this->form_validation->set_error_delimiters('', '');
		$rules = getRulesLogin();
		$this->form_validation->set_rules($rules);	
		
		if ($this->form_validation->run() === FALSE) {
		
			$errors = array(
							'email' => form_error('email'),
							'password' => form_error('password'),

					  );
			echo json_encode($errors);
		
			$this->output->set_status_header(400);		  	
		
		}else {
		
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			if (!$res = $this->auth->login($email, $password)) {
				echo json_encode(array('msg' => 'El Correo o Contraseña son Incorrectas'));
				$this->output->set_status_header(401);
				exit;
			}
			$data = array('id' => $res->id_user,
						  'email' => $res->user_email,
						  'nombre_usuario' => $res->user_name,
						  'is_logged' => TRUE,
						   );

			$this->session->set_userdata($data);
		
			echo json_encode(array('url' => base_url()));
				
		}

	}

	public function logout(){
		$vars = array('id', 'email', 'nombre_usuario', 'is_logged' );
		$this->session->unset_userdata($vars);
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
