@extends('home.welcome')
@section('main')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title">Blog post</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    Blog post
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============ Blog Section Starts Here================== -->
<section class="blog-section padding-top padding-bottom">
    <div class="container">
        <div class="row align-items-start">
            @foreach($blog as $row)
            <div class="col-lg-8">
                <div class="post-item style-two">
                    <div class="post-content">

                        <h3 class="title"><a href="blog-details.html">{{$row->title}}</a></h3>
                        <ul class="meta-post">
                            <li>
                                02 <a href="#0"> Comment</a>
                            </li>
                            <li>
                                By <a href="#0"> Admin</a>
                            </li>
                            <li>
                                In <a href="#0"> Event</a>
                            </li>
                        </ul>
                    </div>
                    <div class="post-thumb">
                        <a href="blog-details.html"><img src="{{asset($row->img)}}" alt="blog"></a>
                        <ul class="blog-date">
                            <?php

                            $exploded_date = (explode("-",$row->date));
                            $month =$exploded_date[0];
                            $date = $exploded_date[1];
                            ?>
                            <h2>{{$date}}</h2>
                            <span>{{$month}}</span>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p>{{$row->short_desc}}}</p>

                        <a href="#0">Read More <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

            </div>
            @endforeach

            <div class="col-lg-4 fixedsticky">
                <aside class="sidebar">
                    <div class="widget widget-search">
                        <form>
                            <input type="text" placeholder="Search Key Word">
                            <button type="submit">
                                <i class="flaticon-search-1"></i>
                            </button>
                        </form>
                    </div>
                    <div class="widget widget-category">
                        <h6 class="title">New Categories</h6>
                        <ul class="category-area">
                            <li>
                                <a href="#0"><span>Conference</span><span>31</span></a>
                            </li>
                            <li>
                                <a href="#0"><span>Event</span><span>03</span></a>
                            </li>
                            <li>
                                <a href="#0"><span>Meetup</span><span>23</span></a>
                            </li>
                            <li>
                                <a href="#0"><span>Room</span><span>17</span></a>
                            </li>
                            <li>
                                <a href="#0"><span>Speakers</span><span>09</span></a>
                            </li>
                            <li>
                                <a href="#0"><span>Schedule</span><span>22</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget-post">
                        <h6 class="title">Popular News</h6>
                        <ul>
                            <li>
                                <div class="widget-post-thumb">
                                    <a href="#0">
                                        <img src="{{asset('assets/frontEnd/assets/images/blog/side01.jpg')}}" alt="blog">
                                    </a>
                                </div>
                                <div class="widget-post-content">
                                    <h6><a href="#0">Condimentum incidunt amet apellente</a></h6>
                                    <p><a href="#0">By admin</a><a href="#0" class="ml-2">25 Dec 2018</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="widget-post-thumb">
                                    <a href="#0">
                                        <img src="{{asset('assets/frontEnd/assets/images/blog/side02.jpg')}}" alt="blog">
                                    </a>
                                </div>
                                <div class="widget-post-content">
                                    <h6><a href="#0">Condimentum incidunt amet apellente</a></h6>
                                    <p><a href="#0">By admin</a><a href="#0" class="ml-2">25 Dec 2018</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="widget-post-thumb">
                                    <a href="#0">
                                        <img src="{{asset('assets/frontEnd/assets/images/blog/side03.jpg')}}" alt="blog">
                                    </a>
                                </div>
                                <div class="widget-post-content">
                                    <h6><a href="#0">Condimentum incidunt amet apellente</a></h6>
                                    <p><a href="#0">By admin</a><a href="#0" class="ml-2">25 Dec 2018</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-tags widget">
                        <h6 class="title">news tag</h6>
                        <ul>
                            <li><a href="#0">support</a></li>
                            <li><a href="#0">business event</a></li>
                            <li><a href="#0">speakers</a></li>
                            <li><a href="#0">marketing</a></li>
                            <li><a href="#0">service</a></li>
                            <li><a href="#0">human</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
@endsection
