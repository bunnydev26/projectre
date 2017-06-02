<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from bigben.prakasam.co/light/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2016 09:21:42 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <title>Dashboard | Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">

    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/monthly/css/monthly.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/emojionearea/emojionearea.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>

    <div class="wrapper has-footer">

        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89531901-1', 'auto');
  ga('send', 'pageview');

</script>
<header class="header-top navbar fixed-top">

            <div class="top-bar">   <!-- START: Responsive Search -->
                <div class="container">
                    <div class="main-search">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.php"><i class="sli-magnifier"></i></a>
                        </div>
                        <span class="close-search search-toggle"><i class="ti-close"></i></span>
                    </div>
                </div>
            </div>  <!-- END: Responsive Search -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="index.php">
                    <img src="assets/images/logo-w.svg">
                    <span>Big Ben</span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                            <i class="sli-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="search-toggle">
                            <i class="sli-magnifier"></i>
                        </a>
                    </li>

                </ul>   <!-- END: Responsive Top Right tool bar -->

            </div>

            <div class="collapse navbar-collapse" id="headerNavbarCollapse">

                <ul class="nav navbar-nav">

                    <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>

                   <li class="main-search hidden-xs">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.php"><i class="sli-magnifier"></i></a>
                        </div>
                    </li>



                </ul>

            </div><!-- END: Navbar-collapse -->

        </header>   <!-- END: Header -->
            <aside class="side-navigation-wrap sidebar-fixed">  <!-- START: Side Navigation -->
            <?php include 'includes//sidebar.php';?>

        </aside>   <!-- END: Side Navigation -->
        <div class="main-container">    <!-- START: Main Container -->

            <div class="page-header">
                <h1>Dashboard <small>Welcome back <span class="text-primary">admin_name</span></small></h1>
            </div>

            <div class="content-wrap">  <!--START: Content Wrap-->

                <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fs-bars"></i> Add Category</h3>
                                <div class="tools">
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">

                                <div class="col-md-12">
                                    <div id="home" class="tab-pane fade in active" style="padding:5px">
                 <form method="post" action="addcatg.php">
										<div align="center" style="margin:5px 0">
										<input type="text" placeholder="Location" name="category" style="width:100%; padding:5px">
										</div>
                                        <div align="center" style="margin:5px 0">
                                            <input type="submit" id="redbtn" />
                                        </div>
                                      </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>  <!--END: Content Wrap-->

        </div>  <!-- END: Main Container -->

        <footer class="footer"> <!-- START: Footer -->
            &copy; 2016 <b>Big Ben</b> Admin
        </footer>   <!-- END: Footer -->

    </div>  <!-- END: wrapper -->

    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/plugins.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/excanvas.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.tooltip.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.crosshair.min.js"></script>
    <script type="text/javascript" src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/sparklines.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery.knob.min.js"></script>
    <script type="text/javascript" src="assets/plugins/monthly/js/monthly.js"></script>
    <script type="text/javascript" src="assets/plugins/emojionearea/emojionearea.min.js"></script>
    <script type="text/javascript" src="assets/js/app.base.js"></script>
    <script type="text/javascript" src="assets/js/cmp-todo.js"></script>
    <script type="text/javascript" src="assets/js/page-dashboard.js"></script>
</body>

<!-- Mirrored from bigben.prakasam.co/light/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Dec 2016 09:23:27 GMT -->
</html>
