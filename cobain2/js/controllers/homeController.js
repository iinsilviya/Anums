'use strict';

app.controller('HomeController', ['$window', '$http','$scope','loginService','userService','$location', 
	function($window, $http, $scope, loginService, userService, $location){
	$scope.msgtxt = '';
    function getUser(){
		loginService.getSession().then(
            function(response) {
				var id = response.data ;
				if (id === '') {
					$location.path('/login') ;
				}
				else{
					userService.get_by_id(id).then(
						function(response){
							if (response.data.error == true) {
								$scope.msgtxt = response.data.msg;
							}
							else{
								$scope.user = response.data.data;
								$scope.quantity = 1;
							}
						}
					);
                    userService.get_daftar(id).then(
						function(response){
							if (response.data.error == true) {
								$scope.msgtxt = response.data.msg;
							}
							else{
								$scope.daftar = response.data.data;
								$scope.quantity = 1;
							}
						}
					);
                    userService.get_nilai(id).then(
						function(response){
							if (response.data.error == true) {
								$scope.msgtxt = response.data.msg;
							}
							else{
								$scope.nilai = response.data.data;
								$scope.quantity = 1;
							}
						}
					);
					


					
				}
            }
		);
    };

    getUser() ;

    $scope.logout = function(){
        loginService.logout();
    };

	//ubah password here we go!
	$scope.ps = {'passwordbaru':'','password':'', 'username':''};
	$scope.pesan = '';
	
	$scope.ubah = function(data){
		loginService.ubah(data).then(
			function(response){
				if ( response.data.error ) {
					$scope.pesan = response.data.msg;
					console.log('gagal');
					$window.alert($scope.pesan);
					$scope.ps = null;
				}
				else{
					console.log('berhasil');
					$scope.pesan = response.data.msg;
					$window.alert($scope.pesan);
					$scope.ps = null;
				}
			}
		);
	};



	$scope.berhasil = function(data){
		$window.alert('Berhasil menyimpan.');
	}

}]);