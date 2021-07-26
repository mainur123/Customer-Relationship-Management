@extends('admin.admin_master')

@section('admin')
    <div class="content-wrapper" >
        <h2 style="padding: 10px 0px 0px 20px">Payment</h2>
        <form method="post" action="/admin/installment_payment_submit/{{$id}}/{{$no}}">
            @csrf

            <div class="col-6 ml-3">

                <div class="form-group">
                    <label for="formGroupExampleInput">Amount</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" name="total_payment" value="{{$payment}}"  placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">Paid</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"   name="payment_paid"   placeholder="Example input">
                </div>           
                <div class="form-group">
                    <label for="formGroupExampleInput2">Paid Date</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" name="payment_date"  placeholder="Another input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Due Date</label>
                    <input type="date" class="form-control" id="formGroupExampleInput2" name="payment_due_date"   placeholder="Another input">
                </div>

                <div class="form-group mb-3">
                    <label>Installmet Payment Type </label>
    
                    <select name="payment_installment" id="" class="form-control">
                        <option value="Check">Check</option>
                        <option value="Bank">Bank</option>
                        <option value="Cash">Cash</option>
                    </select>
                </div>   
            
                <div class="form-group mb-3">
                    <label>Installment Note</label>
                    <textarea rows="3" cols="50" type="text" name="installment_note" class="form-control" ></textarea>
                </div>
                <button class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>

@endsection
