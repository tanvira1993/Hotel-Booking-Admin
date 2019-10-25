/* Setup blank page controller */
angular.module('hotelAdminApp').controller('ResetPasswordController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        $scope.changePassword = function(){

        	toastr.info("'info', 'Loading!', 'Please wait.'")
        	$http({
        		method: 'post',
        		url: 'api/changePass',
        		data:$scope.passInfo
        	}).then(function (response) {
        		$scope.passInfo=null;
        		toastr.success("Password Changed..!!") 
        		window.location.href = 'login/logout/';       		
        	}, function (response) {
        		swal({
        			title: response.data.heading,
        			text: response.data.message,
        			html:true,
        			type: 'error'
        		}); 
        		toastr.error("Password could not be Changed!!")
        	});

        }
    });
}]);
