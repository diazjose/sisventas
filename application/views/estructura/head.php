<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   	<title>SisVentas</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">	  <!-- CSS  -->
	<link href="<?= base_url() ?>public/css/login.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="<?= base_url() ?>public/css/home.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  	<link href="<?= base_url() ?>public/css/facturas.css" rel="stylesheet">
	

	<link href="<?= base_url() ?>public/fontawesome/css/all.css" rel="stylesheet">
	<link href="<?= base_url() ?>public/fontawesome/css/fontawesome.css" rel="stylesheet">
	<link href="<?= base_url() ?>public/fontawesome/css/brands.css" rel="stylesheet">
	<link href="<?= base_url() ?>public/fontawesome/css/solid.css" rel="stylesheet">

	<script defer src="<?= base_url() ?>public/fontawesome/js/all.js"></script>
	<script defer src="<?= base_url() ?>public/fontawesome/js/brands.js"></script>
	<script defer src="<?= base_url() ?>public/fontawesome/js/solid.js"></script>
	<script defer src="<?= base_url() ?>public/fontawesome/js/fontawesome.js"></script>


</head>
<body>

	<nav class="navbar navbar-expand-lg  bg-primary navbar-dark">
	  <a class="navbar-brand" href="#"> <i class="fas fa-home"></i> SisVentas</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link <?php if ($this->uri->segment(1)=='facturacion'): ?>active<?php endif ?>" href="<?= base_url() ?>facturacion"><i class="fas fa-clipboard-list"></i> Facturas</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link <?php if ($this->uri->segment(1)=='productos'): ?>active<?php endif ?>" href="<?= base_url() ?>productos"><i class="fas fa-barcode"></i> Productos</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link <?php if ($this->uri->segment(1)=='usuarios'): ?>active<?php endif ?>" href="<?= base_url() ?>usuarios"><i class="fas fa-user"></i> Usuarios</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link <?php if ($this->uri->segment(1)=='configuracion'): ?>active<?php endif ?>" href="<?= base_url() ?>configuracion"><i class="fas fa-cogs"></i> Configuracion</a>
	      </li>
	      
	    </ul>
	    <ul class="navbar-nav justify-content-end">
	        <li class="nav-item">
	          <a class="nav-link" href="<?= base_url() ?>login/logout"> <i class="fas fa-redo-alt"></i> Cerrar Sesion</a>
	        </li>
	    </ul>
	    
	  </div>
	</nav>


