/* Setup blank page controller */
angular.module('hotelAdminApp').controller('RegisterController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components

        $scope.userInfo = {
        	name: null,
        	email: null,
        	password: null,
        	repass: null,
        	phone: null
        };


        $scope.validateAddUser = function (){
        	var formStatus = true;

        	for ( var input in $scope.userInfo) {

        		if(input === 'name' ||  input === 'email' ||  input==='password'  || input==='repass' || input==='phone'|| input==='role'|| input==='position'||input==='project'){
        			if (!!$scope.userRegistrationForm[input].$error.required) {
        				$scope.userRegistrationForm[input].$setDirty(true);
        				formStatus = false;
        			}
        		}
        	}
        	$scope.userRegistrationForm['password'].$setValidity("isValidcp",true);
        	if($scope.userInfo.repass != $scope.userInfo.password){
        		$scope.userRegistrationForm['repass'].$setValidity("isValidcp",false);
        		formStatus = false;
        	}

        	return formStatus;
        }
        
        $scope.createUser = function(){

        	if($scope.validateAddUser()){

        		toastr.info("'info', 'Loading!', 'Please wait.'")
        		$http({
        			method: 'post',
        			url: 'api/createUser',
        			data:$scope.userInfo
        		}).then(function (response) {
        			$scope.userInfo=null;
        			toastr.success("Admin Registration Completed.")

        		}, function (response) {
        			swal({
        				title: response.data.heading,
        				text: response.data.message,
        				html:true,
        				type: 'error'
        			});		
        		});
        	}
        	else{
        		toastr.error("Please, Provide the correct requried informations.")
        	}
        }
    });
}]);
