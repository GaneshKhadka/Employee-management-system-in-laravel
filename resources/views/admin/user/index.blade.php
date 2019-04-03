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
                        <h4 class="page-title">Admin Manager</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('user')}}">User</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title m-b-0">Admin</h5>
                            </div>
                            <div class="table-responsive">
                                <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>S.N</th>
                                    <th>Username</th>
                                    <th>Image</th>
                                    <th>Role</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th>{{$loop->index+1}}</th>
                                        <td>{{$user->username}}</td>
                                        <td><img src="{{ asset('uploads/gallery/' . $user->image) }}" width="80px" height="80px" alt="Image"> </td>
                                        <td>{{$user->role}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            <form action="{{route('user.delete',$user->id)}}" method="put">
                                                @csrf
                                                @method('DELETE')
                                                <a data-toggle ="modal"  data-target = "#view-data{{$user->id}}" class="btn btn-sm btn-success">View</a>
                                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-sm btn-dark">Edit</a>
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="view-data{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   {{--<h5>{{$user->username}}</h5><br>--}}
                                                    {{--<h5>{{$user->role}}</h5>--}}
                                                    <form>
                                                        <div>
                                                            <label class="col-form-label">Employee name: {{$user->username}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Role: {{$user->role}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Email address: {{$user->email}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Contact number: {{$user->phone}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Address: {{$user->address}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Date of birth: {{$user->dob}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Join date: {{$user->join_date}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Job type: {{$user->job_type}}</label>
                                                        </div>
                                                        <div>
                                                            <label class="col-form-label">Age: {{$user->age}}</label>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>

                <div class="modal fade" id="view-data" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                    @csrf
                                    {{--@method('PUT')--}}
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Username</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="username" class="form-control" id="username" value="{{$user->username}}" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Role</label>
                                            <div class="col-sm-9">
                                                <select type="text" name="role" class="form-control" id="lname" value="{{$user->role}}" readonly>
                                                    <option value="admin">Admin</option>
                                                    <option value="employee">Employee</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="email" class="form-control" id="lname" value="{{$user->email}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="phone" class="col-sm-3 text-right control-label col-form-label">Contact</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="phone" class="form-control" id="phone" value="{{$user->phone}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-sm-3 text-right control-label col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="address" class="form-control" id="address" value="{{$user->address}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="gender" class="col-sm-3 text-right control-label col-form-label">Gender</label>
                                            <div class="col-sm-9">
                                                <select type="text" name="gender" class="form-control" id="gender" value="{{$user->gender}}" readonly>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="lname" class="col-sm-3 text-right control-label col-form-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="dob" class="form-control" id="dob" value="{{$user->dob}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="joindate" class="col-sm-3 text-right control-label col-form-label">Join date</label>
                                            <div class="col-sm-9">
                                                <input type="date" name="join_date" class="form-control" id="join_date" value="{{$user->join_date}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="job type" class="col-sm-3 text-right control-label col-form-label">Job type</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="job_type" class="form-control" id="job_type" value="{{$user->job_type}}" readonly>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="age" class="col-sm-3 text-right control-label col-form-label">Age</label>
                                            <div class="col-sm-9">
                                                <input type="number" name="age" class="form-control" id="lname" value="{{$user->age}}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                @section('js')
                    @endsection

            <footer class="footer text-center">
                All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
            </footer>
        </div>
        </div>
    </div>

    @endsection