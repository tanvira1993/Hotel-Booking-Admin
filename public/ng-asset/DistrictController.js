
/* Setup blank page controller */
angular.module('hotelAdminApp').controller('DistrictController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
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

        $scope.createDistrict= function(){
            toastr.info("'info', 'Loading!', 'Please wait.'")
            $http({
                method: 'post',
                url: 'api/createDistrict',
                data:$scope.districtInfo
            }).then(function (response) {
                $scope.districtInfo=null;
                toastr.success("District Created..!!") 

            }, function (response) {
                swal({
                    title: response.data.heading,
                    text: response.data.message,
                    html:true,
                    type: 'error'
                }); 
                toastr.error("District could not be Created!!")
            });
        }

        
        $scope.getAllDivision= function ()
        {
            $http({
                method: 'get',
                url: 'api/getAllDivision',
            }).then(function (response) {
                $rootScope.divisionList= response.data.data;
            }, 
            function (response) {               

            });
        }

        $scope.getAllDivision();
        initSelect2Dropdown();
    });
}]);
