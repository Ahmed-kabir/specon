<section class="speaker-section padding-bottom padding-top">
    <div class="container-fluid">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">event speakers</h2>
            <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                taciti eu urna, mi nunc volutpat quis</p>
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

                        <img src="{{asset($row->speaker_img)}}" />

                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section><?php
