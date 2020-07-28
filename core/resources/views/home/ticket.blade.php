@extends('home.welcome')
@section('main')
    <section class="page-header">
        <div class="container">
            <div class="page-header-content">
                <h2 class="title">pricing plan</h2>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        pricing plan
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ============Page Header Section Ends Here================== -->

    <!-- ============Ticket Section Starts Here================== -->
    <section class="ticket-section padding-bottom padding-top">
        <div class="container">
            <div class="section-header">
                <h2 class="title">get your ticket</h2>
                <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                    taciti eu urna, mi nunc volutpat quis</p>
            </div>
            <div class="row mb-30-none justify-content-center">
                @foreach($ticket as $row)
                <div class="col-xl-4 col-md-6">
                    <div class="ticket-item">
                        <h3 class="title">{{$row->tkt_typ}}</h3>
                        <div class="ticket-thumb">
                            <img src="{{asset('assets/ticketImage/'.$row->tkt_img)}}" alt="ticket">
                        </div>
                        <div class="ticket-content">
                            <p>Tortor sodales facilis diam sed. Turpis maecenas.</p>
                            <h3 class="sub-title">${{$row->tkt_price}}</h3>
                            <a href="{{route('buyTicket',$row->id)}}" class="custom-button active">Buy Ticket</a>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
