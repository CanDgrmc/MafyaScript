<!DOCTYPE html>
<html ng-app="myApp">
<head>
<meta charset="utf-8">
	<title>Mafia Script</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/login.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>inc/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.min.js"></script>

</head>
<body ng-controller="myController">

<div class="container" layout-align="end center" layout="column" flex>
	
	<div ng-include="sayfa">
		
	</div>
	
	
	<div layout="row" >
	<md-button class="md-warn md-raised" ng-click="sayfa='inc/forms/login.html'" ng-show="sayfa=='inc/forms/register.html'"><i class="fa fa-sign-in"></i> Giriş yap</md-button>

	<md-button class="md-warn md-raised" ng-click="sayfa='inc/forms/register.html'" ng-show="sayfa=='inc/forms/login.html'"><i class="fa fa-plus"></i> Kayıt ol</md-button>
	</div>
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>
	<script src="<?php echo base_url();?>inc/js/app.js"></script>


</div>
</body>
</html>