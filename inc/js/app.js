var myApp= angular.module('myApp',['ngMaterial']);
  myApp.config(function($mdThemingProvider) {
  $mdThemingProvider
    .theme('default')
    .primaryPalette('yellow')
    .accentPalette('teal')
    .warnPalette('red')
    .backgroundPalette('grey');

});

	myApp.controller('myController',function($scope){
		$scope.sayfa='inc/forms/login.html';
		$scope.btntext='Kayıt';
		

	})