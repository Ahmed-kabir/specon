<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{$title}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/admin1/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/admin1/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/admin1/dist/css/adminlte.min.css')}}">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
    <!-- Bootstrap-Iconpicker -->
    <link rel="stylesheet" href="{{asset('assets/admin1/dist/css/bootstrap-iconpicker.min.css')}}"/>

    <link rel="shortcut icon" href="{{asset('assets/siteImage/'.$settings->img)}}" type="image/x-icon">

{{--  <link rel="stylesheet" href="{{asset('assets/admin1/dist/css/fontawesome.min.css')}}">--}}
    <script src="https://use.fontawesome.com/523c3912de.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- SEARCH FORM -->


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('adminHome')}}" class="brand-link">
      <img src="{{asset('assets/siteImage/'.$settings->img)}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$settings->title}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->


      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->




            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-server"></i>
                    <p>
                        Settings
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageSettings')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Settings</p>
                        </a>
                    </li>


                </ul>
            </li>

{{--            <li class="nav-header">EXAMPLES</li>--}}
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Speaker
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{route('manageSpeaker')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage speaker</p>
                </a>
              </li>


            </ul>
          </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tags"></i>
                    <p>
                        Topic
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageTopic')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Topic</p>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                        Schedule
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageSchedule')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Schedule</p>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fa fa-ticket"></i>
                    <p>
                        Ticket
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageTicket')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Ticket</p>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-location-arrow"></i>
                    <p>
                        Sponsor
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageSponsor')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Sponsor</p>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-spinner"></i>
                    <p>
                        Sponsor Category
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageSponsorCategory')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Sponsor Category</p>
                        </a>
                    </li>


                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-university"></i>
                    <p>
                        Blog
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageBlog')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Manage Blog</p>
                        </a>
                    </li>


                </ul>
            </li>



          <li class="nav-header">Title Section</li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-navicon"></i>
                    <p>
                        Title
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageBanner')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Banner Section</p>
                        </a>
                    </li>


                </ul>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageAbout')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About Section</p>
                        </a>
                    </li>


                </ul>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageAboutOverview')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About Overview Section</p>
                        </a>
                    </li>


                </ul>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('manageBenifit')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Agenda Section</p>
                        </a>
                    </li>


                </ul>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{route('speakerTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Speaker Section</p>
                        </a>
                    </li>


                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('scheduleTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Schedule Section</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('eventTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Event Section</p>
                        </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('callInTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Call In Section</p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('ticketTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ticket Section </p>
                        </a>
                    </li>
                </ul>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('eventTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Event Section </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('overviewImage')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Overview Image Section </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('blog1Title')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Blog Section </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('sponsor1Title')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Sponsor Section </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('missionTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Mission Section </p>
                        </a>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('testimonialTitle')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Testimonial Section </p>
                        </a>
                    </li>
                </ul>

            </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->



@yield('main')




  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-pre
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('assets/admin1/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/admin1/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/admin1/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin1/dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{asset('assets/admin1/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/admin1/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/admin1/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('assets/admin1/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/admin1/plugins/chart.js/Chart.min.js')}}"></script>


<!-- jQuery CDN -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- Bootstrap CDN -->
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap-Iconpicker Bundle -->
<script type="text/javascript" src="{{asset('assets/admin1/dist/js/bootstrap-iconpicker.bundle.min.js')}}"></script>





<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/admin1/dist/js/demo.js')}}"></script>
{{--<script src="{{asset('assets/admin1/dist/js/fontawesome.min.js')}}"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/admin1/dist/js/pages/dashboard2.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@stack('img')
@include("errors.errors")
@include("errors.error")
@include("errors.success")

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>

<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
</script>



</body>
</html>
