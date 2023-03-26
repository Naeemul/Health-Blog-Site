<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo e(asset('/')); ?>frontend/admin-front/images/favicon.ico" type="image/ico" />

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('/')); ?>frontend/admin-front/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard</span></a>
                    </div>
                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="<?php echo e(asset('/')); ?>frontend/admin-front/images/img.jpg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin Panel</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a href="<?php echo e(route('viewPost')); ?>"><i class="fa fa-table"></i> View-Post </a>
                                </li>
                                <li><a <a href="<?php echo e(route('managePost')); ?>"><i class="fa fa-edit"></i> Manage-Post</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo e(route('admin-logout')); ?>">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->

                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <?php echo $__env->yieldContent('content'); ?>
            <!-- /page content -->

        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo e(asset('/')); ?>frontend/admin-front/js/custom.min.js"></script>

</body>

</html><?php /**PATH D:\Laravel\Blog\resources\views/admin/master.blade.php ENDPATH**/ ?>