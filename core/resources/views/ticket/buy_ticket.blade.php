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
                    <h4 class="title">Available Ticket:<span>{{$ticket->tkt_qty}}</span></h4>
                    <p>You can buy max {{$settings->max_tkt_qty}} tkt at a time</p>


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

                    <form class="application-form" action="{{route('confirmTicket',$ticket['id'])}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="{{old('email')}}"  placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" value="{{old('phone')}}"  placeholder="Phone" required>
                        </div>
                        <div class="form-group">
                            <input type="number" name="qty" value="{{old('qty')}}"  placeholder="Quantity" min="1" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit Now">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

