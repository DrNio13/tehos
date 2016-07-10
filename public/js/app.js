var adminApp = angular.module('adminApp', []);

adminApp.controller("loginController", ['$scope', function($scope){
	
	$scope.user = {
		name : '',
		password : ''
	};	

	$scope.validateLoginCredentials = function(name,pass){
		console.log(name,pass);
	};


}]);