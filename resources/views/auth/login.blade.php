@include('admin.body.admin_header')

<center class="mt-5">
    <div class="login-box">
        <div class="login-logo">
            <b>Excel</b>IT</a>
            
        </div>
        <!-- /.login-logo -->
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body login-card-body">
                <p style="font-size: 23px" class="login-box-msg">User</p>



                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="file_no" class="form-control block w-full" placeholder="File Number" type="text" name="file_no" :value="old('file_no')" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-file"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control block w-full" placeholder="Password" id="password" name="password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row text-left">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="admin/login">
                                {{ __('Admin Login') }}
                            </a>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

</center>

<!-- jQuery -->
@include('admin.body.resource_footer')
