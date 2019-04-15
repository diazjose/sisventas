<?php

class Auth extends CI_Model {

	
	public function login($email, $password){
		
		$res = $this->db->where('user_email', $email);
		$res = $this->db->where('user_password', $password);

		$res = $this->db->get('users');
		
		if (!$res->row()) {
			return false;
		}
		return $res->row();
	}

}
?>