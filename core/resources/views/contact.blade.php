@extends('welcome')
@section('main')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title">contact us</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    contact
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============ 404 Section Starts Here================== -->
<div class="contact-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">get in touch with us</h2>
            <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                taciti eu urna, mi nunc volutpat quis</p>
        </div>
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <form id="contact_form_submit" class="contact-form-submit">
                    <div class="form-group">
                        <input type="text" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" id="phone" placeholder="Phone">
                    </div>
                    <div class="form-group w-100">
                        <input type="text" id="email" placeholder="Email">
                    </div>
                    <div class="form-group w-100">
                        <textarea id="message" placeholder="Messages"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message">
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="location-area">
                    <div class="location-item">
                        <div class="location-thumb">
                            <img src="{{asset('assets/frontEnd/assets/images/contact/contact01.png')}}" alt="contact">
                        </div>
                        <div class="location-content">
                            <span>USA, Callifornia 20, Firs </span>
                            <span>Avenue, Callifornia</span>
                        </div>
                    </div>
                    <div class="location-item">
                        <div class="location-thumb">
                            <img src="{{asset('assets/frontEnd/assets/images/contact/contact02.png')}}" alt="contact">
                        </div>
                        <div class="location-content">
                            <span>(123) 456-7890</span>
                            <span>(123) 456-7891</span>
                        </div>
                    </div>
                    <div class="location-item">
                        <div class="location-thumb">
                            <img src="{{asset('assets/frontEnd/assets/images/contact/contact03.png')}}" alt="contact">
                        </div>
                        <div class="location-content">
                            <span>contact@example.com</span>
                            <span>info@example.com</span>
                        </div>
                    </div>
                    <ul class="social-icons location-item justify-content-start">
                        <li>
                            <a href="#0" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#0" class="twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#0" class="instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="#0" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
