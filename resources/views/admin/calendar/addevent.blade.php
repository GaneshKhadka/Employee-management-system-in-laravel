@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">

        @include('admin.includes.sidebar')
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Add Event</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Event</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                    <div class="jombotron">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="panel panel-default">
                                    {{--<div class="panel-heading" style="backgroumd:#2e6da4; color: orangered;">--}}
                                        {{--Add event--}}
                                    {{--</div>--}}
                                    <div class="panel-body">

                                        <form method="post" action="{{url('calendar/store')}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Event name</label>
                                                <input type="text" class="form-control" name="title" placeholder="Enter event name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Color</label>
                                                <input type="color" class="form-control" name="color">
                                            </div>
                                            <div class="form-group">
                                                <label>Start date</label>
                                                <input type="datetime-local" class="form-control" name="start_date" id="">
                                            </div>
                                            <div class="form-group">
                                                <label>End date</label>
                                                <input type="datetime-local" class="form-control" name="end_date" id="">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


            <footer class="footer text-center">
                All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
            </footer>
        </div>
    </div>

@endsection