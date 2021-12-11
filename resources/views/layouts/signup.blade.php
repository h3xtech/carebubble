<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Thememinister Health Admin panel</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/assets/dist/img/ico/favicon.png" type="image/x-icon">


    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Bootstrap rtl -->
    <!--<link href="/assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
    <!-- Pe-icon-7-stroke -->
    <link href="/assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <!-- style css -->
    <link href="/assets/dist/css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style rtl -->
    <!--<link href="/assets/dist/css/stylehealth-rtl.css" rel="stylesheet" type="text/css"/>-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <!-- Content Wrapper -->
    <div class="login-wrapper">
        <div class="back-link">
        </div>
        <div class="container-center" style="max-width: 840px!important;">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Signup</h3>
                            <small><strong>Please wait for your UDID to be approved (via email).</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
    <!-- jQuery -->
    <script src="/assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
    <!-- bootstrap js -->
    <script src="/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
