<section class="ticket-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">get your ticket</h2>
            <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                taciti eu urna, mi nunc volutpat quis</p>
        </div>
        <div class="row mb-30-none justify-content-center">
            @foreach($ticket as $row)
            <div class="col-xl-4 col-md-6">
                <div class="ticket-item wow fadeInUp" data-wow-duration="1s">
                    <h3 class="title">{{$row->tkt_typ}}</h3>
                    <div class="ticket-thumb">
                        <img src="{{asset($row->tkt_img)}}" alt="ticket">
                    </div>
                    <div class="ticket-content">
                        <p>{{$row->tkt_desc}}</p>
                        <h3 class="sub-title">${{$row->tkt_price}}</h3>
                        <a href="#0" class="custom-button active">Buy Ticket</a>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section><?php
