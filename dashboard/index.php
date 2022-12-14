<?php
include '../assets/php/db.php';
include '../assets/php/function.php';

session_start();
if (isset($_SESSION['login'])) {
    $id = $_SESSION['id'];
    $login = query("SELECT * FROM user WHERE id = '$id'");
    $username = $_SESSION['username'];
    if (hash('sha256', $login[0]['username']) !== $username) {
    ?>
    <script type="text/javascript">
        window.location.href = "login.php";
    </script>
    <?php
    }
}else{
?>
<script type="text/javascript">
    window.location.href="login.php";
</script>
<?php
}
 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Hospital Dashboard - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin Dashboard</title>
    <link rel="apple-touch-icon" href="../assets/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="../assets/app-assets/css/pages/hospital.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

<?php 
    require 'page/header.php';

    require 'page/leftbar.php';

    if ($login[0]['status'] == "Not Yet Verified") {
        include 'page/verify.php';
    }else{

    }
 ?>
    <!-- BEGIN: Content-->
    

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/modern_admin" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../assets/app-assets/vendors/js/charts/chart.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../assets/app-assets/js/core/app-menu.js"></script>
    <script src="../assets/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../assets/app-assets/js/scripts/pages/appointment.js"></script>
    <script src="../assets/app-assets/js/scripts/pages/hospital-add-doctors.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>