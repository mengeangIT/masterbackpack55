
<style>
    .timeline > li > .timeline-item {
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        border-radius: 3px;
        margin-top: 0;
        background: #fff;
        /* color: #444; */
        margin-left: 60px;
        margin-right: 15px;
        padding: 0;
        position: relative;
        height: auto;
        overflow: hidden;
        padding-bottom: 30px !important;
    }
     table{
         border-collapse: collapse;
     }
    .border th, .border td {
        border: 1px solid rgba(188, 188, 188, 0.96);
        padding: 5px;
    }
</style>
@extends('vendor.backpack.base.layout')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <ul class="timeline">
                    <li class="time-label">
                      <span class="bg-red">
                      <td  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">Apply Job Information</td>
                      </span>
                    </li>
                    @foreach($apply_job_details as $row)
                    <li>
                        <i class="fa fa-calendar bg-yellow"></i>
                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i></span>

                            <h3 class="timeline-header"><a href="#"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">Apply Job Information</a></h3>

                            <div class="timeline-body">
                                <div class="col-md-9">
                                    <table width="100%">
                                        <tr>
                                            <td>Name : </td>
                                            <td>{{$row->name}}</td>
                                        </tr>
                                        <tr>
                                            <td>National ID : </td>
                                            <td>{{$row->national_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>Phone : </td>
                                            <td>{{$row->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email : </td>
                                            <td>{{$row->email}}</td>
                                        </tr>
                                        <tr>
                                            <td>Salary : </td>
                                            <td>$ {{$row->salary}}</td>
                                        </tr>
                                        <tr>
                                            <td>Start Work : </td>
                                            <td>{{\Carbon\Carbon::parse($row->start_work)->format('d/M/Y') }}</td>
                                        </tr>
                                        <tr>
                                            <td>Apply Date : </td>
                                            <td>{{\Carbon\Carbon::parse($row->created_at)->format('d/M/Y') }}</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li class="time-label">
                      <span class="bg-green"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">
                       Resume Detail
                      </span>
                    </li>
                    <li>
                        <i class="fa fa-camera bg-purple"></i>

                        <div class="timeline-item">
                            <span class="time"><i class="fa fa-clock-o"></i></span>

                            <h3 class="timeline-header"><a href="#"  style="font-family: 'Encode Sans Semi Condensed', sans-serif;
            font-family: 'Hanuman', serif;">Customer Production Record</a></h3>

                            <div class="timeline-body">
                                    <iframe src="{{url('resumes'.'/'.$row->resume)}}" frameborder="0" height="700" scrolling="auto"
                                            width="100%">

                                    </iframe>
                            </div>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </section>
@endsection