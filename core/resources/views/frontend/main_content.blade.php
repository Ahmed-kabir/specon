@extends('home.welcome')
@section('main')
    <section class="banner-section bg_img"
             data-background="{{asset('assets/frontEnd/assets/images/banner/banner-bg-one.jpg')}}">
        <div class="banner-shape-two"></div>
        <div class="banner-shape-one"></div>
        <div class="container">
            <div class="banner-content text-center">
                <div class="banner-header">
                    <h1 class="title">{!! $banner->title !!}</span></h1>
                    <p>{!! $banner->description !!} </p>
                </div>
                <ul class="banner-countdown">
                    <li class="theme-style">
                        <h2 class="banner-countdown-title" id="days"><span class="days">00</span></h2>
                        <p class="days_text">days</p>
                    </li>
                    <li class="yellow-style">
                        <h2 class="banner-countdown-title" id="hours"><span class="hours">00</span></h2>
                        <p class="hours_text">hours</p>
                    </li>
                    <li class="grey-style">
                        <h2 class="banner-countdown-title" id="minutes"><span class="minutes">00</span></h2>
                        <p class="minu_text">minutes</p>
                    </li>
                    <li class="skyblue-style">
                        <h2 class="banner-countdown-title" id="seconds"><span class="seconds">00</span></h2>
                        <p class="seco_text">seconds</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ============Banner Section Ends Here================== -->

    <!-- ============About Section Starts Here================== -->
    <section class="about-section padding-top">
        <div class="about-overview-item padding-bottom">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-lg-10">
                        <div class="about-overview-left wow fadeIn" data-wow-duration="1s">
                            <h2 class="title">{!! $about['title'] !!}</h2>

                            <p>{!! $about['description'] !!}</p>
                            <a href="{{route('Ticket')}}" class="custom-button">get ticket</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="about-overview-right wow fadeIn" data-wow-duration="1s">
                            <div class="shape">
                                <img src="{{asset($about['img'])}}" alt="about">
                            </div>
                            <ul id="parallax01">
                                <li class="layer" data-depth="0.90">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax01.png')}}"
                                         alt="parallax">
                                </li>
                                <li class="layer" data-depth="0.20">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax02.png')}}"
                                         alt="parallax">
                                </li>
                                <li class="layer" data-depth="0.50">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax03.png')}}"
                                         alt="parallax">
                                </li>
                                <li class="layer" data-depth="0.40">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax04.png')}}"
                                         alt="parallax">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-overview-item padding-bottom">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-center flex-row-reverse">
                    <div class="col-xl-6 col-lg-10">
                        <div class="about-overview-left wow fadeIn" data-wow-duration="1s">
                            <h2 class="title">{!! $about_overview['title'] !!}</h2>
                            <div class="about-tab-wrapper tab">
                                <ul class="tab-menu common-menu">
                                    <li>our vission</li>
                                    <li>our mission</li>
                                    <li>Testimonial</li>
                                </ul>
                                <div class="tab-area">
                                    <div class="tab-item">
                                        {!! $about_overview['description'] !!}
                                    </div>
                                    <div class="tab-item">
                                        <h4 class="sub-title">
                                            {!! $tab_mission['title'] !!}
                                        </h4>
                                        <p> {!! $tab_mission['description'] !!}</p>
                                    </div>
                                    <div class="tab-item">
                                        <div class="blockquote-slider owl-carousel owl-theme">
                                            <div class="item">
                                                <blockquote>
                                                    {!! $tab_testimonial['description'] !!}
                                                </blockquote>
                                                <div class="blockquote-speaker d-flex">
                                                    <div class="blockquote-speaker-thumb">
                                                        <img src="{{asset($tab_testimonial['img'])}}" alt="about">
                                                    </div>
                                                    <div class="blockquote-speaker-content">
                                                        <h6>{!! $tab_testimonial['title'] !!}</h6>

                                                        <span>Businesman</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-10">
                        <div class="about-overview-right wow fadeIn" data-wow-duration="1s">
                            <div class="shape"><img src="{{asset($about_overview['img'])}}" alt="about"></div>
                            <ul id="parallax02">
                                <li class="layer" data-depth="0.90">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax01.png')}}"
                                         alt="parallax">
                                </li>
                                <li class="layer" data-depth="0.20">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax02.png')}}"
                                         alt="parallax">
                                </li>
                                <li class="layer" data-depth="0.50">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax03.png')}}"
                                         alt="parallax">
                                </li>
                                <li class="layer" data-depth="0.40">
                                    <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax04.png')}}"
                                         alt="parallax">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-left-animation"><img src="{{asset('assets/frontEnd/assets/images/parallax/parallax05.png')}}"
                                               alt="parallax"></div>
    </section>
    <!-- ============About Section Ends Here================== -->

    <!-- ============Overview Section Starts Here================== -->
    <section class="overview-section">
        <div class="container-fluid p-0">
            <div class="row flex-wrap-reverse">
                <div class="col-xl-6 p-0">
                    <div class="overview-left padding-bottom padding-top">
                        <div class="left-content">
                            <div class="row m-0">
                                @foreach($benifit as $row)
                                    <div class="col-md-6">
                                        <div class="overview-item wow fadeInUp" data-wow-duration="1s">
                                            <div class="overview-header">
                                                <i class="{!! $row->img !!}"></i>
                                                <h4 class="title">{!! $row['title'] !!}</h4>
                                            </div>
                                            <div class="overview-item-content">
                                                <p>{!! $row['description'] !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 p-0">
                    <div class="overview-right h-100 bg_img"
                         data-background="{{asset('assets/frontEnd//assets/images/overview/overview-bg01.jpg')}}">
                        <img src="{{asset($overview_img['img'])}}" alt="overview">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============Overview Section Ends Here================== -->

    <!-- ============Speaker Section Starts Here================== -->
    <section class="speaker-section padding-bottom padding-top">
        <div class="container-fluid">
            <div class="section-header wow fadeInUp" data-wow-duration="1s">
                <h2 class="title">{!! $speaker['title'] !!}</h2>
                {!! $speaker['description'] !!}
            </div>
            <div class="speaker-area d-flex flex-wrap justify-content-center">
                @foreach($allSpeakers as $row)
                    <div class="speaker-item wow fadeInUp" data-wow-duration="1s">
                        <div class="speaker-inner">
                            <div class="speaker-content">
                                <h3 class="sub-title">
                                    <a href="#0">{{$row->speaker_name}}</a>
                                </h3>
                                <span>{{ $row->experties}}</span>
                            </div>
                            <div class="speaker-thumb">

                                <img src="{{asset($row->speaker_img)}}"/>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- ============Speaker Section Ends Here================== -->

    <!-- ============Schedule Section Starts Here================== -->
    <section class="schedule-section padding-bottom">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s">
                <h2 class="title">{!! $schedule['title'] !!}</h2>
                <p>{!! $schedule['description'] !!}</p>
            </div>
            <div class="schedule-area tab">
                <ul class="tab-menu">
                    <?php
                    $sl = 1;
                    ?>
                    @foreach($slot as $vSlot)
                        <?php
                        $date = $vSlot->date;

                        $convert_date = strtotime($date);
                        $month = date('F', $convert_date);
                        $year = date('Y', $convert_date);
                        $day = date('j', $convert_date);
                        ?>

                        <li onclick="getTabData1('{{$vSlot->date}}');">
                            <span>Day {{ $sl}}</span>{{ $month.' '.$day, ','.$year }}</li>

                        <?php
                        $sl++;
                        ?>
                    @endforeach
                </ul>

                <div class="tab-area mb-30-none">
                    @foreach($slot as $vSlot)
                        <div class="tab-item" id="msg">

                            @foreach($frontendSchedule as $row)
                                @if($row->date == $vSlot->date)
                                    {{--    @dd($row->speakers)--}}
                                    <div class="schedule-item">
                                        <div class="schedule-thumb">
                                            <a href="#0"><img src="{{asset($row->speakers->speaker_img)}}"
                                                              alt="schedule"></a>
                                        </div>
                                        <div class="schedule-content">
                                            <h4 class="title"><a href="#0">{{ $row->topicName->topic_name }}</a></h4>
                                            <p>
                                                <a href="#0">{{ $row->speakers->speaker_name }}</a>at {{$row->start_time}} {{$row->end_time}}
                                            </p>
                                            <p class="para">{{$row->speakers->description}}</p>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>
    <!-- ============Schedule Section Ends Here================== -->

    <!-- ============Call in Ticket Section Starts Here================== -->
    <section class="call-in-ticket padding-top padding-bottom bg_img"
             data-background="{{asset('assets/frontEnd/assets/images/ticket/ticket-bg.jpg')}}">
        <ul id="parallax03">
            <li class="layer" data-depth="0.40">
                <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax06.png')}}" alt="parallax">
            </li>
            <li class="layer" data-depth="0.40">
                <img src="{{asset('assets/frontEnd/assets/images/parallax/parallax07.png')}}" alt="parallax">
            </li>
        </ul>
        <div class="container">
            <div class="call-in-area text-center">
                <div class="header-area">
                    <h2 class="title">{!! $call_in['title'] !!}</h2>
                    <h2 class="title">{!! $call_in['description'] !!}</h2>
                </div>
                <a href="{{route('Ticket')}}" class="custom-button">Buy Ticket</a>
            </div>
        </div>
    </section>
    <!-- ============Call in Ticket Section Ends Here================== -->

    <!-- ============Ticket Section Starts Here================== -->
    <section class="ticket-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s">
                <h2 class="title">{!! $ticket1['title'] !!}</h2>
                <p>{!! $ticket1['description'] !!}</p>
            </div>
            <div class="row mb-30-none justify-content-center">
                @foreach($ticket as $row)
                    <div class="col-xl-4 col-md-6">
                        <div class="ticket-item wow fadeInUp" data-wow-duration="1s">
                            <h3 class="title">{{$row->tkt_typ}}</h3>
                            <div class="ticket-thumb">
                                <img src="{{asset($row->tkt_img)}}" alt="ticket">
                            </div>
                            <div class="ticket-content">
                                <p>{{$row->tkt_desc}}</p>
                                <h3 class="sub-title">${{$row->tkt_price}}</h3>
                                <a href="{{route('buyTicket',$row->id)}}" class="custom-button active">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- ============Ticket Section Ends Here================== -->

    <!-- ============Join Event Section Starts Here================== -->
    <section class="overview-event-section">
        <div class="container-fluid p-xl-0">
            <div class="row m-0">
                <div class="col-xl-6 p-0">
                    <div class="maps h-100 container-fluid">
                        <iframe width="100%" height="500"
                                src="https://maps.google.com/maps?q={{$settings->location}}&output=embed"></iframe>

                    </div>
                </div>
                <div class="col-xl-6 p-0">
                    <div class="event-overview-content padding-top">
                        <div class="section-header ml-0 text-left wow fadeInUp" data-wow-duration="1s">
                            <h2 class="title">{!! $event['title'] !!}</h2>
                            <p>{!! $event['description'] !!}</p>
                        </div>
                        <div class="event-overview-tab tab">
                            <ul class="tab-menu common-menu">
                                <li>Event Venue</li>
                                <li>How To Get There</li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item">
                                    <div class="d-flex flex-wrap justify-content-between mb-30-none">
                                        <div class="event-tab-item text-center">
                                            <div class="event-tab-thumb">
                                                <i class="flaticon-location-pin"></i>
                                            </div>
                                            <div class="event-tab-content">
                                                <ul>
                                                    <li>{{$settings->place}}</li>

                                                    <ul>
                                            </div>
                                        </div>
                                        <div class="event-tab-item text-center">
                                            <div class="event-tab-thumb">
                                                <i class="flaticon-customer-service"></i>
                                            </div>
                                            <div class="event-tab-content">
                                                <ul>
                                                    <li><a href="tel:(123) 456-7890">{{$settings->phone}}</a></li>
                                                    <li><a href="tel:(123) 456-7891">(123) 456-7891</a></li>
                                                    <ul>
                                            </div>
                                        </div>
                                        <div class="event-tab-item text-center">
                                            <div class="event-tab-thumb">
                                                <i class="far fa-paper-plane"></i>
                                            </div>
                                            <div class="event-tab-content">
                                                <ul>
                                                    <li><a href="mailto:contact@example.com">{{$settings->email}}</a>
                                                    </li>
                                                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                                                    <ul>
                                            </div>
                                        </div>
                                        <div class="event-tab-item text-center">
                                            <div class="event-tab-thumb">
                                                <i class="flaticon-clock"></i>
                                            </div>
                                            <div class="event-tab-content">
                                                <ul>
                                                    <li>monday to Friday</li>
                                                    <li>time by schedule</li>
                                                    <ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-item">
                                    <div class="d-flex flex-wrap justify-content-between mb-30-none style-two">
                                        <div class="event-tab-item text-center">
                                            <div class="event-tab-thumb">
                                                <i class="flaticon-bus"></i>
                                            </div>
                                            <div class="event-tab-content">
                                                <ul>
                                                    <li><a href="#0">00 : 41 min</a></li>
                                                    <li><a href="#0">16.52 km</a></li>
                                                    <ul>
                                            </div>
                                        </div>
                                        <div class="event-tab-item text-center">
                                            <div class="event-tab-thumb">
                                                <i class="flaticon-running-man"></i>
                                            </div>
                                            <div class="event-tab-content">
                                                <ul>
                                                    <li>02 : 17 hours</li>
                                                    <li>20.05 km</li>
                                                    <ul>
                                            </div>
                                        </div>
                                        <div class="event-tab-item text-center">
                                            <div class="event-tab-thumb">
                                                <i class="flaticon-aeroplane"></i>
                                            </div>
                                            <div class="event-tab-content">
                                                <ul>
                                                    <li>00 : 03 hours</li>
                                                    <li>20 km</li>
                                                    <ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="para">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmpor
                                            incididunt ut labore et dolore magna aliqua. Quis uspendissurices gravida.
                                            Risus commodo viveraecenas accumsan lacus vel facilisis.
                                            over head to do event progeram. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============Join Event Section Ends Here================== -->

    <!-- ============Blog Section Starts Here================== -->
    <section class="blog-section padding-top">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s">
                <h2 class="title">{!! $blog1['title'] !!}</h2>
                <p>{!! $blog1['description'] !!}</p>
            </div>
            <div class="row mb-30-none justify-content-center">
                @foreach($blog as $row)
                    <div class="col-md-6 col-lg-4">
                        <div class="post-item wow fadeInUp" data-wow-duration="1s">
                            <div class="post-thumb">
                                <a href="blog.html"><img src="{{asset($row->img)}}" alt="blog"></a>
                                <ul class="blog-date">
                                    <?php

                                    $exploded_date = (explode("-", $row->date));
                                    $month = $exploded_date[0];
                                    $date = $exploded_date[1];
                                    ?>
                                    <h2>{{$date}}</h2>
                                    <span>{{$month}}</span>
                                </ul>
                            </div>
                            <div class="post-content">
                                <h4 class="title"><a href="blog.html">{{$row->title}}</a></h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- ============Blog Section Ends Here================== -->

    <!-- ============Sponsor Section Starts Here================== -->
    <section class="sponsor-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1s">
                <h2 class="title">{!! $sponsor1['title'] !!}</h2>
                <p>{!! $sponsor1['description'] !!}</p>
            </div>
            <div class="sponsor-wrapper">
                @foreach($sponsorType as $v)
                    @php
                        $var= \App\SponsorType::findOrFail($v->id)->sponsorName()->get();
                    @endphp
                    <h4 class="sub-title">{{$v->sponsor_name}}</h4>


                    <div class="sponsor-area">
                        @foreach( $var as $row)
                            {{--                        @if($v->id == $row->sponsor_id)--}}
                            {{--                        @if($row->status==1)--}}
                            <div class="sponsor-thumb">
                                <a href="#0"><img src="{{asset($row->img)}}" alt="sponsor"></a>
                            </div>
                            {{--                        @endif--}}
                        @endforeach
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{route('Sponsor')}}" class="custom-button">Become a Sponsor</a>
            </div>
        </div>
    </section>
    {{--    <div id="countdown"></div>--}}
    <input type="hidden" id="start_date" name="start_date" value="{{$settings->start_date}}">
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

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

