@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
    @include('admin.includes.sidebar')
    <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Invoice</h4>
                            <div class="ml-auto text-right">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                                <h3> &nbsp;<b class="text-danger">Invoice payment</b></h3>
                                <p class="text-muted m-l-5">
                                    <br/> Employee name:
                                    <br/>  Phone number:</p>
                        </div>


                        <div class="col-md-6">
                            <br><br>
                                <p class="text-muted m-l-5">Address:
                                    <br/>  Department:
                                    <br/> Designation:</p>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                                <h4 class="card-title">Earning</h4>

                                <div class="form-group row">
                                    <label class="col-sm-3 text-right control-label col-form-label">Basic salary</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="basic_salary" id="basic_salary" class="form-control" value="" >
                                    </div>
                                </div>
                        </div>

                        {{--<div class="col-md-6"><br>--}}
                            {{--<h4 class="card-title">Deduction</h4>--}}
                            {{--<div class="form-group row">--}}
                                {{--<label class="col-sm-3 text-right control-label col-form-label">Tax deduction</label>--}}
                                {{--<div class="col-sm-5">--}}
                                    {{--<input type="text" name="tax" id="tax" class="form-control" value="" >--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--</div>--}}
                    </div>



                    <div class="col-md-10">
                        <div class="pull-right m-t-30 text-right">
                            <p>Total amount: $13,848</p>
                            <p>Tax (10%) : $138 </p>
                            <hr>
                            <h3><b>Total :</b> $13,986</h3>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer text-center">
                    All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

@endsection