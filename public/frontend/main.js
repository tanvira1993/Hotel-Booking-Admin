var hotelAdminApp = angular.module("hotelAdminApp", [
	"ui.router",	
	"oc.lazyLoad",
	]);

/********************************************
 END: BREAKING CHANGE in AngularJS:
 *********************************************/

 /* Setup App Interceptors */
 /*hotelAdminApp.config(['$httpProvider', function($httpProvider) {
 	$httpProvider.interceptors.push('MaxInterceptor');

 }]);*/

/* hotelAdminApp.factory('MaxInterceptor', ['$rootScope','$q', function ($rootScope,$q) {
 	var interceptor = {
 		request: function(config) {
 			config.headers['Content-Type'] = 'application/x-www-form-urlencoded';
 			if (!!$rootScope.token) {
 				config.headers.Token = 'Bearer '+ 'kochu '+$rootScope.token;
 				config.headers.idUser = $rootScope.idUser;
 				config.headers.idUserRole = $rootScope.idUserRole;

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
 }]);*/

 /* Setup App Main Controller */
 hotelAdminApp.controller('AppController', ['$scope', '$rootScope', '$location', '$timeout', '$http','$stateParams','$window',function($scope, $rootScope, $location, $timeout, $http,$stateParams,$window) {
 	$scope.$on('$viewContentLoaded', function() {

 	});
 }]);

 /* Setup App run functions*/
 /*hotelAdminApp.run(['$rootScope', '$http','$state','$window', '$filter', '$location',
 	function($rootScope, $http, $state,$window, $filter,$location) {

 		$rootScope.token = localStorage.getItem('token');
 		$rootScope.idUser = localStorage.getItem('idUser');
 		$rootScope.idUserRole= localStorage.getItem('idUserRole');

 		$rootScope.loginInfo = {
 			email: null,
 			password: null
 		};

 		$rootScope.validateSignin = function (){
 			var formStatus = true;
 			return formStatus;
 		}

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

 					$rootScope.token = localStorage.getItem('token');
 					$rootScope.idUser = localStorage.getItem('idUser');
 					$rootScope.idUserRole= localStorage.getItem('idUserRole');
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

 		$rootScope.getAllProjectList = function(){

 			$http({
 				method: 'get',
 				url: 'api/projectList',
 			}).then(function (response) {
 				$rootScope.projectList = response.data.data;

 			}, function (response) {


 			});

 		}

 		$rootScope.getAllMaterialList = function(){

 			$http({
 				method: 'get',
 				url: 'api/materialList',
 			}).then(function (response) {
 				$rootScope.materialList = response.data.data;

 			}, function (response) {


 			});

 		}

 		$rootScope.getAllVendorList = function(){

 			$http({
 				method: 'get',
 				url: 'api/vendorList',
 			}).then(function (response) {
 				$rootScope.vendorList = response.data.data;

 			}, function (response) {


 			});

 		}

 		$rootScope.getApproverList1 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getApproverList1',
 			}).then(function (response) {
 				$rootScope.approverList1 = response.data.data;
 			}, function (response) {


 			});
 		}
 		
 		$rootScope.getApproverList2 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getApproverList2',
 			}).then(function (response) {
 				$rootScope.approverList2 = response.data.data;
 			}, function (response) {


 			});
 		}

 		$rootScope.getApproverList3 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getApproverList3',
 			}).then(function (response) {
 				$rootScope.approverList3 = response.data.data;
 			}, function (response) {


 			});
 		}

 		$rootScope.getApproverList4 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getApproverList4',
 			}).then(function (response) {
 				$rootScope.approverList4 = response.data.data;
 			}, function (response) {


 			});
 		}

 		$rootScope.getAllCustomerList = function(){

 			$http({
 				method: 'get',
 				url: 'api/customerList',
 			}).then(function (response) {
 				$rootScope.customerList = response.data.data;

 			}, function (response) {


 			});

 		}

 		$rootScope.getUserIdById = function(){

 			$http({
 				method: 'get',
 				url: 'api/userIdById',
 			}).then(function (response) {
 				$rootScope.usersInfo= response.data.data;

 			}, function (response) {


 			});

 		}
 		
 		$rootScope.getPRApprovedList = function(){

 			$http({
 				method: 'get',
 				url: 'api/getPRApprovedList',
 			}).then(function (response) {
 				$rootScope.prApprovedList= response.data.data;

 			}, function (response) {


 			});

 		}

 		$rootScope.getPOApproverList1 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getPOApproverList1',
 			}).then(function (response) {
 				$rootScope.poApproverList1 = response.data.data;
 			}, function (response) {


 			});
 		}

 		$rootScope.getPOApproverList2 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getPOApproverList2',
 			}).then(function (response) {
 				$rootScope.poApproverList2 = response.data.data;
 			}, function (response) {


 			});
 		}

 		$rootScope.getPOApproverList3 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getPOApproverList3',
 			}).then(function (response) {
 				$rootScope.poApproverList3 = response.data.data;
 			}, function (response) {


 			});
 		}

 		$rootScope.getPOApproverList4 = function(){
 			$http({
 				method: 'get',
 				url: 'api/getPOApproverList4',
 			}).then(function (response) {
 				$rootScope.poApproverList4 = response.data.data;
 			}, function (response) {


 			});
 		}

 		$rootScope.logOut= function(){
 			window.location.href = 'login/logout/';
 		}

 		if($rootScope.token!=null && $rootScope.idUser!=null&& $rootScope.idUserRole!=null)
 		{
 			$rootScope.getAllVendorList();
 			$rootScope.getAllCustomerList();
 			$rootScope.getAllProjectList();
 			$rootScope.getAllMaterialList();
 			$rootScope.getUserIdById();
 			$rootScope.getApproverList1();
 			$rootScope.getApproverList2();
 			$rootScope.getApproverList3();
 			$rootScope.getApproverList4();
 			$rootScope.getPRApprovedList();

 			$rootScope.getPOApproverList1();
 			$rootScope.getPOApproverList2();
 			$rootScope.getPOApproverList3();
 			$rootScope.getPOApproverList4();
 		}
 		
 	}]);*/
