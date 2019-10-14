<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-ng-app="hotelAdminApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hotel Booking Admin Panel</title>

    <link rel="stylesheet" href="frontend/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="frontend/toastr.min.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="frontend/sweetalert.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

</head>
<body ng-controller="AppController">
    <div>
        <h1>Header-ADMIN</h1>
    </div>

    <div >
        <div ui-view> </div>
    </div>
    <div>
        <h1>Footer-ADMIN</h1>
    </div>
    <script src="frontend/jquery.min.js" type="text/javascript"></script>
    <script src="frontend/angular.min.js"></script>
    <script src="frontend/ocLazyLoad.min.js"></script>
    <script src="frontend/angular-ui-router.js"></script>   
    <script src="frontend/main.js" type="text/javascript"></script>
    <script src="frontend/routes.js" type="text/javascript"></script>   
    <script src="frontend/toastr.min.js" type="text/javascript"></script>   
    <script src="frontend/bootstrap.min.js"></script>
    <script src="frontend/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
</body>
</html>
