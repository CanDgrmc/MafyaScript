<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Mafia Script</title>
	<link href="https://fonts.googleapis.com/css?family=Arsenal" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/home.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<title>Mafia Script</title>
</head>
<body>
<div class="header">
<nav class="navbar ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
        <i class="fa fa-navicon"></i>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>Home">Mafya</a> <p class=navbar-text>Hoşgeldin, <strong><?php echo $name; ?></strong>  </p>
    </div>

    <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="menu"> 
    	<li><a href="" class="navbar-link"><span>Silahlar:</span></a></li>
    	<li><a href="" class="navbar-link"><span>Adamlar:</span></a></li>
    	<li><a href="" class="navbar-link"><span>Varlık:</span></a></li>
    	<li><a href="" class="navbar-link"><span>Kazanç:</span></a></li>
    	
    	<li><a href="./home/logout" class="navbar-link "><span class="hoverred"><i class="fa fa-heartbeat"></i> Çıkış</span></a></li>
    </ul>
  </div><!-- /.container-fluid -->
</nav>

</div>
	