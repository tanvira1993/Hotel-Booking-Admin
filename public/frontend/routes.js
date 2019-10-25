/* Setup Rounting For All Pages */
hotelAdminApp.config(['$stateProvider', '$urlRouterProvider', function($stateProvider, $urlRouterProvider) {
    // Redirect any unmatched url
    $urlRouterProvider.otherwise("/dashboard");

    $stateProvider

    // Dashboard
    
    //Added by Tanvir

    .state('dashboard', {
    	url: "/dashboard",
    	templateUrl: "/dashboard",
    	data: {pageTitle: 'Dashboard'},
    	controller: "DashboardController",
    	resolve: {
    		deps: ['$ocLazyLoad', function ($ocLazyLoad) {
    			return $ocLazyLoad.load({
    				name: 'hotelAdminApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/DashboardController.js'
                    ]
                });
    		}]
    	}
    })

    .state('register', {
        url: "/register",
        templateUrl: "/register",
        data: {pageTitle: 'Register'},
        controller: "RegisterController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelAdminApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/RegisterController.js'
                    ]
                });
            }]
        }
    })

    .state('resetPassword', {
        url: "/resetPassword",
        templateUrl: "/resetPassword",
        data: {pageTitle: 'Reset Password'},
        controller: "ResetPasswordController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelAdminApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/ResetPasswordController.js'
                    ]
                });
            }]
        }
    })

    .state('adminResetPassword', {
        url: "/adminResetPassword",
        templateUrl: "/adminResetPassword",
        data: {pageTitle: 'Admin Reset Password'},
        controller: "AdminResetPasswordController",
        resolve: {
            deps: ['$ocLazyLoad', function ($ocLazyLoad) {
                return $ocLazyLoad.load({
                    name: 'hotelAdminApp',
                    insertBefore: '#ng_load_plugins_before', // load the above css files before a LINK element with this ID. Dynamic CSS files must be loaded between core and theme css files
                    files: [
                    'ng-asset/AdminResetPasswordController.js'
                    ]
                });
            }]
        }
    }) 


}]);
