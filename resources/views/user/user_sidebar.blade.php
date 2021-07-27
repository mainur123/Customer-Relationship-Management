<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a style="text-decoration: none;" href="{{route('admin.home')}}" class="brand-link">
        <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Shapla City</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image mt-2">
                <img style="border-radius:50%;" src="{{ asset('Upload_image/' . Auth::user()->profile_photo_path) }}" alt="image" height="150px" width="150px">
            </div>
            <div class="info">
                <a style="text-decoration: none;" href="{{route('admin.home')}}" class="d-block">{{ Auth::user()->member_name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard')?'active':''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                {{--    <li class="nav-header">LABELS</li --}}
                <li class="nav-item">
                    <a href="{{route('user_report')}}" class="nav-link {{request()->is('user/user_report')?'active':''}}">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p class="text">Report</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="{{route('admin.all')}}" class="nav-link {{request()->is('admin/all')?'active':''}}">
                        <i class="nav-icon fas fa-users text-white"></i>
                        <p class="text">All Member</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin.view_admin')}}" class="nav-link {{request()->is('admin/all_admin')?'active':''}}">
                        <i class="nav-icon fas fa-user-tie text-white"></i>
                        <p class="text">All admin</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/basic" class="nav-link {{request()->is('admin/basic')?'active':''}}">
                        <i class="nav-icon far fa-money-bill-alt text-white"></i>
                        <p>Basic Amount</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/installment" class="nav-link {{request()->is('admin/installment')?'active':''}}">
                        <i class="nav-icon far fa-money-bill-alt text-white"></i>
                        <p>Installment</p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-info"></i>
                    <p>Report</p>
                  </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
