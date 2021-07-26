
@extends('admin.admin_master')

@section('admin')
<div class="content-wrapper p-5">
    <!-- Content Header (Page header) -->
    <form method="post" action="/admin/installment/showingData" >
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>File Number</label><br>
                <input type="number"  name="file_no" class="form-control" required>
            </div>
            
            {{-- <div class="form-group col">
                <label>Installment</label><br>
                <input type="number" name="installment" class="form-control"/>
            </div>          --}}
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-info" style="font-size: 0.8em;" value="View" />
        </div>
    </form>
    <!-- /.content --> 
</div>
@endsection

