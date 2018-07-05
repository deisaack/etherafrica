<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="author" content="John Doe">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>EtherAfrica</title>
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/icofont.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/animate.css')); ?>">
    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/frontend/responsive.css')); ?>">
    <script src="<?php echo e(asset('js/frontend/vendor/modernizr-2.8.3.min.js')); ?>"></script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--Preloader-->
    <div class="preloader">
        <div class="spinner"></div>
    </div>

     <?php echo $__env->make('layout.front_header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
         <?php echo $__env->yieldContent('content'); ?>
    
    <?php echo $__env->make('layout.front_footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


    <!--Vendor-JS-->
    <script src="<?php echo e(asset('js/frontend/vendor/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/vendor/bootstrap.min.js')); ?>"></script>
    <!--Plugin-JS-->
    <script src="<?php echo e(asset('js/frontend/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/appear.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/bars.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/counterup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/easypiechart.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/mixitup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/contact-form.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/scrollUp.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/frontend/wow.min.js')); ?>"></script>
    <!--Main-active-JS-->
    <script src="<?php echo e(asset('js/frontend/main.js')); ?>"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXZ3vJtdK6aKAEWBovZFe4YKj1SGo9V20&callback=initMap"></script>
    <script src="<?php echo e(asset('js/frontend/maps.js')); ?>"></script>
</body>

</html>