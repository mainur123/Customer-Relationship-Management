@extends('admin.admin_master')

@section('admin')



    <div class="content-wrapper px-3">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Member</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Add Member</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div >

            <form method="POST" action="/admin/store" enctype="multipart/form-data">
                @csrf

                <div class="row" style="background-color: #90ee90; border-radius: 5px;">
                    <div class="col-12 card-body">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-bold py-3 text-black">Personal Information</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4"><div class="form-group mb-3">
                                    <label>File No</label>
                                    <input type="number" name="file-no" id="file-no" class="form-control" required>
                                </div></div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Member Name</label>
                                    <input type="text" name="member-name" id="member-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Father/Husband Name</label>
                                    <input type="text" name="father-or-husband-name" id="father-or-husband-name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Mother Name</label>
                                    <input type="text" name="mother-name" id="mother-name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Mailing Address</label>
                                    <input type="text" name="mailing-address" id="mailing-address" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Permanent Address</label>
                                    <input type="text" name="permanent-address" id="permanent-address" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Mobile Number 1</label>
                                    <input type="tel" name="mobile-no-1" id="mobile-no-1" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Mobile Number 2</label>
                                    <input type="tel" name="mobile-no-2" id="mobile-no-2" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Date of Birth/Age</label>
                                    <input type="date" name="birth-date" id="birth-date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Email Address</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>National ID Number</label>
                                    <input type="text" name="NID" id="NID" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Profession</label>
                                    <input type="text" name="profession" id="profession" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Office Address</label>
                                    <input type="text" name="office-address" id="office-address" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Designation</label>
                                    <input type="text" name="designation" id="designation" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Nominee Name</label>
                                    <input type="text" name="nominee-name" id="nominee-name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Relation With Member</label>
                                    <input type="text" name="relation" id="relation" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Number</label>
                                    <input type="text" name="building-number" id="building-number" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4"></div>
                        </div>

                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>Member Image</label>
                                    <input type="file" name="member_img" id="member-img" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-3">
                                    <label>Nominee Image</label>
                                    <input type="file" name="nominee_img" id="nominee-img" class="form-control">
                                </div>
                            </div>
                            {{-- <div class="col-lg-4"></div> --}}
                        </div>
                    </div>
                </div>

                {{-- Total Amount start--}}
                <div class="row mt-3" style="background: #6fbbd3; border-radius: 5px;">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-bold py-3"> Total Amount Information</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                {{-- Total Amount --}}
                                <div class="form-group mb-3">
                                    <label>Total Amount</label>
                                    <input type="text" name="amount" id="amount" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Total Amount Payment Type </label>
                                    <input list="payments" name="payment-total-amount" class="form-control">
                                    <datalist id="payments">
                                        <option value="Check">
                                        <option value="Bank">
                                        <option value="Cash">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Total Amount Note</label>
                                    <textarea rows="3" cols="50" type="text" name="total-amount-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Total Amount end--}}

                <div class="row mt-3" style="background: #6fbbd3; border-radius: 5px;">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-bold py-3"> Total Amount Information</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Number Of Installment</label>
                                    <input type="text" name="installment-number" id="installment-number" class="form-control">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Total Installment Amount</label>
                                    <input type="text" name="total-installment-amount" id="total-installment" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Description</label>
                                    {{-- <input type="text" name="description"  > --}}
                                    <textarea name="description" id="description" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-group mb-3">
                    <label>Installment Start From</label>
                    <input type="date" name="installment-start" id="installment-start" class="form-control">
                </div>

                {{-- Booking Money Start --}}
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
                                    <label>Booking Money</label>
                                    <input type="text" name="booking-money" id="booking-money" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Booking Money Payment Type </label>
                                    

                                    <select name="payment-booking-money" id="" class="form-control">
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Booking Money Paid</label>
                                    <input type="text" name="booking-money-paid" id="booking-money-paid" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Booking Money Paid Date</label>
                                    <input type="date" name="booking-money-paid-date" id="booking-money-paid-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Booking Money Due Date</label>
                                    <input type="date" name="booking-money-due-date" id="booking-money-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Booking Money Note</label>
                                    <textarea rows="3" cols="50" type="text" name="booking-money-note" class="form-control"></textarea>
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
                                    <label>Down Payment</label>
                                    <input type="text" name="down-payment" id="down-payment" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Down Payment Payment Type </label>
                                    

                                    <select name="payment-down-payment" id="" class="form-control">
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Down Payment Paid</label>
                                    <input type="text" name="down-payment-paid" id="down-payment-paid" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Down Payment Paid Date</label>
                                    <input type="date" name="down-payment-paid-date" id="down-payment-paid-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Down Payment Due Date</label>
                                    <input type="date" name="down-payment-due-date" id="down-payment-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Down Payment Note</label>
                                    <textarea rows="3" cols="50" type="text" name="down-payment-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Down Payment end --}}


                {{-- Car Parking start--}}
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
                                        <label>Car Parking</label>
                                        <input type="text" name="car-parking" id="car-parking" class="form-control">
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
                                            <option value="Check">Check</option>
                                            <option value="Bank">Bank</option>
                                            <option value="Cash">Cash</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label>Car Parking Paid</label>
                                        <input type="text" name="car-parking-paid" id="car-parking-paid" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label>Car Parking Paid Date</label>
                                        <input type="date" name="car-parking-paid-date" id="car-parking-paid-date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label>Car Parking Due Date</label>
                                        <input type="date" name="car-parking-due-date" id="car-parking-due-date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group mb-3">
                                        <label>Car Parking Note</label>
                                        <textarea rows="3" cols="50" type="text" name="car-parking-note" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                {{-- Car Parking end--}}


                {{-- Land filling 1st --}}
                <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                    <div class="col-12 p">
                        <div class="row" >
                            <div class="col-12">
                                <h3 class="text-center py-3 text-bold ">Land Filling (1st)  Status</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(1st)</label>
                                    <input type="text" name="land-filling-1" id="land-filling-1" class="form-control">
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
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(1st) Paid</label>
                                    <input type="text" name="land-filling-1-paid" id="land-filling-1-paid" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(1st) Paid Date</label>
                                    <input type="date" name="land-filling-1-paid-date" id="land-filling-1-paid-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(1st) Due Date</label>
                                    <input type="date" name="land-filling-1-due-date" id="land-filling-1-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(1st) Note</label>
                                    <textarea rows="4" cols="50" type="text" name="land-filling-1-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Land filling 1st end--}}


                {{-- Land filling 2nd start--}}
                <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                    <div class="col-12">
                        <div class="row" >
                            <div class="col-12">
                                <h3 class="text-center py-3 text-bold ">Land Filling (2nd)  Status</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(2nd)</label>
                                    <input type="text" name="land-filling-2" id="land-filling-2" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(2nd) Payment Type </label>
                                    {{-- <input list="payments" name="payment-land-2nd" class="form-control">
                                    <datalist id="payments">
                                        <option value="Check">
                                        <option value="Bank">
                                        <option value="Cash">
                                    </datalist> --}}
                                    <select  id="" name="payment-land-2nd" class="form-control">
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(2nd) Paid</label>
                                    <input type="text" name="land-filling-2-paid" id="land-filling-2-paid" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(2nd) Paid Date</label>
                                    <input type="date" name="land-filling-2-paid-date" id="land-filling-2-paid-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(2nd) Due Date</label>
                                    <input type="date" name="land-filling-2-due-date" id="land-filling-2-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Land Filling(2nd) Note</label>
                                    <textarea rows="3" cols="50" type="text" name="land-filling-2-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Land filling 2nd End--}}


                {{-- Building Pilling --}}
                <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                    <div class="col-12">
                        <div class="row" >
                            <div class="col-12">
                                <h3 class="text-center py-3 text-bold ">Building Pilling  Status</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling</label>
                                    <input type="text" name="building-pilling" id="building-pilling" class="form-control">
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
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Paid</label>
                                    <input type="text" name="building-pilling-paid" id="building-pilling-paid" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Paid Date</label>
                                    <input type="date" name="building-pilling-paid-date" id="building-pilling-paid-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Due Date</label>
                                    <input type="date" name="building-pilling-due-date" id="building-pilling-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Building Pilling Note</label>
                                    <textarea rows="3" cols="50" type="text" name="building-pilling-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Building Pilling end--}}


                {{-- 1st floor Roof Casting start--}}
                <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-bold py-3">1st floor Roof Casting</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting</label>
                                    <input type="text" name="roof-casting" id="roof-casting" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Payment Type </label>
                                    

                                    <select name="payment-1st-floor-roof-casting" id="" class="form-control">
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Paid</label>
                                    <input type="text" name="roof-casting-paid" id="roof-casting-paid" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Paid Date</label>
                                    <input type="date" name="roof-casting-paid-date" id="roof-casting-paid-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Due Date</label>
                                    <input type="date" name="roof-casting-due-date" id="roof-casting-due-date" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>1st floor Roof Casting Note</label>
                                    <textarea rows="3" cols="50" type="text" name="roof-casting-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- 1st floor Roof Casting end--}}

                {{-- Finishing Work start--}}
                <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-bold py-3">Finishing Work Status</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Finishing Work</label>
                                    <input type="text" name="finishing-work" id="finishing-work" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Finishing Work Payment Type </label>
                                    {{-- <input list="payments" name="payment-finishing-work" >
                                     <datalist id="payments">
                                        <option value="Check">
                                        <option value="Bank">
                                        <option value="Cash">
                                    </datalist> --}}
                                    <select name="payment-finishing-work" id="" class="form-control">
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>Finishing Work Paid Date</label>
                                    <input type="date" name="finishing-work-paid-date" id="finishing-work-paid-date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label>Finishing Work Note</label>
                                    <textarea rows="3" cols="50" type="text" name="finishing-work-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- Finishing Work end--}}



                {{--After Handover Money start --}}
                <div class="row mt-3" style="background: #6fbbd3;border-radius: 5px;">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-center text-bold py-3">After Handover Money</h3>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>After Handover Money</label>
                                    <input type="text" name="after-handover-money" id="after-handover-money" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>After Handover Money Payment Type </label>
                                    {{-- <input list="payments" name="payment-after-handover-money" >
                                    <datalist id="payments">
                                        <option value="Check">
                                        <option value="Bank">
                                        <option value="Cash">
                                    </datalist> --}}
                                    <select name="payment-after-handover-money" id="" class="form-control">
                                        <option value="Check">Check</option>
                                        <option value="Bank">Bank</option>
                                        <option value="Cash">Cash</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group mb-3">
                                    <label>After Handover Money Paid Date</label>
                                    <input type="date" name="after-handover-money-paid-date" id="after-handover-money-paid-date" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mb-3">
                                    <label>After Handover Money Note</label>
                                    <textarea rows="3" cols="50" type="text" name="after-handover-money-note" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{--After Handover Money end --}}


                {{--  --}}


                <div class="row my-3" style="background: #6fbbd3; border-radius: 5px;">
                    <div class="col-12 py-3">
                        <div class="form-group mb-3" >
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                    </div>
                </div>
                <div class=" row text-center">
                    <div class="col-lg-4 offset-lg-4" >
                        <button type="submit" class="btn mb-3 text-black btn-block text-bold" style="background-color:#64e764;">Submit</button>
                    </div>
                </div>


            </form>

        </div>
    </div>
@endsection
