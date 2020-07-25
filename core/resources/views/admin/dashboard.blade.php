<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/themify-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/selectFX/css/cs-skin-elastic.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/vendors/jqvmap/dist/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/admin/assets/css/bootstrap-iconpicker.min.css') }}">



    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/style.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>

<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('adminHome')}}"><img src="{{asset('assets/admin/images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="./"><img src="{{asset('assets/admin/images/logo2.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{route('adminHome')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Speaker</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('addSpeaker')}}">Add Speaker</a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{route('manageSpeaker')}}">Manage Speaker</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Topics</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{route('addTopic')}}">Add Topics</a></li>
                        <li><i class="fa fa-table"></i><a href="{{route('manageTopic')}}">Manage Topics</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Schedule</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('addSchedule') }}">Add Schedule</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageSchedule') }}">Manage Schedule</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Ticket</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('addTicket') }}">Add Ticket</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageTicket') }}">Manage Ticket</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Sponsor</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('sponsorRequest') }}">Sponsor Request</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageSponsor') }}">Manage Sponsor</a></li>

                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Blog</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('addBlog') }}">Add Blog</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageBlog') }}">Manage Blog</a></li>

                    </ul>
                </li>

                <h3 class="menu-title">Title Section</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Title</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageBanner') }}"> Banner Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageAbout') }}"> About Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageAboutOverview') }}"> About Overview Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('manageBenifit') }}"> Benifit Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('speakerTitle') }}"> Speaker Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('scheduleTitle') }}"> Schedule Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('callInTitle') }}"> Call In Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('ticketTitle') }}"> Ticket Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('eventTitle') }}"> Event Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('overviewImage') }}"> Overview Image Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('blog1Title') }}"> Blog Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('sponsor1Title') }}"> Sponsor Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('missionTitle') }}"> Mission Section</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="{{ route('testimonialTitle') }}"> Testomonial Section</a></li>

                    </ul>
                </li>


            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{asset('assets/admin/images/admin.jpg')}}" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">

                        <a class="nav-link" href="{{route('manageSettings')}}"><i class="fa fa-cog"></i> Settings</a>

                        <a class="nav-link" href="{{route('Logout')}}"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>



            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
{{--        <div class="col-sm-4">--}}
            <div class="page-header  text-center">
                <div class="page-title ">
                    <h3>Admin Dashboard</h3>
                </div>
                <h3 class="text-success text-center">{{Session::get('success_message1')}}</h3>
            </div>
{{--        </div>--}}
{{--        <div class="col-sm-8">--}}
{{--            <div class="page-header float-right">--}}
{{--                <div class="page-title">--}}
{{--                    <ol class="breadcrumb text-right">--}}
{{--                        <li class="active">Dashboard</li>--}}
{{--                    </ol>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
@yield('main')



    <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{asset('assets/admin/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/js/main.js')}}"></script>


<script src="{{asset('assets/admin/vendors/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/admin/assets/js/dashboard.js')}}"></script>
<script src="{{asset('assets/admin/assets/js/widgets.js')}}"></script>
<script src="{{asset('assets/admin/assets/js/niceEdit.js')}}"></script>
<script src="{{asset('assets/admin/vendors/jqvmap/dist/jquery.vmap.min.js')}}"></script>
<script src="{{asset('assets/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('assets/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
<script src="{{ asset('assets/admin/assets/js/bootstrap-iconpicker.bundle.min.js') }}"></script>
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>


<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>

</body>

</html>
