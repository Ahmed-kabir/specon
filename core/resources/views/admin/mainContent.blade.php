@extends('admin.dashboard')
@section('main')


    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-1">
            <div class="card-body pb-0">
                <div class="dropdown float-right">

                </div>
                <h4 class="mb-0">
                    <span class="text-center"> Coference Start Date</span>
                </h4>
                </br>
                <p class="text-light">{{$settings->start_date}}</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart1"></canvas>
                </div>

            </div>

        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-2">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="text-center">No Of Sponsor</span>
                </h4>
                </br>
                <p class="text-light">{{$sponsor}}</p>

                <div class="chart-wrapper px-0" style="height:70px;" height="70">
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-3">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="text-center"> Sold Ticket</span>
                </h4>
                </br>
                <p class="text-light">{{$soldTkt}}</p>

            </div>

            <div class="chart-wrapper px-0" style="height:70px;" height="70">
                <canvas id="widgetChart3"></canvas>
            </div>
        </div>
    </div>
    <!--/.col-->

    <div class="col-sm-6 col-lg-3">
        <div class="card text-white bg-flat-color-4">
            <div class="card-body pb-0">

                <h4 class="mb-0">
                    <span class="text-center"> Available Ticket</span>
                </h4>
                </br>
                <p class="text-light">{{$remainTicket}}</p>

                <div class="chart-wrapper px-3" style="height:70px;" height="70">
                    <canvas id="widgetChart4"></canvas>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
    <div class="col-lg-9">
        <div class="card">
            <div class="card-header text-center">
                <strong class="card-title">Speaker & Schedule</strong>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Name</th>
                        <th scope="col">Topic</th>
                        <th scope="col">Date</th>
                        <th scope="col">Scheedule</th>
                        <th scope="col">Image</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($frontendSchedule as $key => $row)
                    <tr>
                        <th scope="row">{{ $frontendSchedule->firstItem() + $key}}</th>
                        <td>{{ $row->speakers->speaker_name }}</td>
                        <td>{{ $row->topicName->topic_name }}</td>
                        <td>{{ $row->date }}</td>
                        <td>{{$row->start_time}} To {{$row->end_time}}</td>
                        <td><img src="{{asset($row->speakers->speaker_img)}}" height="50" width="50" alt="schedule"></td>


                    </tr>
                    @endforeach
                    </tbody>

                </table>
                <div class="pagination">
                    {{ $frontendSchedule->links() }}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
