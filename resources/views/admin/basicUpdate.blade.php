@extends('admin.admin_master')

@section('admin')
<div class="content-wrapper p-5">
    <!-- Content Header (Page header) -->
    <div>
        <h2>Basic Amount</h2>
    </div>

    <form method="POST" action="/admin/basic/update/{{$user->id}}" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center mb-4 mt-4">Update Member</h2>
        <div class="container">

            
            {{--Booking Money  --}}
        <div class="row mt-3" style="background: #6fbbd3; border-radius: 5px;">
            <div class="col-12">
                <div class="row " >
                    <div class="col-12">
                        <h3 class="text-center py-3 text-bold">Booking Status</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label>Booking Money Total</label>
                            <input type="text" name="booking_money" value="{{ $user->booking_money }}" id="booking-money" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label>Booking Money Paid</label>
                            <input type="text" name="booking_money_paid" value="0" id="booking-money-paid" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label>Booking Money Paid Date</label>
                            <input type="date" name="booking-money-paid-date" value="{{ $user->booking_money_paid_date }}" id="booking-money-paid-date" class="form-control">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label>Booking Money Due Date</label>
                            <input type="date" name="booking-money-due-date" value="{{ $user->booking_money_due_date }}"  id="booking-money-due-date" class="form-control">
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label>Booking Money Payment Type </label>
                            <select name="payment-booking-money" id="" class="form-control">
                                <option value="Check" <?php if($user->payment_booking_money=="Check") echo 'selected="selected"'; ?> >Check</option>
                                <option value="Bank" <?php if($user->payment_booking_money=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                                <option value="Cash" <?php if($user->payment_booking_money=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="form-group mb-3">
                            <label>Booking Money Note</label>
                            <textarea rows="3" cols="50" type="text" name="booking-money-note" class="form-control" > {{ $user->booking_money_note }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div> 


            {{-- Down Payment --}}
            <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-center text-bold py-3">Down Payment Status</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Down Payment Total</label>
                                <input type="text" name="down_payment" value="{{ $user->down_payment }}" id="down-payment" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Down Payment Paid</label>
                                <input type="text" name="down_payment_paid" value="0" id="down-payment-paid" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Down Payment Paid Date</label>
                                <input type="date" name="down-payment-paid-date" value="{{ $user->down_payment_paid_date }}" id="down-payment-paid-date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Down Payment Due Date</label>
                                <input type="date" name="down-payment-due-date" value="{{ $user->down_payment_due_date }}" id="down-payment-due-date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Down Payment Payment Type </label>               
                                <select name="payment-down-payment" id="" class="form-control">
                                    <option value="Check" <?php if($user->payment_down_payment=="Check") echo 'selected="selected"'; ?> >Check</option>
                                    <option value="Bank" <?php if($user->payment_down_payment=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                                    <option value="Cash" <?php if($user->payment_down_payment=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Down Payment Note</label>
                                <textarea rows="3" cols="50" type="text" name="down-payment-note" class="form-control">{{ $user->down_payment_note }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           

           

            {{-- Down Payment --}}


            {{-- Car Parking --}}
            <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                <div class="col-12">
                    <div class="row" >
                        <div class="col-12">
                            <h3 class="text-center py-3 text-bold ">Car parking  Status</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Car Parking Total</label>
                                    <input type="text" name="car_parking" value="{{ $user->car_parking }}" id="car-parking" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Car Parking Paid</label>
                                    <input type="text" name="car_parking_paid" value="0" id="car-parking-paid" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Car Parking Paid Date</label>
                                    <input type="date" name="car-parking-paid-date" value="{{ $user->car_parking_paid_date }}" id="car-parking-paid-date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Car Parking Due Date</label>
                                    <input type="date" name="car-parking-due-date" value="{{ $user->car_parking_due_date }}" id="car-parking-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Car Parking Payment Type </label>
                                    {{-- <input list="payments" name="payment-car-parking" >
                                    <datalist id="payments">
                                        <option value="Check">
                                        <option value="Bank">
                                        <option value="Cash">
                                    </datalist> --}}
                                    <select name="payment-car-parking" id="" class="form-control">
                                        <option value="Check" <?php if($user->payment_car_parking=="Check") echo 'selected="selected"'; ?> >Check</option>
                                        <option value="Bank" <?php if($user->payment_car_parking=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                                        <option value="Cash" <?php if($user->payment_car_parking=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Car Parking Note</label>
                                    <textarea rows="3" cols="50" type="text" name="car-parking-note" class="form-control">{{ $user->car_parking_note }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          

           {{-- Car Parking --}}


           {{--  Land Filling(1st) --}}
           <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
            <div class="col-12">
                <div class="row" >
                    <div class="col-12">
                        <h3 class="text-center py-3 text-bold ">Land Filling (1st) Status</h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(1st) Total</label>
                                <input type="text" name="land_filling_1" value="{{ $user->land_filling_1 }}" id="land-filling-1" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(1st) Paid</label>
                                <input type="text" name="land_filling_1_paid" value="0" id="land-filling-1-paid" class="form-control">
                                </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(1st) Paid Date</label>
                                <input type="date" name="land-filling-1-paid-date" value="{{ $user->land_filling_1_paid_date }}" id="land-filling-1-paid-date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(1st) Due Date</label>
                                <input type="date" name="land-filling-1-due-date" value="{{ $user->land_filling_1_due_date }}" id="land-filling-1-due-date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(1st) Payment Type </label>
                                {{-- <input list="payments" name="payment-land-1st" >
                                <datalist id="payments">
                                    <option value="Check">
                                    <option value="Bank">
                                    <option value="Cash">
                                </datalist> --}}
                                <select name="payment-land-1st" id="" class="form-control">
                                    <option value="Check" <?php if($user->payment_land_1st=="Check") echo 'selected="selected"'; ?> >Check</option>
                                    <option value="Bank" <?php if($user->payment_land_1st=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                                    <option value="Cash" <?php if($user->payment_land_1st=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(1st) Note</label>
                                <textarea rows="4" cols="50" type="text" name="land-filling-1-note" class="form-control">{{ $user->land_filling_1_note }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--  Land Filling(2nd) --}}
        <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
            <div class="col-12">
                <div class="row" >
                    <div class="col-12">
                        <h3 class="text-center py-3 text-bold ">Land Filling (2nd) Status</h3>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(2nd) Total</label>
                                <input type="text" name="land_filling_2" value="{{ $user->land_filling_2 }}" id="land-filling-2" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(2nd) Paid</label>
                                <input type="text" name="land_filling_2_paid" value="0" id="land-filling-2-paid" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(2nd) Paid Date</label>
                                <input type="date" name="land-filling-2-paid-date" value="{{ $user->land_filling_2_paid_date }}" id="land-filling-2-paid-date" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(2nd) Due Date</label>
                                <input type="date" name="land-filling-2-due-date" value="{{ $user->land_filling_2_due_date }}" id="land-filling-2-due-date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(2nd) Payment Type </label>
               
                                <select id="" name="payment-land-2nd" class="form-control">
                                    <option value="Check" <?php if($user->payment_land_2nd=="Check") echo 'selected="selected"'; ?> >Check</option>
                                    <option value="Bank" <?php if($user->payment_land_2nd=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                                    <option value="Cash" <?php if($user->payment_land_2nd=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group mb-3">
                                <label>Land Filling(2nd) Note</label>
                                <textarea rows="3" cols="50" type="text" name="land-filling-2-note" class="form-control">{{ $user->land_filling_2_note }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>            



            {{-- Building Pilling --}}
            <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                <div class="col-12">
                    <div class="row" >
                        <div class="col-12">
                            <h3 class="text-center py-3 text-bold ">Building Pilling Status</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Total</label>
                                    <input type="text" name="building_pilling" value="{{ $user->building_pilling }}" id="building-pilling" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Paid</label>
                                    <input type="text" name="building_pilling_paid" value="0" id="building-pilling-paid" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Paid Date</label>
                                    <input type="date" name="building-pilling-paid-date" value="{{ $user->building_pilling_paid_date }}" id="building-pilling-paid-date" class="form-control">
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Due Date</label>
                                    <input type="date" name="building-pilling-due-date" value="{{ $user->building_pilling_due_date }}" id="building-pilling-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Payment Type </label>
                                    {{-- <input list="payments" name="payment-building-pilling" >
                                    <datalist id="payments">
                                        <option value="Check">
                                        <option value="Bank">
                                        <option value="Cash">
                                    </datalist> --}}
                                    <select name="payment-building-pilling" id="" class="form-control">
                                        <option value="Check" <?php if($user->payment_building_pilling=="Check") echo 'selected="selected"'; ?> >Check</option>
                                        <option value="Bank" <?php if($user->payment_building_pilling=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                                        <option value="Cash" <?php if($user->payment_building_pilling=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Note</label>
                                    <textarea rows="3" cols="50" type="text" name="building-pilling-note" class="form-control">{{ $user->building_pilling_note }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            
             {{-- Building Pilling --}}



            {{-- 1st floor Roof Casting --}}
            <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                <div class="col-12">
                    <div class="row" >
                        <div class="col-12">
                            <h3 class="text-center py-3 text-bold ">1st Floor Roof Casting Status</h3>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Total</label>
                                    <input type="text" value="{{ $user->first_roof_casting}}" name="roof_casting" id="roof-casting" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Paid</label>
                                    <input type="text" value="0" name="roof_casting_paid" id="roof-casting-paid" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Paid Date</label>
                                    <input type="date" name="roof-casting-paid-date" value="{{ $user->first_roof_paid_date }}" id="roof-casting-paid-date" class="form-control">
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Due Date</label>
                                    <input type="date" name="roof-casting-due-date" value="{{ $user->first_roof_due_date }}" id="roof-casting-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Payment Type </label>

                                    <select name="payment-1st-floor-roof-casting" id="" class="form-control">
                                        <option value="Check" <?php if($user->payment_1st_floor_roof_casting=="Check") echo 'selected="selected"'; ?> >Check</option>
                                        <option value="Bank" <?php if($user->payment_1st_floor_roof_casting=="Bank") echo 'selected="selected"'; ?> >Bank</option>
                                        <option value="Cash" <?php if($user->payment_1st_floor_roof_casting=="Cash") echo 'selected="selected"'; ?> >Cash</option>
                                    </select>
                
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Note</label>
                                    <textarea rows="3" cols="50" type="text" name="roof-casting-note" class="form-control">{{ $user->roof_casting_note }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    

            {{-- 1st floor Roof Casting --}}



            <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                <div class="col-12">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>Finishing Work Total</label>
                                    <input type="text" name="finishing_work" value="{{ $user->finishing_work }}" id="finishing-work" class="form-control">
                                </div>
                            </div>  
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>After Handover Money Total</label>
                                    <input type="text" name="after_handover_money" value="{{ $user->after_handover_money }}" id="after-handover-money" class="form-control">
                                </div>
                            </div>                         
                        </div>
                    </div>
                </div>
            </div>               
            {{--  --}}
            {{-- <div class="form-group mb-3">
              <label>After Handover Money Paid</label>
              <input type="text" name="after_handover_money_paid" value="" id="after-handover-money-paid" class="form-control">
          </div> --}}
            {{-- <div class="form-group mb-3">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div> --}}
            <div class="row text-center mt-4">
                <div class="col-lg-4 offset-lg-4" >
                    <button type="submit" class="btn mb-3 text-black btn-block text-bold" style="background-color:#64e764;">Submit</button>
                </div>
            </div>
        </div>
    </form>
    
    <!-- /.content --> 
</div>
@endsection
