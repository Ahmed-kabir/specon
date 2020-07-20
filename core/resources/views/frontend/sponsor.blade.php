<section class="sponsor-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">official sponsor</h2>
            <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                taciti eu urna, mi nunc volutpat quis</p>
        </div>
        <div class="sponsor-wrapper">
            <h4 class="sub-title">diamond sponsors</h4>

            <div class="sponsor-area">
                @foreach($sponsor as $row)
                    @if($row->sponsor_type == 'Diamond Sponsors')
                <div class="sponsor-thumb">
                    <a href="#0"><img src="{{asset($row->sponsor_img)}}" alt="sponsor"></a>
                </div>
                    @endif
                @endforeach
            </div>

            <h4 class="sub-title">platinum sponsors</h4>
            <div class="sponsor-area">
                @foreach($sponsor as $row)
                    @if($row->sponsor_type == 'Platinum Sponsors')
                <div class="sponsor-thumb">
                    <a href="#0"><img src="{{asset($row->sponsor_img)}}" alt="sponsor"></a>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="text-center">
            <a href="#0" class="custom-button">Become a Sponsor</a>
        </div>
    </div>
</section>
