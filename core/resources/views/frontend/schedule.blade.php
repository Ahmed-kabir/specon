<section class="schedule-section padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">what is going on</h2>
            <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                taciti eu urna, mi nunc volutpat quis</p>
        </div>
        <div class="schedule-area tab">
            <ul class="tab-menu">
                <li><span>1st day</span>29 december , 2019</li>
                <li><span>2nd day</span>30 december , 2019</li>
                <li><span>3rd day</span>31 december , 2019</li>
            </ul>
            <div class="tab-area mb-30-none">
                <div class="tab-item">
                    @foreach($frontendSchedule as $row)
                    <div class="schedule-item">
                        <div class="schedule-thumb">
                            <a href="#0"><img src="{{asset($row->speakers->speaker_img)}}" alt="schedule"></a>
                        </div>
                        <div class="schedule-content">
                            <h4 class="title"><a href="#0">{{ $row->topicName->topic_name }}</a></h4>
                            <p><a href="#0">{{ $row->speakers->speaker_name }}</a>at {{$row->start_time}} {{$row->end_time}}</p>
                            <p class="para">{{$row->speakers->description}}</p>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div class="tab-item">
                    <div class="schedule-item">
                        <div class="schedule-thumb">
                            <a href="#0"><img src="{{asset('assets/frontEnd/assets/images/schedule/schedule01.png')}}" alt="schedule"></a>
                        </div>
                        <div class="schedule-content">
                            <h4 class="title"><a href="#0">website design</a></h4>
                            <p><a href="#0">martin hook</a>at 08:00am - 09:00 am</p>
                            <p class="para">Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent
                                vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit
                                lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales
                                fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.</p>
                        </div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-thumb">
                            <a href="#0"><img src="{{asset('assets/frontEnd/assets/images/schedule/schedule02.png')}}" alt="schedule"></a>
                        </div>
                        <div class="schedule-content">
                            <h4 class="title"><a href="#0">Laravel Development</a></h4>
                            <p><a href="#0">martin hook</a>at 08:00am - 09:00 am</p>
                            <p class="para">Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent
                                vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit
                                lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales
                                fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.</p>
                        </div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-thumb">
                            <a href="#0"><img src="{{asset('assets/frontEnd/assets/images/schedule/schedule03.png')}}" alt="schedule"></a>
                        </div>
                        <div class="schedule-content">
                            <h4 class="title"><a href="#0">FrontEnd Development</a></h4>
                            <p><a href="#0">martin hook</a>at 08:00am - 09:00 am</p>
                            <p class="para">Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent
                                vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit
                                lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales
                                fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-item">
                    <div class="schedule-item">
                        <div class="schedule-thumb">
                            <a href="#0"><img src="{{asset('assets/frontEnd/assets/images/schedule/schedule03.png')}}" alt="schedule"></a>
                        </div>
                        <div class="schedule-content">
                            <h4 class="title"><a href="#0">Laraval Development</a></h4>
                            <p><a href="#0">martin hook</a>at 08:00am - 09:00 am</p>
                            <p class="para">Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent
                                vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit
                                lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales
                                fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.</p>
                        </div>
                    </div>
                    <div class="schedule-item">
                        <div class="schedule-thumb">
                            <a href="#0"><img src="{{asset('assets/frontEnd/assets/images/schedule/schedule01.png')}}" alt="schedule"></a>
                        </div>
                        <div class="schedule-content">
                            <h4 class="title"><a href="#0">website design</a></h4>
                            <p><a href="#0">martin hook</a>at 08:00am - 09:00 am</p>
                            <p class="para">Hendrerit lectus egestas. Pede cum tortor consectetuer eu, orci praesent
                                vestibulum aliquam wisi tortor, arcu egeepltesque pede, tellus ipsum morbi nisl. Velit
                                lectus donec orci id auctor. Amet fermentum et dui, vehicula duis eget malesuadadales
                                fusce mollis metus amet per, adipiscing eu ut. Adipiscing non id platea integer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><?php
