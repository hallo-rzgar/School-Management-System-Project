@php
$prefix=\Illuminate\Support\Facades\Request::route()->getPrefix();
$route = \Illuminate\Support\Facades\Route::current()->getName();

@endphp
<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-section sidebar-user my-1">
            <div class="sidebar-section-body">
                <div class="media">
                    <a href="#" class="mr-3">
                        <img src="{{asset('global_assets/images/placeholders/placeholder.jpg')}}"
                             class="rounded-circle" alt="">
                    </a>

                    <div class="media-body">
                        <div class="font-weight-semibold">Admin</div>
                        <div class="font-size-sm line-height-sm opacity-50">
                           Dashboard
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <button type="button"
                                class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
                            <i class="icon-transmission"></i>
                        </button>

                        <button type="button"
                                class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
                            <i class="icon-cross2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="sidebar-section">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Main</div>
                    <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link {{($prefix=='/dashboard')?'active':''}}">
                        <i class="icon-home4"></i>
                        <span>
									Dashboard
								</span>
                    </a>
                </li>
                <li class="nav-item nav-item-submenu" >
                    <a href="#" class="nav-link {{($prefix=='users')?'active':''}}"><i class="icon-user"></i> <span>Manage User</span></a>

                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item "><a   href="{{route('user.add')}}"  class="nav-link {{($route=='user.add')?'active':''}}">Add user</a></li>
                        <li class="nav-item"><a href="{{route('user.view')}}"  class="nav-link {{($route=='user.view')?'active':''}}">View user</a></li>
                     </ul>
                </li>
                <!-- /main -->

                <!-- setup -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Setup</div>
                    <i class="icon-menu" title="Forms"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link {{($prefix=='setups')?'active':''}} "><i class="icon-pencil3"></i> <span>Setup Management</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="{{route('student.class.view')}}"  class="nav-link {{($route=='student.class.view')?'active':''}}">Student Class</a></li>
                        <li class="nav-item"><a href="{{route('student.year.view')}}"  class="nav-link {{($route=='student.year.view')?'active':''}}">Student Year</a></li>
                        <li class="nav-item"><a href="{{route('student.group.view')}}"  class="nav-link {{($route=='student.group.view')?'active':''}}">Student Group</a></li>
                        <li class="nav-item"><a href="{{route('student.shift.view')}}"  class="nav-link {{($route=='student.shift.view')?'active':''}}">Student Shift</a></li>
                        <li class="nav-item"><a href="{{route('student.fee_category.view')}}"  class="nav-link {{($route=='student.fee_category.view')?'active':''}}">Student Fee Category</a></li>
                        <li class="nav-item"><a href="{{route('student.amount.view')}}"  class="nav-link {{($route=='student.amount.view')?'active':''}}">Student Fee  Amount</a></li>

                    </ul>
                </li>

                <!-- /setup -->
                <!-- Forms -->
                <li class="nav-item-header">
                    <div class="text-uppercase font-size-xs line-height-xs">Forms</div>
                    <i class="icon-menu" title="Forms"></i></li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>Form components</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Form components">
                        <li class="nav-item"><a href="form_inputs.html" class="nav-link">Basic inputs</a></li>

                    </ul>
                </li>

                <!-- /forms -->





            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>

<!-- Main sidebar -->


