@extends('home.welcome')
@section('main')
<section class="page-header">
<div class="container">
    <div class="page-header-content">
        <h2 class="title">Schedule - 01</h2>
        <ul class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                Schedule
            </li>
        </ul>
    </div>
</div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============Schedule Section Starts Here================== -->
<section class="schedule-section padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">

        </div>
        <div class="schedule-area tab">
            <ul class="tab-menu">
                <?php
                $sl=1;
                ?>
                @foreach($slot as $vSlot)
                    <?php
                        $date = $vSlot->date;

                        $convert_date = strtotime($date);
                        $month = date('F',$convert_date);
                        $year = date('Y',$convert_date);
                        $day = date('j',$convert_date);

//                       echo $result = $month . " " . $day . ", " . $year ;
                    ?>
                    <li onclick="getTabData1('{{$vSlot->date}}');"><span>Day {{ $sl}} </span>{{ $month.' '.$day, ','.$year }}</li>

                        <?php
                        $sl++;
                        ?>
                @endforeach
            </ul>

            <div class="tab-area mb-30-none">
                @foreach($slot as $vSlot)
                    <div class="tab-item" id="msg">

                        @foreach($frontendSchedule as $row)
                            @if($row->date == $vSlot->date)

                                <div class="schedule-item">
                                    <div class="schedule-thumb">
                                        <a href="#0"><img src="{{asset('assets/speakerImage/'.$row->speakers->speaker_img)}}"
                                                          class="img-thumbnail" alt="User Image"></a>

                                    </div>
                                    <div class="schedule-content">
                                        <h4 class="title"><a href="#0">{{ $row->topicName->topic_name }}</a></h4>
                                        <p><a href="#0">{{ $row->speakers->speaker_name }}</a>at {{$row->start_time}} {{$row->end_time}}</p>
                                        <p class="para">{{$row->speakers->description}}</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                @endforeach



            </div>
        </div>
    </div>
</section>
<!-- ============Schedule Section Ends Here================== -->

<!-- ============Call in Ticket Section Starts Here================== -->

@include('frontend.callticket')

@endsection
