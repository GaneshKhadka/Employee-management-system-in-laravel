@extends('admin.layout.master')

@section('content')
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
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
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Sales Cards  -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                            <h6 class="text-white">Dashboard</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-chart-areaspline"></i></h1>
                            <h6 class="text-white">Charts</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-collage"></i></h1>
                            <h6 class="text-white">Widgets</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-border-outside"></i></h1>
                            <h6 class="text-white">Tables</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-arrow-all"></i></h1>
                            <h6 class="text-white">Full Width</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-md-6 col-lg-4 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-danger text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-receipt"></i></h1>
                            <h6 class="text-white">Forms</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-relative-scale"></i></h1>
                            <h6 class="text-white">Buttons</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-cyan text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-pencil"></i></h1>
                            <h6 class="text-white">Elements</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-success text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-calendar-check"></i></h1>
                            <h6 class="text-white">Calnedar</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <div class="col-md-6 col-lg-2 col-xlg-3">
                    <div class="card card-hover">
                        <div class="box bg-warning text-center">
                            <h1 class="font-light text-white"><i class="mdi mdi-alert"></i></h1>
                            <h6 class="text-white">Errors</h6>
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex align-items-center">
                                <div>
                                    <h4 class="card-title">Site Analysis</h4>
                                    <h5 class="card-subtitle">Overview of Latest Month</h5>
                                </div>
                            </div>
                            <div class="row">
                                <!-- column -->
                                <div class="col-lg-9">
                                    <div class="flot-chart">
                                        <div class="flot-chart-content" id="flot-line-chart"></div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-user m-b-5 font-16"></i>
                                                <h5 class="m-b-0 m-t-5">2540</h5>
                                                <small class="font-light">Total Users</small>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-plus m-b-5 font-16"></i>
                                                <h5 class="m-b-0 m-t-5">120</h5>
                                                <small class="font-light">New Users</small>
                                            </div>
                                        </div>
                                        <div class="col-6 m-t-15">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-cart-plus m-b-5 font-16"></i>
                                                <h5 class="m-b-0 m-t-5">656</h5>
                                                <small class="font-light">Total Shop</small>
                                            </div>
                                        </div>
                                        <div class="col-6 m-t-15">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-tag m-b-5 font-16"></i>
                                                <h5 class="m-b-0 m-t-5">9540</h5>
                                                <small class="font-light">Total Orders</small>
                                            </div>
                                        </div>
                                        <div class="col-6 m-t-15">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-table m-b-5 font-16"></i>
                                                <h5 class="m-b-0 m-t-5">100</h5>
                                                <small class="font-light">Pending Orders</small>
                                            </div>
                                        </div>
                                        <div class="col-6 m-t-15">
                                            <div class="bg-dark p-10 text-white text-center">
                                                <i class="fa fa-globe m-b-5 font-16"></i>
                                                <h5 class="m-b-0 m-t-5">8540</h5>
                                                <small class="font-light">Online Orders</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- column -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Sales chart -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
            <div class="row">
                <!-- column -->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Latest Posts</h4>
                        </div>
                        <div class="comment-widgets scrollable">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src="{{asset('admin-panel/assets/images/users/1.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="{{asset('admin-panel/assets/images/users/4.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">May 10, 2016</span>
                                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="{{asset('admin-panel/assets/images/users/5.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Johnathan Doeting</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">August 1, 2016</span>
                                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To Do List</h4>
                            <div class="todo-widget scrollable" style="height:450px;">
                                <ul class="list-task todo-list list-group m-b-0" data-role="tasklist">
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label todo-label" for="customCheck">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> <span class="badge badge-pill badge-danger float-right">Today</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/1.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Steave"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/2.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Jessica"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/3.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/4.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label todo-label" for="customCheck1">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing</span><span class="badge badge-pill badge-primary float-right">1 week </span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label todo-label" for="customCheck2">
                                                <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/3.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/4.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label todo-label" for="customCheck3">
                                                <span class="todo-desc">Lorem Ipsum is simply dummy text of the printing </span> <span class="badge badge-pill badge-warning float-right">2 weeks</span>
                                            </label>
                                        </div>
                                        <div class="item-date"> 26 jun 2017</div>
                                    </li>
                                    <li class="list-group-item todo-item" data-role="task">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label todo-label" for="customCheck4">
                                                <span class="todo-desc">Give Purchase report to</span> <span class="badge badge-pill badge-info float-right">Yesterday</span>
                                            </label>
                                        </div>
                                        <ul class="list-style-none assignedto">
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/3.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Priyanka"></li>
                                            <li class="assignee"><img class="rounded-circle" width="40" src="{{asset('admin-panel/assets/images/users/4.jpg')}}" alt="user" data-toggle="tooltip" data-placement="top" title="" data-original-title="Selina"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">Progress Box</h4>
                            <div class="m-t-20">
                                <div class="d-flex no-block align-items-center">
                                    <span>81% Clicks</span>
                                    <div class="ml-auto">
                                        <span>125</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 81%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex no-block align-items-center m-t-25">
                                    <span>72% Uniquie Clicks</span>
                                    <div class="ml-auto">
                                        <span>120</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 72%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex no-block align-items-center m-t-25">
                                    <span>53% Impressions</span>
                                    <div class="ml-auto">
                                        <span>785</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 53%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <div class="d-flex no-block align-items-center m-t-25">
                                    <span>3% Online Users</span>
                                    <div class="ml-auto">
                                        <span>8</span>
                                    </div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 3%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card new -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title m-b-0">News Updates</h4>
                        </div>
                        <ul class="list-style-none">
                            <li class="d-flex no-block card-body">
                                <i class="fa fa-check-circle w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a>
                                    <span class="text-muted">dolor sit amet, consectetur adipiscing</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">20</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-gift w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Congratulation Maruti, Happy Birthday</a>
                                    <span class="text-muted">many many happy returns of the day</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">11</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-plus w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Maruti is a Responsive Admin theme</a>
                                    <span class="text-muted">But already everything was solved. It will ...</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">19</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-leaf w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0">Envato approved Maruti Admin template</a>
                                    <span class="text-muted">i am very happy to approved by TF</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">20</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                            <li class="d-flex no-block card-body border-top">
                                <i class="fa fa-question-circle w-30px m-t-5"></i>
                                <div>
                                    <a href="#" class="m-b-0 font-medium p-0"> I am alwayse here if you have any question</a>
                                    <span class="text-muted">we glad that you choose our template</span>
                                </div>
                                <div class="ml-auto">
                                    <div class="tetx-right">
                                        <h5 class="text-muted m-b-0">15</h5>
                                        <span class="text-muted font-16">Jan</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- column -->

                <div class="col-lg-6">
                    <!-- Card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Chat Option</h4>
                            <div class="chat-box scrollable" style="height:475px;">
                                <!--chat Row -->
                                <ul class="chat-list">
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img"><img src="{{asset('admin-panel/assets/images/users/1.jpg')}}" alt="user"></div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">James Anderson</h6>
                                            <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                        </div>
                                        <div class="chat-time">10:56 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img"><img src="{{asset('admin-panel/assets/images/users/2.jpg')}}" alt="user"></div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">Bianca Doe</h6>
                                            <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                        </div>
                                        <div class="chat-time">10:57 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd chat-item">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">I would love to join the team.</div>
                                            <br>
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="odd chat-item">
                                        <div class="chat-content">
                                            <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time">10:59 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item">
                                        <div class="chat-img"><img src="{{asset('admin-panel/assets/images/users/3.jpg')}}" alt="user"></div>
                                        <div class="chat-content">
                                            <h6 class="font-medium">Angelina Rhodes</h6>
                                            <div class="box bg-light-info">Well we have good budget for the project</div>
                                        </div>
                                        <div class="chat-time">11:00 am</div>
                                    </li>
                                    <!--chat Row -->
                                </ul>
                            </div>
                        </div>
                        <div class="card-body border-top">
                            <div class="row">
                                <div class="col-9">
                                    <div class="input-field m-t-0 m-b-0">
                                        <textarea id="textarea1" placeholder="Type and enter" class="form-control border-0"></textarea>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <a class="btn-circle btn-lg btn-cyan float-right text-white" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- card -->
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Our partner (Box with Fix height)</h4>
                        </div>
                        <div class="comment-widgets scrollable" style="max-height: 130px;">
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row m-t-0">
                                <div class="p-2"><img src="{{asset('admin-panel/assets/images/users/1.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">James Anderson</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">April 14, 2016</span>
                                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="{{asset('admin-panel/assets/images/users/4.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text active w-100">
                                    <h6 class="font-medium">Michael Jorden</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">May 10, 2016</span>
                                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Comment Row -->
                            <div class="d-flex flex-row comment-row">
                                <div class="p-2"><img src="{{asset('admin-panel/assets/images/users/5.jpg')}}" alt="user" width="50" class="rounded-circle"></div>
                                <div class="comment-text w-100">
                                    <h6 class="font-medium">Johnathan Doeting</h6>
                                    <span class="m-b-15 d-block">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
                                    <div class="comment-footer">
                                        <span class="text-muted float-right">August 1, 2016</span>
                                        <button type="button" class="btn btn-cyan btn-sm">Edit</button>
                                        <button type="button" class="btn btn-success btn-sm">Publish</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- accoridan part -->
                    <div class="accordion" id="accordionExample">
                        <div class="card m-b-0">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Accordion Example 1</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card m-b-0 border-top">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Accordion Example 2</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="card m-b-0 border-top">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="m-r-5 fa fa-magnet" aria-hidden="true"></i>
                                        <span>Accordion Example 3</span>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- toggle part -->
                    <div id="accordian-4">
                        <div class="card m-t-30">
                            <a class="card-header link" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-1" aria-expanded="true" aria-controls="Toggle-1">
                                <i class="seticon fa fa-arrow-right" aria-hidden="true"></i>
                                <span>Toggle, Open by default</span>
                            </a>
                            <div id="Toggle-1" class="collapse show multi-collapse">
                                <div class="card-body widget-content">
                                    This box is opened by default, paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.
                                </div>
                            </div>
                            <a class="card-header link border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-2" aria-expanded="false" aria-controls="Toggle-2">
                                <i class="seticon fa fa-times" aria-hidden="true"></i>
                                <span>Toggle, Closed by default</span>
                            </a>
                            <div id="Toggle-2" class="multi-collapse collapse" style="">
                                <div class="card-body widget-content">
                                    This box is now open
                                </div>
                            </div>
                            <a class="card-header collapsed link border-top" data-toggle="collapse" data-parent="#accordian-4" href="#Toggle-3" aria-expanded="false" aria-controls="Toggle-3">
                                <i class="seticon fa fa-times" aria-hidden="true"></i>
                                <span>Toggle, Closed by default</span>
                            </a>
                            <div id="Toggle-3" class="collapse multi-collapse">
                                <div class="card-body widget-content">
                                    This box is now open
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabs -->
                    <div class="card">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tab1</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tab2</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><span class="hidden-sm-up"></span> <span class="hidden-xs-down">Tab3</span></a> </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane active" id="home" role="tabpanel">
                                <div class="p-20">
                                    <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
                                    <img src="{{asset('admin-panel/assets/images/background/img4.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane  p-20" id="profile" role="tabpanel">
                                <div class="p-20">
                                    <img src="{{asset('admin-panel/assets/images/background/img4.jpg')}}" class="img-fluid">
                                    <p class="m-t-10">And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
                                </div>
                            </div>
                            <div class="tab-pane p-20" id="messages" role="tabpanel">
                                <div class="p-20">
                                    <p>And is full of waffle to It has multiple paragraphs and is full of waffle to pad out the comment. Usually, you just wish these sorts of comments would come to an end.multiple paragraphs and is full of waffle to pad out the comment..</p>
                                    <img src="{{asset('admin-panel/assets/images/background/img4.jpg')}}" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Recent comment and chats -->
            <!-- ============================================================== -->
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

    @endsection
