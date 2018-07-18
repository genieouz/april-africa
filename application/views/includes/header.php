<!DOCTYPE html> 
<html lang="en-US">
<head>
  <title>prospect</title>
  <meta charset="utf-8">
  <link href="<?php echo base_url(); ?>assets/css/admin/global.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
	    <div class="container">
	      <a class="brand">April Africa</a>
	      <ul class="nav">
	        <li <?php if($this->uri->segment(2) == 'products'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>index.php/admin/products">Produits vendus par les org</a>
	        </li>
	        <li <?php if($this->uri->segment(2) == 'manufacturers'){echo 'class="active"';}?>>
	          <a href="<?php echo base_url(); ?>index.php/admin/manufacturers">Organisations</a>
	        </li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Profil <b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="<?php echo base_url(); ?>index.php/admin/logout">Déconnexion</a>
	            </li>
	          </ul>
	        </li>
	      </ul>
	    </div>
	  </div>
	</div>	
