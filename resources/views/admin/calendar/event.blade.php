@extends('admin.layout.master')

@section('content')

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-3 border-right p-r-0">
                                    <div class="card-body border-bottom">
                                        <h4 class="card-title m-t-10">Drag & Drop Event</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="calendar-events" class="">
                                                    <div class="calendar-events m-b-20" data-class="bg-info"><i class="fa fa-circle text-info m-r-10"></i>Event</div>
                                                    <div class="calendar-events m-b-20" data-class="bg-success"><i class="fa fa-circle text-success m-r-10"></i>Event</div>
                                                    <div class="calendar-events m-b-20" data-class="bg-danger"><i class="fa fa-circle text-danger m-r-10"></i>Event</div>
                                                    <div class="calendar-events m-b-20" data-class="bg-warning"><i class="fa fa-circle text-warning m-r-10"></i>Event</div>
                                                </div>
                                                <!-- checkbox -->
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                    <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                                </div>
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                                    <i class="ti-plus"></i> Add New Event
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="card-body b-l calender-sidebar">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- BEGIN MODAL -->
            <div class="modal none-border" id="my-event">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add Event</strong></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                            <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Add Category -->
            <div class="modal fade none-border" id="add-new-event">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title"><strong>Add</strong> Event</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <form action="{{route('event.store')}}" method="post">
                            @csrf
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="control-label">Date</label>
                                        <input class="form-control form-white" name="date" type="date"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label">Event Name</label>
                                        <input class="form-control form-white" name="event" placeholder="Enter name" type="text"/>
                                        <br>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="control-label">Description</label>
                                        <input class="form-control form-white" name="description" placeholder="Enter description" type="text"/>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger waves-effect waves-light save-category">Save</button>
                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                </div>
                             </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <footer class="footer text-center">
            All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/" target="_blank">Khozinfo</a>.
        </footer>

    </div>

@endsection

@section('js')

    <script src="{{asset('admin-panel/assets/libs/flot/excanvas.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot/jquery.flot.crosshair.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/pages/chart/chart-page-init.js')}}"></script>

    <script src="{{asset('admin-panel/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/custom.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin-panel/assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('admin-panel/dist/js/pages/calendar/cal-init.js')}}"></script>

@endsection
