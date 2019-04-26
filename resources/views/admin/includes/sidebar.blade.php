<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('dashboard')}}" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>

                @can('isAdmin')
                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('employee')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Employee Management</span></a></li>--}}
                @endcan
                   @can('isAdmin')
                    <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('user')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">User Management</span></a></li>
                {{--<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="{{route('user')}}" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">User Management</span></a>--}}
                    {{--<ul aria-expanded="false" class="collapse  first-level">--}}
                        {{--<li class="sidebar-item"><a href="{{route('user')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> User </span></a></li>--}}
                        {{--<li class="sidebar-item"><a href="{{route('user.create')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Add </span></a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
                @endcan

                @can('isAdmin')
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">System management</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('designation')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Designation </span></a></li>
                        <li class="sidebar-item"><a href="{{route('department')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Department </span></a></li>
                        <li class="sidebar-item"><a href="{{route('salary')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Salary </span></a></li>
                        {{--<li class="sidebar-item"><a href="{{route('city')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> City </span></a></li>--}}
                        {{--<li class="sidebar-item"><a href="{{route('shift')}}" class="sidebar-link"><i class="mdi mdi-note-plus"></i><span class="hide-menu"> Shift </span></a></li>--}}
                    </ul>
                </li>
                @endcan

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Leave management</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        @can('isEmployee')
                        <li class="sidebar-item"><a href="{{route('leave.create')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Apply Leave</span></a></li>
                        @endcan
                        <li class="sidebar-item"><a href="{{route('leave')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Leave list</span></a></li>
                        {{--<li class="sidebar-item"><a href="{{route('total-leave')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Total leave list</span></a></li>--}}
                    </ul>
                </li>

                @can('isAdmin')
                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Payroll management</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        {{--<li class="sidebar-item"><a href="{{route('managesalary')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Manage salary details </span></a></li>--}}
                        <li class="sidebar-item"><a href="{{route('managesalary.salarylist')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Employee salary list</span></a></li>
                        {{--<li class="sidebar-item"><a href="{{route('payroll.list')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Employee salary list </span></a></li>--}}
                        {{--<li class="sidebar-item"><a href="{{route('payroll.payment')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Make payment </span></a></li>--}}
                        {{--<li class="sidebar-item"><a href="{{route('payroll.payslip')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Generate payslip </span></a></li>--}}
                    </ul>
                </li>
                @endcan

                {{--<li class="sidebar-item"><a href="{{route('event')}}" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>--}}
                <li class="sidebar-item"><a href="{{route('calendar')}}" class="sidebar-link"><i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span></a></li>


                {{--<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('download')}}" aria-expanded="false"><i class="mdi mdi-border-inside"></i><span class="hide-menu">Downloads</span></a></li>--}}

                <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Settings</span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item"><a href="{{route('profile')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> My profile </span></a></li>
                        {{--<li class="sidebar-item"><a href="{{route('change.password')}}" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Change Password </span></a></li>--}}
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>