<?php

	function getRulesLogin(){
		return array( 
			array(
				  'field' => 'email',
				  'label' => 'Correo',
				  'rules' => 'trim',
				  'errors' => array('required' => 'El %s es requerido')
			 ) ,
			array(
				  'field' => 'password',
				  'label' => 'Contraseña',
				  'rules' => 'trim',
				  'errors' => array('required' => 'La %s es requerido')	
				),
	    );
	}

?>