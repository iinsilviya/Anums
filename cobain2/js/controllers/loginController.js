'use strict';

app.controller('LoginController', ['$scope','loginService','$location','$window', 
    function ($scope, loginService, $location, $window) {
	$scope.user = {'username':'','password':''}
    $scope.msgtxt = '';

    $scope.login = function(data){
        loginService.login(data).then(
            function(response){
                if ( response.data.error ) {
                	$scope.msgtxt = response.data.msg ;
                    $window.alert($scope.msgtxt);
                }
                else{
                	$location.path('/home') ;
                }
            }
        );
    };

}]);