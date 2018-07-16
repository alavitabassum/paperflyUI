<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Orders Records | Wings v2.0</title>
  
  <meta property="og:url" content="http://alavi-works.printf.com.bd/wings/" />
	<meta property="og:type" content="Order Fulfilment Service" />
	<meta property="og:title" content="Wings v0.2" />
	<meta property="og:description" content="Order Fulfilment Service | PaperFly Private Limited" />
	<meta property="og:image" content="http://alavi-works.printf.com.bd/PFLogoFull.png" />
	<!--favicon-->
	<link rel="icon" type="image/png" href="{{asset('img/wings_favicon.png')}}" sizes="16x16">
	<link rel="icon" type="image/png" href="{{asset('img/wings_favicon.png')}}" sizes="32x32">

	<!-- for IE -->
	<link rel="icon" type="image/x-icon" href="{{asset('img/wings_favicon.ico')}}">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('img/wings_favicon.ico')}}" />
	<link rel="shortcut icon" href="{{asset('img/wings_favicon.ico')}}">

	<meta name="description" content="Paperfly Private Limited" />
	<meta name="keywords" content="PaperFly, Wings, PaperFly Private Limited, Order tracker"
	/>


  <!-- Bootstrap -->
  <link href="{{asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <!-- iCheck -->
  <link href="{{asset('vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
  <!-- Datatables -->
  <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="{{asset('build/css/custom.css')}}" rel="stylesheet">
  
  <!--<link rel="stylesheet" href="{{asset('css/modal.css')}}">-->
  <!-- modal css -->
  <link rel="stylesheet" href="{{asset('css/timeline-style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('vendors/jquerysteps/css/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/jquerysteps/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/jquerysteps/css/normalize.css')}}">  

    <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('vendors/jquerysteps/js/jquery.steps.js')}}"></script>  
  @yield('css')
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="#" class="site_title">
              <i>
                <img src="images/logo.png"> </i>
              <img class="full_logo" src="images/Wings.jpg" />
            </a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>Shahriar Hasan</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          @include('includes.sidebar')
          <!-- /sidebar menu -->


          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav>
            <div class="nav toggle">
              <a id="menu_toggle">
                <i class="fa fa-bars"></i>
              </a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">Shahriar Hasan
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li>
                    <a href="javascript:;"> Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right"></span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li>
                    <a href="login.html">
                      <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
     @yield('content')
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          PaperFly - Copyright
          <a href="https://Intelligent Machines.com">Intelligent Machines</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>
   <!-- jQuery -->
  <script src="{{asset('vendors/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap -->
  <script src="{{asset('vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('vendors/fastclick/lib/fastclick.js')}}"></script>
  <!-- NProgress -->
  <script src="{{asset('vendors/nprogress/nprogress.js')}}"></script>
  <!-- iCheck -->
  <script src="{{asset('vendors/iCheck/icheck.min.js')}}"></script>
  <!-- Datatables -->
  <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
  <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
  <script src="{{asset('vendors/jszip/dist/jszip.min.js')}}"></script>
  <script src="{{asset('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
  <script src="{{asset('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

  <!-- Custom Theme Scripts -->
  <script src="{{asset('build/js/custom.js')}}"></script>
  @yield('js')

</body>

</html>