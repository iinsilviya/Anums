'use strict';

app.service('userService', function($http){

    this.get_by_id = function(id){
        var url_    = 'data/ajax/user/getUserById.php' ;
        var params_ = {'id': id} ;

        return $http.get(url_, {'params': params_}) ;
    };

    this.get_daftar = function(id){
    	var url_    = 'data/ajax/user/getDaftar.php' ;
        var params_ = {'id': id} ;

        return $http.get(url_, {'params': params_}) ;
    }
    this.get_nilai = function(id){
        var url_    = 'data/ajax/user/getNilai.php' ;
        var params_ = {'id': id} ;

        return $http.get(url_, {'params': params_}) ;
    }

});
