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
        $scope.createBlog= function(){
            toastr.info("'info', 'Loading!', 'Please wait.'")
            $http({
                method: 'post',
                url: 'api/createBlog',
                data:$scope.blogInfo
            }).then(function (response) {
                $scope.blogInfo=null;
                toastr.success("Blog Created..!!") 

            }, function (response) {
                swal({
                    title: response.data.heading,
                    text: response.data.message,
                    html:true,
                    type: 'error'
                }); 
                toastr.error("Blog could not be Created!!")
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
         $scope.getAllDistrict= function ()
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

      
    
        $scope.getAllDivision();
        $scope.getAllDistrict();

        initSelect2Dropdown();
    });
}]);
