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

    <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Manage Salary details</h4>
                    <div class="ml-auto text-right">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('managesalary')}}">Salary details</a></li>
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
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <form action="{{route('managesalary.store')}}" method="post" class="form-horizontal">
                            @csrf
                            <div class="card-body">
                                <h4 class="card-title">Manage salary details</h4>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Employee name</label>
                                    <div class="col-sm-9">
                                        <select type="text" name="employee_name" class="form-control">
                                            <option value="0" disabled {{ old('user') ? '' : 'selected' }}>All</option>
                                            @foreach($users as $user)
                                                {{--<option value="{{$user->all}}" {{ old('user') ? 'selected' : '' }}>{{$user->all()}}</option>--}}
                                                <option value="{{$user->id}}" {{ old('user') ? 'selected' : '' }}>{{$user->username}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                </div>
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-dark">Go</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{--<div class="col-12">--}}
                {{--<div class="card">--}}
                    {{--<div class="card-body">--}}
                        {{--<h5 class="card-title">Employee List</h5>--}}
                        {{--<div class="table-responsive">--}}
                            {{--<table id="zero_config" class="table table-striped table-bordered">--}}
                                {{--<thead>--}}
                                {{--<tr>--}}
                                    {{--<th>S.N.</th>--}}
                                    {{--<th>Employee name</th>--}}
                                    {{--<th>Employee salary</th>--}}
                                    {{--<th>Action</th>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody>--}}
                                {{--@foreach($sals as $sal)--}}
                                    {{--<tr>--}}
                                        {{--<td>{{$loop -> index+1 }}</td>--}}
                                        {{--<td>{{$sal->username}}</td>--}}
                                        {{--<td>{{$sal->salary_amount}}--}}
                                            {{--<form action="#" method="put">--}}
                                                {{--@csrf--}}
                                                {{--@method('DELETE')--}}
                                                {{--<a href="#" class="btn btn-sm btn-dark">Edit</a>--}}
                                                {{--<button type="submit" class="btn btn-sm btn-danger">Delete</button>--}}
                                            {{--</form>--}}
                                        {{--</td>--}}
                                    {{--</tr>--}}
                                {{--</tbody>--}}
                                {{--@endforeach--}}
                            {{--</table>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            <!-- editor -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
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

@endsection