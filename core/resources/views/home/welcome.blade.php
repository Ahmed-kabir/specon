<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/owl.theme.default.min.css')}}">

    <link rel="shortcut icon" href="{{asset('assets/siteImage/'.$settings->img)}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets/frontEnd/assets/css/style.css')}}">

    <title>{{$settings->title}}</title>

</head>

<body>
<!-- Preloader -->
<div class="preloader">
    <div class="preloader-wrapper"></div>
</div>
<!-- Preloader -->
<div class="overlay"></div>
<!-- Header Section Stars Here -->
<a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
<!-- Fixed Sidebar Section Ends Here -->

<!-- ============Header Section Starts Here================== -->
@include('frontend.header')
<!-- ============Header Section Ends Here================== -->
@yield('main')
<!-- ============Banner Section Starts Here================== -->
{{--@include('frontend.banner')--}}
<!-- ============Banner Section Ends Here================== -->

<!-- ============About Section Starts Here================== -->
{{--@include('frontend.about')--}}
<!-- ============About Section Ends Here================== -->

<!-- ============Overview Section Starts Here================== -->
{{--@include('frontend.overview')--}}
<!-- ============Overview Section Ends Here================== -->

<!-- ============Speaker Section Starts Here================== -->
{{--@include('frontend.speaker')--}}
<!-- ============Speaker Section Ends Here================== -->

<!-- ============Schedule Section Starts Here================== -->
{{--@include('frontend.schedule')--}}
<!-- ============Schedule Section Ends Here================== -->

<!-- ============Call in Ticket Section Starts Here================== -->
{{--@include('frontend.callticket')--}}
<!-- ============Call in Ticket Section Ends Here================== -->

<!-- ============Ticket Section Starts Here================== -->
{{--@include('frontend.ticket')--}}
<!-- ============Ticket Section Ends Here================== -->

<!-- ============Join Event Section Starts Here================== -->
{{--@include('frontend.joinevent')--}}
<!-- ============Join Event Section Ends Here================== -->

<!-- ============Blog Section Starts Here================== -->
{{--@include('frontend.blog')--}}
<!-- ============Blog Section Ends Here================== -->

<!-- ============Sponsor Section Starts Here================== -->
{{--@include('frontend.sponsor')--}}
<!-- ============Sponsor Section Ends Here================== -->

<!-- ============Footer Section Starts Here================== -->
@include('frontend.footer')
<!-- ============Footer Section Ends Here================== -->


<!-- JavaScript File Links -->
<script src="{{asset('assets/frontEnd/assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/waypoint.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/counterup.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/countdown.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/lightcase.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/parallax.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/tweenmax.min.js')}}"></script>
{{--<script src="http://maps.google.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>--}}
<script src="{{asset('assets/frontEnd/assets/js/map.js')}}"></script>
<script src="{{asset('assets/frontEnd/assets/js/main.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>



<script>
    $(document).ready(function () {
        // var end = new Date('2020-10-20');
        var startDate = document.getElementById("start_date").value;
        var end = new Date(startDate);


        var _second = 1000;
        var _minute = _second * 60;
        var _hour = _minute * 60;
        var _day = _hour * 24;
        var timer;

        function showRemaining() {
            var now = new Date();
            var distance = end - now;
            if (distance < 0) {

                clearInterval(timer);
                // document.getElementById('countdown').innerHTML = 'EXPIRED!';
                document.getElementById('days').innerHTML = 'Nan';
                document.getElementById('hours').innerHTML = 'Nan';
                document.getElementById('minutes').innerHTML = 'Nan';
                document.getElementById('seconds').innerHTML = 'Nan';
                return;
            }
            var days = Math.floor(distance / _day);
            var hours = Math.floor((distance % _day) / _hour);
            var minutes = Math.floor((distance % _hour) / _minute);
            var seconds = Math.floor((distance % _minute) / _second);

            document.getElementById('days').innerHTML = days;
            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;
        }

        timer = setInterval(showRemaining, 1000);

    });

</script>

@stack('img')
@include("errors.errors")
@include("errors.error")
@include("errors.success")
</body>

</html>
