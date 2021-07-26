@extends('admin.admin_master')

@section('admin')
    <div class="content-wrapper" >
        <form method="post" action="/admin/installment_update/{{$ins->user_id}}/{{$ins->installment_no}}">
            @csrf

            <div class="col-6 ml-3">


            <div class="form-group">
                <label for="formGroupExampleInput">Amount</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="total_payment" value="{{$ins->installment_amount}}" placeholder="Example input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Paid</label>
                <input type="text" class="form-control" id="formGroupExampleInput"   name="payment_paid"  value="{{$ins->installment_paid}}" placeholder="Example input">
            </div>
{{--            <div class="form-group">--}}
{{--                <label for="formGroupExampleInput">Due</label>--}}
{{--                <input type="text" class="form-control" id="formGroupExampleInput"  value="{{$ins->installment_due}}" placeholder="Example input">--}}
{{--            </div>--}}
            <div class="form-group">
                <label for="formGroupExampleInput2">Paid Date</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" name="payment_date"  value="{{$ins->installment_date}}" placeholder="Another input">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Due Date</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" name="payment_due_date" value="{{$ins->installment_due_date}}"  placeholder="Another input">
            </div>

            <div class="form-group mb-3">
                <label>Installmet Payment Type </label>

                <select name="payment_installment" id="" class="form-control">
                    {{-- <option value="Check">Check</option>
                    <option value="Bank">Bank</option>
                    <option value="Cash">Cash</option> --}}
                    <option value="Check" <?php if($ins->payment_installment=="Check") echo 'selected="selected"'; ?> >Check</option>
                    <option value="Bank" <?php if($ins->payment_installment=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                    <option value="Cash" <?php if($ins->payment_installment=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                </select>
            </div>
        

        
            <div class="form-group mb-3">
                <label>Installment Note</label>
                <textarea rows="3" cols="50" type="text" name="installment_note" class="form-control" >{{ $ins->installment_note }}</textarea>
            </div>
            <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

@endsection
