


@extends('admin.admin_master')

@section('admin')
<div class="content-wrapper p-5">
    <!-- Content Header (Page header) -->
    <h1 style="padding-left: 20px">{{$user->member_name}} Installment Information </h1>

    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>Installment Info</th>
            <th>Amount</th>
            <th>Payment Type</th>
            <th><button type="button" class="btn btn-info">Paid/Due</button></th>
            <th>Paid Date</th>
            <th>Due Date</th>
            <th>Action</th>
            <th>Note</th>
          </tr>
          </thead>
          <tbody>



        @for ($i = 0; $i < $user->no_of_installment; $i++)
          <tr>
            <td>Installment {{ $i+1 }}</td>

            <td>{{ $user->total_installment_amount / $user->no_of_installment }} </td>
              @if(isset($ins[$i]))
                <td> Cash </td>
                <td>Paid :{{$ins[$i]->installment_paid}}  Due : {{$ins[$i]->installment_due}}</td>
                <td> {{$ins[$i]->installment_date}} </td>
                <td> {{$ins[$i]->installment_due_date}} </td>

              @else
                <td> Cash </td>
                <td>Paid :0  Due : 0</td>
                <td> 01/01/2021 </td>
                <td> {{date('d-m-Y', strtotime("+$i months", strtotime($timeformate)))}} </td>              

              @endif
            
            {{-- auto date update --}}
            
            <td>
                @if(isset($ins[$i]))
                  <a class="btn btn-info text-light" href="/admin/edit_payment/{{$user->id}}/{{$i+1}}">edit</a>
                @else
                  <a class="btn btn-dark"href="/admin/payment/{{$user->id}}/{{$i+1}}">Payment</a>
                @endif

                {{-- <a class="btn btn-dark"href="/admin/payment/{{$user->id}}/{{$i+1}}">Payment</a> --}}
            </td>
            
              <td>
                @if(isset($ins[$i]))
                {{$ins[$i]->installment_note}}
                @else
                  
                @endif
              </td> 
            
          </tr>
        @endfor
<a href=""></a>

          </tbody>

        </table>
      </div>
    <!-- /.content -->
  </div>
@endsection

{{-- <td> {{date('d-m-Y', strtotime("+$i months", strtotime($timeformate)))}} </td> --}}