@extends('home.welcome')
@section('main')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title"> buy ticket</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    buy ticket
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============Become Sponsor Section Starts Here================== -->
<section class="become-sponsor-section buy-ticket padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-lg-0 mb-5">
                <div class="become-sponsor-article">
                    <h3 class="title">{{$ticket->tkt_typ}} <span>${{$ticket->tkt_price}}</span></h3>
                    <p class="main-para">Massa lacus elementum eros vitae nam, voluptatem in et neque commodo eget
                        mattis, arcsrqllus, pretium sit nulla justo nullam dolor. Posuere ultrices. Mauris at ut
                        nullam sodales, sapien veslum scelerisque sunt erat venenatis, semper vestibulum, tempor
                        orci enim wisi in enim ipsum, etiam enim. Viverra dolor litora quaerat turpis integer, etiam
                        enim purus nec elit tempor. Vitae siinrdum ante eu dolor. Morbi mi mauris integer auctor.
                        Elit nonummy metus tristique dignissim tortor, accumsan amet, ullamcorper wisi ullamcorper
                        sed purus. Libero facilisis integer vestibulum id.</p>
                    <h4 class="sub-title">benifites of Business package</h4>
                    <p>Fringilla euismod sed mauris nec, curabitur in mi sed eget, amet congue sed nam etiam quisnam
                        vehicula dui lorem, erat maecenas libero. </p>
                    <ul>
                        <li>Leifend fringilla quiselit </li>
                        <li>Aliquam dolor tortor phasellu </li>
                        <li>Dignissim semper consequat </li>
                    </ul>
                    <h4 class="sub-title">Business pack Features</h4>
                    <p class="last-para">condimentum cras ac. Sapien exercitationem rhoncus in suspendisse, felis ut
                        cras, nunc felimorbi imperdiet volutpat elit, lectus sodales mollis. Aenean dignissim vel
                        massa in at, ornare enitortor mi tempus. Ut duis, morbi maecenas lorem diam.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="application-form-area">
                    <h5 class="title">buy ticket</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h3 class="text-danger text-center">{{Session::get('error_message')}}</h3>
                    <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                    <form class="application-form" action="{{route('confirmTicket',$ticket['id'])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="number" name="qty" placeholder="Quantity" min="1">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit Now">
                        </div>
                        <div class="form-group check-input d-flex flex-wrap align-items-center">
                            <input type="checkbox" id="check-ticket" name="checkbox">
                            <label for="check-ticket">I Accept The</label> <a href="#0">Terms & Policy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

