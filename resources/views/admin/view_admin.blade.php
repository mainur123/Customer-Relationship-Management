@extends('admin.admin_master');

@section('admin')
    <div class="content-wrapper p-4">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Admin</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">All Admin</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <div class="row">
            <div class="col-12">
                <div class="box card card-body">
                    <div class="box-header with-border">
                        <div class="box-body">
                            <div class="box">
                                <div class="card-header px-0">
                                    <h3 class="box-title d-inline-block float-left">Data Table With Full Features</h3>
                                    <a class='col-lg-offset-5 btn btn-success float-right' href="{{ route('admin.create_admin') }}"><i class="fas fa-plus-circle mr-2"></i> Add Admin</a>
                                </div>

                                <!-- /.box-header -->
                                <div class="box-body card card-body">
                                    <table id="example1" class="table table-bordered table-striped" >

                                        <tr class="bg-primary">
                                            <th>S.No</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th >Action</th>
                                        </tr>

                                        @foreach ($admin as $data)
                                            <tr>
                                                <td>{{$data->id}}</td>
                                                <td>{{$data->name}}</td>
                                                <td>{{$data->email}}</td>
                                                <td><a href="/admin/edit_admin/{{$data->id}}"><i class="fas fa-edit text-warning"></i></a>
                                                    <a href="/admin/delete_admin/{{$data->id}}" ><i class="fas fa-trash-alt text-danger"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

{{--        <div class="mx-auto">--}}
{{--         {{$admin->links('layouts.pagination')}}--}}
{{--        </div> --}}
{{--          $admin->links('pagination::bootstrap-4') --}}

    </div>
@endsection
