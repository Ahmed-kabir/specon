<section class="blog-section padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">our news update</h2>
            <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                taciti eu urna, mi nunc volutpat quis</p>
        </div>
        <div class="row mb-30-none justify-content-center">
            @foreach($blog as $row)
            <div class="col-md-6 col-lg-4">
                <div class="post-item wow fadeInUp" data-wow-duration="1s">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="{{asset($row->img)}}" alt="blog"></a>
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
                    <div class="post-content">
                        <h4 class="title"><a href="blog.html">{{$row->title}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
