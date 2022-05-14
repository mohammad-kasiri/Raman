<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link href="css/bootstrap.css"                   rel="stylesheet">
    <link href="css/jquery-ui.css"                   rel="stylesheet">
    <link href="css/icomoon-icons.css"               rel="stylesheet">
    <link href="css/animate.css"                     rel="stylesheet">
    <link href="css/flaticon.css"                    rel="stylesheet">
    <link href="css/owl.css"                         rel="stylesheet">
    <link href="css/animation.css"                   rel="stylesheet">
    <link href="css/magnific-popup.css"              rel="stylesheet">
    <link href="css/jquery.fancybox.min.css"         rel="stylesheet">
    <link href="css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
    <link href="css/menu.css"                        rel="stylesheet">
    <link href="css/style.css"                       rel="stylesheet">
    <link href="css/responsive.css"                  rel="stylesheet">
</head>

<body>

<div class="page-wrapper">
    <!-- header section -->
        @include('guest.layout.header')
    <!-- End header section -->
        @yield('content')
    <!--Main Footer-->
        @include('guest.layout.footer')
    <!--End Main Footer-->
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="icon icon-chevron-up"></span></div>



<!-- xs modal -->
<div class="zoom-anim-dialog mfp-hide modal-searchPanel" id="modal-popup-2">
    <div class="xs-search-panel">
        <form action="#" method="POST" class="xs-search-group">
            <input type="search" class="form-control" name="search" id="search" placeholder="جستجو">
            <button type="submit" class="search-button"><i class="icon icon-search"></i></button>
        </form>
    </div>
</div><!-- End xs modal -->
<!-- end language switcher strart -->

<!--Scroll to top-->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/paroller.js"></script>
<script src="js/wow.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
</body>


</html>
