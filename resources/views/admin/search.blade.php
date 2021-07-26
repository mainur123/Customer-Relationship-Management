@extends('admin.admin_master');

@section('admin')
<div class="content-wrapper p-4">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Search View</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Search View</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
        <div class="col-12">
            <div class=" card card-body ">
                @if(isset($all_user))
                    <table class="table table-striped  table-hover">
                        @if (count($all_user) > 0)
                        <tr colspan="3"> <h4>All Admin</h4></tr>
                        <tr class="bg-primary">
                            <th>file.No</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>View</th>
                        </tr>
                        
                        @foreach ($all_user as $data)
                            <tr>
                                <td>{{$data->file_no}}</td>
                                <td>{{$data->member_name}}</td>
                                <td>{{$data->father_name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone_no_1}}</td>
                                <td><a class="btn btn-primary" href="/admin/member/{{$data->id}}"> View Profile</a></td>
                                
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <h3 class="text-danger text-center">No Data Found.</h3>
                            </tr>
                        @endif
                        
                    </table>

                @endif
                {!! $all_user->links('pagination::bootstrap-4') !!} 
                
            </div>
            
        </div>
    </div>
     

</div>


@endsection