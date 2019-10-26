/* Setup blank page controller */
angular.module('hotelAdminApp').controller('BlogController', ['$scope', '$rootScope', '$location', '$timeout', '$http', function($scope, $rootScope, $location, $timeout, $http) {
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

        $scope.getAllDistricts= function ()
        {
            $http({
                method: 'get',
                url: 'api/getAllDistricts',
            }).then(function (response) {
                $rootScope.districtList= response.data.data;
            }, 
            function (response) {               

            });
        }
        $scope.getAllDistricts();
        $scope.getAllDivision();
        initSelect2Dropdown();
    });
}]);
