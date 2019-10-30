var hotelAdminApp = angular.module("hotelAdminApp", [
	"ui.router",	
	"oc.lazyLoad",
	]);

/********************************************
 END: BREAKING CHANGE in AngularJS:
 *********************************************/

 /* Setup App Interceptors */
 hotelAdminApp.config(['$httpProvider', function($httpProvider) {
 	$httpProvider.interceptors.push('MaxInterceptor');

 }]);

 hotelAdminApp.factory('MaxInterceptor', ['$rootScope','$q', function ($rootScope,$q) {
 	var interceptor = {
 		request: function(config) {
 			config.headers['Content-Type'] = 'application/x-www-form-urlencoded';
 			if (!!$rootScope.token) {
 				config.headers.Token = 'Bearer '+ 'kochu '+$rootScope.token;
 				config.headers.idUser = $rootScope.idUser;
 				config.headers.idUserRole = $rootScope.idUserRole;
 				config.headers.idUserRole = $rootScope.idProject;

 			}

 			if (config.method === 'POST') {
 				config.data = $.param(config.data);
 			}
 			return config;
 		},
 		response: function(response) {
 			return response;
 		},
 		responseError: function(response, error) {
 			return $q.reject(response);
 		}
 	};
 	return interceptor;
 }]);

 /* Setup App Main Controller */
 hotelAdminApp.controller('AppController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$stateParams','$window',function($scope, $rootScope, $location, $timeout, $http,$stateParams,$window) {
 	$scope.$on('$viewContentLoaded', function() {

 	});
 }]);

 /* Setup App run functions*/
 hotelAdminApp.run(['$rootScope', '$http','$state','$window', '$filter', '$location',
 	function($rootScope, $http, $state,$window, $filter,$location) {

 		$rootScope.token = localStorage.getItem('token');
 		$rootScope.idUser = localStorage.getItem('idUser');
 		$rootScope.idUserRole= localStorage.getItem('idUserRole');
 		$rootScope.idProject= localStorage.getItem('idProject');
 		
 		$rootScope.loginInfo = {
 			email: null,
 			password: null
 		};

 		$rootScope.validateSignin = function (){
 			var formStatus = true;
 			return formStatus;
 		}

 		
 		$rootScope.getSiteHit= function ()
 		{
 			$http({
 				method: 'get',
 				url: 'http://127.0.0.1:8000/api/seeVisitor',

 			}).then(function (response) {
 				$rootScope.hits= response.data.data;
 			}, 
 			function (response) {               

 			});
 		}

 		$rootScope.getSiteHit();

 		$rootScope.loginError = null;

 		$rootScope.login = function(){
 			if($rootScope.validateSignin()){
 				$http({
 					method: 'post',
 					url: 'api/login',
 					data: $rootScope.loginInfo
 				}).then(function(response) {
 					$rootScope.loginInfo= null;

 					localStorage.setItem('token', response.data.token);
 					localStorage.setItem('idUser', response.data.userInfo.user_id);
 					localStorage.setItem('idUserRole', response.data.userInfo.id_user_roles);               
 					localStorage.setItem('idProject', response.data.userInfo.id_project);               

 					$rootScope.token = localStorage.getItem('token');
 					$rootScope.idUser = localStorage.getItem('idUser');
 					$rootScope.idUserRole= localStorage.getItem('idUserRole');
 					$rootScope.idProject= localStorage.getItem('idProject');
 					toastr.success("Login Success..!!")
 					
 					$window.location.reload();
 					$location.path('/dashboard');
 				}, function(response) {
 					$rootScope.loginError = response.data.error;
 					toastr.error("Login Failed..!!")
 				});
 			}
 			else{
 				toastr.error("Login Failed..!!")
 			}

 		}

 		$rootScope.logOut= function(){
 			window.location.href = 'login/logout/';
 		}

 		
 	}]);
