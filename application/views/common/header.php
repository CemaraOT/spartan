<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,intial-scale=1">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/animate.css"/>

        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/img/ico_COT.png"/>
	</head>
	<style type="text/css">
		li.active a
		{
			color:#A1C42A;
		}
	</style>
	<body>
		<nav class="navbar" id="main_head">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="<?php echo site_url();?>Main" >
                        <img src="<?php echo base_url();?>assets/img/logo_COT.png" title="Yagu Indonesia"/>
                    </a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li <?php if($this->uri->segment(1) == 'main' || $this->uri->segment(1) == '') { echo 'class="active"'; } ?>><a href="<?php echo site_url();?>main"> Beranda </a></li>
                        <li <?php if($this->uri->segment(1) == 'tentang_kami') { echo 'class="active"'; } ?>><a href="<?php echo site_url();?>tentang_kami"> Tentang Kami </a></li>
                        <li <?php if($this->uri->segment(1) == 'hubungi_kami') { echo 'class="active"'; } ?>><a href="<?php echo site_url();?>hubungi_kami"> Hubungi Kami </a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</nav>