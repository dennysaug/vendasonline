<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Sistema VendasOnline | {{ date('Y') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    {{--<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />--}}
    <!-- Ionicons -->
    {{--<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />--}}
    <!-- DATA TABLES -->
    <link href="/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
    <![endif]-->

    <style>
      .table > tbody > tr > td {
        vertical-align: middle;
      }
    </style>
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="#" class="logo"><b>Vendas</b>Online</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Atendente</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Atendente X - VendasOnline
                      {{--<small>Memb since Nov. 2012</small>--}}
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Atendente</p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          {{--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>--}}
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-shopping-cart"></i> <span>Pedidos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('adm.pedido.index') }}"><i class="fa fa-circle-o"></i>Gerenciar Pedidos</a></li>
                {{--<li><a href="/index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>--}}
              </ul>
            </li>
            {{--<li class="treeview">--}}
              {{--<a href="#">--}}
                {{--<i class="fa fa-files-o"></i>--}}
                {{--<span>Layout Options</span>--}}
                {{--<span class="label label-primary pull-right">4</span>--}}
              {{--</a>--}}
              {{--<ul class="treeview-menu">--}}
                {{--<li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>--}}
                {{--<li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>--}}
                {{--<li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>--}}
                {{--<li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<a href="../widgets.html">--}}
                {{--<i class="fa fa-th"></i> <span>Widgets</span> <small class="label pull-right bg-green">new</small>--}}
              {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
              {{--<a href="#">--}}
                {{--<i class="fa fa-pie-chart"></i>--}}
                {{--<span>Charts</span>--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</a>--}}
              {{--<ul class="treeview-menu">--}}
                {{--<li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>--}}
                {{--<li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>--}}
                {{--<li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
              {{--<a href="#">--}}
                {{--<i class="fa fa-laptop"></i>--}}
                {{--<span>UI Elements</span>--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</a>--}}
              {{--<ul class="treeview-menu">--}}
                {{--<li><a href="../UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>--}}
                {{--<li><a href="../UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>--}}
                {{--<li><a href="../UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>--}}
                {{--<li><a href="../UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>--}}
                {{--<li><a href="../UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>--}}
                {{--<li><a href="../UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
              {{--<a href="#">--}}
                {{--<i class="fa fa-edit"></i> <span>Forms</span>--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</a>--}}
              {{--<ul class="treeview-menu">--}}
                {{--<li><a href="../forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>--}}
                {{--<li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>--}}
                {{--<li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview active">--}}
              {{--<a href="#">--}}
                {{--<i class="fa fa-table"></i> <span>Tables</span>--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</a>--}}
              {{--<ul class="treeview-menu">--}}
                {{--<li><a href="simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>--}}
                {{--<li class="active"><a href="data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<a href="../calendar.html">--}}
                {{--<i class="fa fa-calendar"></i> <span>Calendar</span>--}}
                {{--<small class="label pull-right bg-red">3</small>--}}
              {{--</a>--}}
            {{--</li>--}}
            {{--<li>--}}
              {{--<a href="../mailbox/mailbox.html">--}}
                {{--<i class="fa fa-envelope"></i> <span>Mailbox</span>--}}
                {{--<small class="label pull-right bg-yellow">12</small>--}}
              {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
              {{--<a href="#">--}}
                {{--<i class="fa fa-folder"></i> <span>Examples</span>--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</a>--}}
              {{--<ul class="treeview-menu">--}}
                {{--<li><a href="../examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>--}}
                {{--<li><a href="../examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>--}}
                {{--<li><a href="../examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>--}}
                {{--<li><a href="../examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>--}}
                {{--<li><a href="../examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>--}}
                {{--<li><a href="../examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>--}}
                {{--<li><a href="../examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
              {{--<a href="#">--}}
                {{--<i class="fa fa-share"></i> <span>Multilevel</span>--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</a>--}}
              {{--<ul class="treeview-menu">--}}
                {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>--}}
                {{--<li>--}}
                  {{--<a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>--}}
                  {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>--}}
                    {{--<li>--}}
                      {{--<a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>--}}
                      {{--<ul class="treeview-menu">--}}
                        {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>--}}
                        {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>--}}
                      {{--</ul>--}}
                    {{--</li>--}}
                  {{--</ul>--}}
                {{--</li>--}}
                {{--<li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>--}}
              {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="/documentation/index.html"><i class="fa fa-book"></i> Documentation</a></li>--}}
            {{--<li class="header">LABELS</li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-warning"></i> Warning</a></li>--}}
            {{--<li><a href="#"><i class="fa fa-circle-o text-info"></i> Information</a></li>--}}
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pedidos
            <small>@yield('total')</small>
          </h1>
          {{--<ol class="breadcrumb">--}}
            {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
            {{--<li><a href="#">Tables</a></li>--}}
            {{--<li class="active">Data tables</li>--}}
          {{--</ol>--}}
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Dados</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  @yield('conteudo')
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          {{--<b>Version</b> 2.0--}}
        </div>
        <strong>Copyright &copy; {{ date('Y') }} <a href="http://almsaeedstudio.com">VendasOnline</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/app.min.js" type="text/javascript"></script>

    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

  </body>
</html>
