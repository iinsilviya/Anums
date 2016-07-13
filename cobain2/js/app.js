'use strict';

var app = angular.module('myApp', ['ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/login', {
		templateUrl: 'partials/login.html',
		controller: 'LoginController'
	});
	$routeProvider.when('/home', {
		templateUrl: 'partials/home.html',
		controller: 'HomeController'
	});
	$routeProvider.otherwise({
		redirectTo: '/login'
	});
}]);

app.run(['$rootScope', '$location', 'loginService', function($rootScope, $location, loginService){
	
	var permissionRoute = ['/home'] ;

	$rootScope.$on('$routeChangeStart', function(event, oldUrl, newUrl){
		if ( permissionRoute.indexOf($location.path()) != -1  ) {
			loginService.isLogin();
		};
	});
}]);