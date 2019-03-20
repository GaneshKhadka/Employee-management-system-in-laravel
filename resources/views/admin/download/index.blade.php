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
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                            {{--<h4 class="page-title">Download form</h4>--}}
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('download')}}">Download</a></li>
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

            <div class="row">

                <!-- -------------- FAQ Left Column -------------- -->
                <div class="col-md-12">
                    <div class="box box-success">

                        <div class="panel bg-gradient">
                            <h2 class="text" style="text-align:center"> Notices </h2>
                            <div class="mt40">
                                <div class="table-layout br-t">
                                    <div class="row">
                                        <div class="col-md-4">

                                            <h3> Forms  </h3><br />
                                            <ul class="fs15 list-splitter mb30">
                                                <li>

                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form1 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form2 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form3 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form4 </a></h4>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3> IT </h3><br />
                                            <ul class="fs15 list-splitter mb30" >
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download"></i> Form5 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download"></i> Form6 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download"></i> Form7 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download"></i> Form8 </a></h4>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h3> Asset </h3><br />
                                            <ul class="fs15 list-splitter mb30">
                                                <li>

                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form1 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form2 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form3 </a></h4>
                                                </li>
                                                <li>
                                                    <h4><a class="link-unstyled" href="#" title="">
                                                            <i class="fa fa-cloud-download "></i> Form4 </a></h4>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -------------- FAQ Right Column -------------- -->
            </div>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>

@endsection