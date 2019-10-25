/* Setup blank page controller */
angular.module('hotelAdminApp').controller('AdminResetPasswordController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
	$scope.$on('$viewContentLoaded', function() {
        // initialize core components
        const initSelect2Dropdown = function () {
        	$timeout(function () {
        		$(".select2dropdown").select2({
        			placeholder: null,
        			width: '100%'
        		});
        	}, 500);
        }

        $scope.createForceResetPass=function()
        {
        	toastr.info("'info', 'Loading!', 'Please wait.'")
        	$http({
        		method: 'post',
        		url: 'api/adminResetPass',
        		data:$scope.resetPassInfo
        	}).then(function (response) {
        		$scope.resetPassInfo=null;
        		toastr.success("Password Updated..!!") 

        	}, function (response) {
        		swal({
        			title: response.data.heading,
        			text: response.data.message,
        			html:true,
        			type: 'error'
        		}); 
        		toastr.error("Password could not be Updated!!")
        	});

        } 

        $scope.getAllUserId= function ()
        {
        	$http({
        		method: 'get',
        		url: 'api/getAllUserId',
        	}).then(function (response) {
        		$rootScope.usersList= response.data.data;
        	}, 
        	function (response) {				

        	});
        }

        $scope.getAllUserId();
        initSelect2Dropdown();   

    });
}]);
