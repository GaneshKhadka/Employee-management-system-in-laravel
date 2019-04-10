@extends('admin.layout.master')


@section('content')

    @include('admin.includes.sidebar')

    <div class="page-wrapper">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

        <style type="text/css">
            #startDate, #startTime {
                width:30%;
                float: left;
            }
        </style>


        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>


            <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Salary management</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href=" ">Manage salary</a></li>
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
                        <form action="#" method="GET" class="form-horizontal">
                            <div class="card-body">
                                <h4 class="card-title">Search</h4>
                                <div class="form-group">
                                    <!-- Date Picker -->
                                    <div class="input-group date " id="startDate">
                                        <strong>From</strong>
                                        <input type='date' name="startdate" class="form-control" />
                                    </div>
                                    <!-- Time Picker -->
                                    <div class="input-group date" id="startTime">
                                        <strong>To</strong>
                                        <input type='date' name="enddate" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Search</button>
                                    <a href="#" class="btn btn-md btn-danger">Clear</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{route('managesalary.store')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Manage salary</h4>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Employee name</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="employee_name" id="employee_name" class="form-control" value="{{$employee_name}}" readonly>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Employee designation</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="employee_designation" id="employee_designation" class="form-control" value="{{$des}}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Employee Salary</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="employee_salary" id="employee_salary" class="form-control" id="fname" value="{{$amt}}" readonly>
                                    </div>
                                </div>
                            </div>

                            <hr><hr>

                            <div class="card-body">
                                <h4 class="card-title">Working days</h4>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Total number of working days</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="working_days" id="days" class="form-control" placeholder="Total number of working days">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rate per day</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="rate_per_day" id="rates" class="form-control" placeholder="Rate per day">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Gross pay</label>
                                    <div class="col-sm-5">
                                        <input type="number" name="gross_pay" id="salary" class="form-control" placeholder="Gross pay">
                                    </div>
                                </div>
                            </div>

                            <hr><hr>

                            <div class="card-body">
                                <h4 class="card-title">Deductions</h4>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Tax deduction %</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tax_deduction" id="tax" class="form-control" value="" placeholder="Tax deduction">
                                    </div>
                                </div>
                            </div>

                            <hr><hr>

                            <div class="card-body">
                                <h4 class="card-title">Total salary details</h4>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Gross salary</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="gross_salary" id="net_pay" class="form-control" value="" placeholder="Gross salary">
                                    </div>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-dark">Apply</button>
                                    <a href="{{route('managesalary')}}" class="btn btn-md btn-danger">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <form action="#" method="post" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Leaves</h4>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Leave count</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="leave_count" id="leave_count" class="form-control" placeholder="Total number of leaves">
                                    </div>
                                </div>
                            </div>

                            <hr><hr>

                            <div class="card-body">
                                <h4 class="card-title">Advance payment</h4>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Amount</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="daterange" placeholder="Enter amount" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Date</label>
                                    <div class="col-sm-5">
                                        <input type="date" name="date" id="date" class="form-control">
                                    </div>
                                </div>
                            </div>

                            {{--<div class="card-body">--}}
                                {{--<h4 class="card-title">Over time</h4>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="lname" class="col-sm-3 text-right control-label col-form-label">Date</label>--}}
                                    {{--<div class="col-sm-5">--}}
                                        {{--<input type="date" name="date" id="date" class="form-control" value="">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="lname" class="col-sm-3 text-right control-label col-form-label">Duration</label>--}}
                                    {{--<div class="col-sm-5">--}}
                                        {{--<input type="text" name="duration" id="duration" class="form-control" value="">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-dark">Add</button>
                                    {{--<a href="#" class="btn btn-md btn-danger">Back</a>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


            <script>
                 $('#rates').keyup(function(){
                     var days_worked = $('#days').val();
                     var rate_per_day = $(this).val();
                     var total_gross_salary = days_worked * rate_per_day;
                     $('#salary').val(total_gross_salary);
                 })


                $('#tax').keyup(function(){
                    var tax = $(this).val();
                    var salary = $('#salary').val();
                    var tax_amount = salary * tax/100;
                    var total_netpay = salary - tax_amount;
                    $('#net_pay').val(total_netpay);
                })
            </script>

        <footer class="footer text-center">
            All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
        </footer>

    </div>

@endsection