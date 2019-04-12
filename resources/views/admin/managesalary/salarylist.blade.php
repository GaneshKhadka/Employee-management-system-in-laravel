@extends('admin.layout.master')

@section('content')

    <div id="main-wrapper">

    @include('admin.includes.sidebar')

        <div class="page-wrapper">

            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Salary Management</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="{{route('managesalary')}}">Manage Salary</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>



            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>


            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-lg btn-dark" href="{{route('managesalary')}}">Back</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lists of employee and their salary lists</h5>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered salarylist">
                                        <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Employee name</th>
                                            <th>Designation type</th>
                                            <th>Working days</th>
                                            <th>Tax %</th>
                                            <th>Gross salary</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{$loop -> index+1 }}</td>
                                                <td>{{$user ->employee_name }}</td>
                                                <td>{{$user ->designation_type }}</td>
                                                <td>{{$user->working_days}}</td>
                                                <td>{{$user->tax}}</td>
                                                <td>{{$user->gross_salary}}</td>
                                                <td>
                                                        {{--<a href="" class="btn btn-sm btn-dark">Edit</a>--}}
                                                        <a href="{{route('managesalary.makepayment')}}" class="btn btn-sm btn-danger">Generate payslip</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    {{--{{ $sallists->links() }}--}}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        $('#zero_config').DataTable( {
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                        } );
                    } );
                </script>

            </div>

            <footer class="footer text-center">
                All Rights Reserved by Khoz Informatics Pvt. Ltd. Designed and Developed by <a href="https://khozinfo.com/">Khozinfo</a>.
            </footer>

        </div>
    </div>

@endsection