'use strict';
app.directive('loginDirective', function(){
	return{
		templateUrl:'partials/tpl/login.tpl.html'
	}
});
app.directive('homeDirective', function(){
	return{
		templateUrl:'partials/tpl/home.tpl.html'
	}
});
app.directive('downloadDirective', function(){
	return{
		templateUrl: 'partials/tpl/download.tpl.html'
	}
});
app.directive('uploadDirective', function(){
	return{
		templateUrl: 'partials/tpl/upload.tpl.html'
	}
});
app.directive('cekDirective', function(){
	return{
		templateUrl: 'partials/tpl/cek.tpl.html'
	}
});
app.directive('tutorialDirective', function(){
	return{
		templateUrl: 'partials/tpl/tutorial.tpl.html'
	}
});
app.directive('ubahDirective', function(){
	return{
		templateUrl: 'partials/tpl/ubah.tpl.html'
	}
});