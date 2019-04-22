@extends('admin.layout.master')
@section('content')

    <style type="text/css">
        #startDate, #startTime, #search {
            width:30%;
            float: left;
        }
        /*#date,#amount{*/
            /*width: 30%;*/
            /*float: right;*/
        /*}*/
    </style>

    <style>
        @media print  {
            .page-breadcrumb{
                display: none;
            }
            .sidebar-nav{
                display: none;
            }
            .no-print {
                display: none;
            }
            .text-center{
                display: none;
            }
            .advance-pay{
                display: none;
            }
            .managesalary{
                display: none;
            }
            dl.employeedetails{
                border: 1px solid red;
                padding: 35px 70px 50px;
            }
            table.advancepayment{
                border: 1px solid red;
                padding: 35px 70px 50px;
            }
        }
    </style>
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
                        <form action="{{route('managesalary.detail',$user->id)}}" method="GET" class="form-horizontal no-print">
                            <div class="card-body">
                                <h4 class="card-title">Search</h4>
                                <div class="form-group">
                                    <!-- Date Picker -->
                                    <div class="input-group date " id="startDate">
                                        <strong>From</strong>
                                        <input type='date' value="{{request()->startdate}}" name="startdate" class="form-control" />
                                    </div>
                                    <!-- Time Picker -->
                                    <div class="input-group date" id="startTime">
                                        <strong>To</strong>
                                        <input type='date' value="{{request()->enddate}}" name="enddate" class="form-control" />
                                    </div>
                                    <div class="input-group date" id="search">
                                        <button type="submit" class="btn btn-success">Search</button>
                                        <a href="{{route('managesalary.detail',$user->id)}}" class="btn btn-md btn-danger">Clear</a>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row no-print">
                <div class="col-12">
                    {{--<a href="" id="pdffile" target="-_blank" class="btn btn-default"><i class="fa fa-print"></i>Print </a>--}}
                    <button class="btn btn-danger" onclick="pdf()"><i class="fa fa-print"></i> Print</button>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-6">
                    <div class="card">
                        <form action="{{route('managesalary.store')}}" method="post" class="form-horizontal">
                            @csrf
                            <h4 class="card-title managesalary">Manage salary</h4>
                            <dl class="row employeedetails">
                                <dt class="col-sm-5">Employee name:</dt>
                                <dd class="col-sm-7" name="employee_name" id="employee_name"><strong>{{$employee_name}}</strong></dd>

                                <dt class="col-sm-5">Employee designation:</dt>
                                <dd class="col-sm-7" name="employee_designation" id="employee_designation">{{$des}}</dd>

                                <dt class="col-sm-5">Employee Salary:</dt>
                                <dd class="col-sm-7" name="employee_salary" id="employee_salary">{{$amt}}</dd>

                                <dt class="col-sm-5">Employee leave:</dt>
                                <dd class="col-sm-7" name="leave_count" id="leave_count">{{$total_leaves}}</dd>

                                <dt class="col-sm-5">Tax (1%): </dt>
                                <dd class="col-sm-7" name="tax" id="tax"></dd>

                                <dt class="col-sm-5">Advance payment:</dt>
                                <dd class="col-sm-7" name="advance" id="advance">{{$advancePayment->total}} </dd>

                                <dt class="col-sm-5">Total:</dt>
                                <dd class="col-sm-7" name="total" id="grand-total"> </dd>

                            </dl>
                            {{--<hr>--}}

                            <script>
                                calculate();
                                function calculate(){
                                    var total_salary=$('#employee_salary').text();
                                    var per_day_amount=total_salary/30;
                                    var leave_day=$('#leave_count').text();
                                    var leave_amount= per_day_amount*leave_day;
                                    var tax_percentage=1;
                                    var tax_amount=total_salary*tax_percentage/100;
                                    var advance_payment=$('#advance').text();
                                    var grand_total=total_salary-leave_amount-tax_amount-advance_payment;
                                    $('#tax').text(tax_amount);
                                    $('#grand-total').text(grand_total);
                                    // console.log(grand_total);
                                }
                            </script>
                            <hr>

                            {{--<div class="card-body">--}}
                                {{--<h4 class="card-title">Working days</h4>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="lname" class="col-sm-3 text-right control-label col-form-label">Total number of working days</label>--}}
                                    {{--<div class="col-sm-5">--}}
                                        {{--<input type="text" name="working_days" id="days" value="30" class="form-control">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="fname" class="col-sm-3 text-right control-label col-form-label">Rate per day</label>--}}
                                    {{--<div class="col-sm-5">--}}
                                        {{--<input type="number" name="rate_per_day" id="rates" class="form-control" placeholder="Rate per day">--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="form-group row">--}}
                                    {{--<label for="fname" class="col-sm-3 text-right control-label col-form-label">Gross pay</label>--}}
                                    {{--<div class="col-sm-5">--}}
                                        {{--<input type="number" name="gross_pay" id="salary" class="form-control" placeholder="Gross pay">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<hr><hr>--}}

                            {{--<div class="card-body">--}}
                                {{--<h4 class="card-title">Deductions</h4>--}}
                                {{--<div class="form-group row">--}}
                                    {{--<label for="lname" class="col-sm-3 text-right control-label col-form-label">Tax %</label>--}}
                                    {{--<div class="col-sm-5">--}}
                                        {{--<input type="text" name="tax_deduction"   class="form-control" value="" placeholder="Tax deduction">--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<hr><hr>--}}



                            {{--<div class="border-top no-print">--}}
                                {{--<div class="card-body">--}}
                                    {{--<button type="submit" class="btn btn-dark">Apply</button>--}}
                                    {{--<a href="{{route('managesalary')}}" class="btn btn-md btn-danger">Back</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">


                        <form action="{{route('managesalary.makeadvance')}}" method="post" class="form-horizontal advance-pay">
                            @csrf
                            <input type="hidden" name="employee_id" value="{{$user->id}}">
                            <div class="card-body">
                                <h4 class="card-title">Advance payment</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Date</label>
                                    <div class="col-sm-5">
                                        <input type="date" name="date" id="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Amount</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="amount" id="amount" placeholder="Enter amount" />
                                    </div>
                                </div>
                            </div>

                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-dark">Add</button>
                                    {{--<a href="#" class="btn btn-md btn-danger">Back</a>--}}
                                </div>
                            </div>
                            <hr><hr>
                        </form>
                        <div class="card-body">
                            <h5 class="card-title">Advance payment lists</h5><hr/>
                            <table id="advance-payment" class="display advancepayment" style="width:100%">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Date</th>
                                    <th>Amount(RS)</th>
                                    <th class="no-print">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($advance as $advances)
                                    <tr>
                                        <td>{{$loop -> index+1 }}</td>
                                        <td>{{$advances ->date }}</td>
                                        <td>{{$advances ->amount }}</td>
                                        <td class="no-print">Edit</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
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

            {{--datatable--}}
            <script>
                $(document).ready(function() {
                    $('#advance-payment').DataTable();
                });
            </script>

            {{--Start-For printing the screen--}}
            <script>
                function pdf() {
                    window.print();
                }
            </script>

            {{--End-For printing the screen--}}

        <footer class="footer text-center">
            All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
        </footer>

    </div>

@endsection