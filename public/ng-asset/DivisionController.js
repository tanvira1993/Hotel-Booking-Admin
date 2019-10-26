
/* Setup blank page controller */
angular.module('hotelAdminApp').controller('DivisionController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        $scope.createDivision=function()
        {
        	toastr.info("'info', 'Loading!', 'Please wait.'")
        	$http({
        		method: 'post',
        		url: 'api/createDivision',
        		data:$scope.divisonInfo
        	}).then(function (response) {
        		$scope.divisonInfo=null;
        		toastr.success("Divison Created..!!") 

        	}, function (response) {
        		swal({
        			title: response.data.heading,
        			text: response.data.message,
        			html:true,
        			type: 'error'
        		}); 
        		toastr.error("Divison could not be Created!!")
        	});

        } 

     
    });
}]);
