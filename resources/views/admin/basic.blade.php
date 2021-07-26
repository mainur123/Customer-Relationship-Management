@extends('admin.admin_master')

@section('admin')
<div class="content-wrapper p-5">
    <!-- Content Header (Page header) -->
    <div>
        <h2>Basic Amount</h2>
    </div>
    <form method="get" action="/admin/basic/showingData" >
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>File Number</label><br>
                <input type="number"  name="file_no" class="form-control" required>
            </div>
            
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-info" style="font-size: 0.8em;" value="View" />
        </div>
    </form>
    <!-- /.content --> 
</div>
@endsection
