@extends('home.welcome')
@section('main')
<section class="page-header">
<div class="container">
    <div class="page-header-content">
        <h2 class="title">Speakers - 01</h2>
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                Speakers
            </li>
        </ul>
    </div>
</div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============Speaker Section Starts Here================== -->
<section class="speaker-section padding-top">
    <div class="container-fluid">
        <div class="speaker-area d-flex flex-wrap justify-content-center">
            @foreach($speaker as $row)
            <div class="speaker-item">
                <div class="speaker-inner">
                    <div class="speaker-content">
                        <h3 class="sub-title">
                            <a href="#0">{{$row->speaker_name}}</a>
                        </h3>
                        <span>{{$row->experties}}</span>
                    </div>
                    <div class="speaker-thumb">
                        <img src="{{asset($row->speaker_img)}}" alt="speaker">
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!-- ============Speaker Section Ends Here================== -->

<!-- ============Call in Ticket Section Starts Here================== -->
<section class="call-in-ticket white-style padding-top padding-bottom">
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
                <h2 class="title">hurry up</h2>
                <h2 class="title">contact with us for your ticket</h2>
            </div>
            <a href="#0" class="custom-button">Buy Ticket</a>
        </div>
    </div>
</section>
@endsection
