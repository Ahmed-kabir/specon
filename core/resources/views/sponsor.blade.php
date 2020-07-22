@extends('welcome')
@section('main')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title"> become sponsor</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    become sponsor
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============Become Sponsor Section Starts Here================== -->
<section class="become-sponsor-section padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-lg-0 mb-5">
                <div class="become-sponsor-article">
                    <h3 class="title">become our sponsor</h3>
                    <p class="main-para">Massa lacus elementum eros vitae nam, voluptatem in et neque commodo eget mattis, arcsrqllus, pretium sit nulla justo nullam dolor. Posuere ultrices. Mauris at ut nullam sodales, sapien veslum scelerisque sunt erat venenatis, semper vestibulum, tempor orci enim wisi in enim ipsum, etiam enim. Viverra dolor litora quaerat turpis integer, etiam enim purus nec elit tempor. Vitae siinrdum ante eu dolor. Morbi mi mauris integer auctor. Elit nonummy metus tristique dignissim tortor, accumsan amet, ullamcorper wisi ullamcorper sed purus. Libero facilisis integer vestibulum id. </p>
                    <h4 class="sub-title">benifites of sponsor</h4>
                    <p>Fringilla euismod sed mauris nec, curabitur in mi sed eget, amet congue sed nam etiam quisnam vehicula dui lorem, erat maecenas libero. Enim in volutpat vestibulum ipsum, dui eu antevenatis pharetra, nullam vestibulum pellentesque a ut nunc consequat, a metus vestibulum justo odio felis, quam ornare. Sit sit potenti fermentum cursus.</p>
                    <ol>
                        <li> leifend fringilla quiselit </li>
                        <li> aliquam dolor tortor phasellu </li>
                        <li>dignissim semper consequat </li>
                        <li>curabitur in mi sed eget, </li>
                        <li>Tempora tellus aliquam</li>
                        <li>exercitationem rhoncus </li>
                    </ol>
                    <h4 class="sub-title">Know about sponsorship</h4>
                    <p class="last-para">condimentum cras ac. Sapien exercitationem rhoncus in suspendisse, felis ut cras, nunc felimorbi imperdiet volutpat elit, lectus sodales mollis. Aenean dignissim vel massa in at, ornare enitortor mi tempus. Ut duis, morbi maecenas lorem diam, proin luctus wisi faucibus mauris. Nulla cras pede eget, turpis non, neque laoreet imperdiet mus cursus libero donec, eleifend cras vestibulum id ipsum</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="application-form-area">
                    <h3 class="text-success text-center">{{Session::get('success_message')}}</h3>
                    <h5 class="title">Application Form</h5>
                    <form class="application-form" method="post" action="{{route('saveSponsor')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="company_name" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text"  name="website" placeholder="Website">
                        </div>
                        <div class="form-group">
                            <select id="select-cata" name="sponsor_type">
                                <option value="silver">Silver</option>
                                <option value="golden">golden</option>
                                <option value="platinum">platinum</option>
                                <option value="media">media</option>
                                <option value="diamond">diamond</option>
                            </select>
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
