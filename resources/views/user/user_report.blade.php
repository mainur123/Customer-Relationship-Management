@extends('user.user_master')
@section('user')
<div class="content-wrapper">
<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight pl-6">
            <i class="fas fa-user mr-1"></i> Welcome <b>{{ Auth::user()->member_name }}</b>
            
        </h2>

    </x-slot> --}}

    <!-- Profile Image -->
    <div style="background-color: rgb(250, 250, 250)" class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <center><img style="border-radius:50%;" src="{{ asset('Upload_image/' . Auth::user()->profile_photo_path) }}" alt="image" height="150px" width="150px"></center>
          </div>

          <h3 style="font-weight: bold; color:rgb(4, 153, 4);" class="profile-username text-center mt-2">{{Auth::user()->member_name}}</h3>

          <p class="text-muted text-center">{{Auth::user()->profession}}</p>

          <table class="col-4 offset-4 border-top" cellpadding="0" cellspacing="0" align="center" width="600"> <!--inspect korle dekhte pabo table center e ache-->
            <tr>
                <td>			
                                                
                <!--Table for input field decoration-->

                <table class="table" cellpadding="15" cellspacing="0" width="100%">																

                                                
                    <tr valign="top">

                        <tr>
                            <td><b>Total Taka</b></td>
                            <td>:</td>
                            <td><div>{{Auth::user()->total_amount}}</div></td>
                        </tr>
                        <tr>
                            <td><b>Paid</b> </td>
                            <td>:</td>
                            <td><div>{{ $paid_amount = Auth::user()->total_amount-Auth::user()->due_amount;}}</div></td>
                        </tr>
                        <tr>
                            <td><b>Due</b> </td>
                            <td>:</td>
                            <td><div>{{ Auth::user()->total_amount- $paid_amount}}</div></td>
                        </tr>
                        <tr>
                            <td><b>File No</b> </td>
                            <td>:</td>
                            <td><div>{{ Auth::user()->file_no }}</div></td>
                        </tr>
                        
                    </tr>
                    
                </table>				
    
                </td>
            </tr>
            
        </table>


        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <div class="card-header">
        <h3 style="color:white; background-color:rgb(114, 114, 114); font-weight:bold;" class="card-title text-center font-weight-bold">User Information</h3>
      </div>

      <div class="py-12">
        <div style="width: 1000px;" class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table style="background-color: rgb(250, 250, 250);" class="table">
                    <thead>
                    <tr><h4 style="color: rgb(172, 100, 6); text-weight:bold;" class="p-3 text-center">Personal Information</h4></tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">File Number</th>                        
                        <td style="padding-left: 5%;">{{ Auth::user()->file_no }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Member Name</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->member_name }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Father Name</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->father_name }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Mother Name</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->mother_name }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Email</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Present Address</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->address }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Parmanent Address</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->permanent_address }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Phone Number 1</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->phone_no_1 }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Phone Number 2</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->phone_no_2 }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Date of Birth</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->date_of_birth }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">NID Number</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->national_id }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Profession</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->profession }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Office Address</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->office_address }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Designation</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->designation }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Nominee Name</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->nominee_name }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Relationship With Memeber</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->relation_with_member }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Building Number</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->building_no }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Total Amount</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->total_amount }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Number of Installment</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->no_of_installment }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Installment Start From</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->installment_start_from }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Description</th>
                        <td style="padding-left: 5%;">{{ Auth::user()->description }}</td>
                    </tr>
                    <tr>
                        <th style="padding-left: 25%;" scope="col">Nominee Image</th>
                        <td style="padding-left: 5%;"><img src="{{ asset('Upload_image/' . Auth::user()->nominee_image) }}" alt="image" height="100px" width="100px"></td>
                    </tr>

                    </thead>


                </table>
            </div>
        </div>
    </div>

    

    


    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                
                <!-- /.card-header -->
                <div class="card-body">
                  <table style="background-color: rgb(250, 250, 250)" id="example2" class="table table-bordered table-hover text-center">
                    <thead>

                        <tr><h4 style="color: rgb(172, 100, 6); font-weight:bold;" class="p-3 text-center">Installment History</h4></tr>
                    <tr>
                      <th><button type="button" class="btn btn-success"> Booking Money Info</button></th>
                      <th><button type="button" class="btn btn-success">Amount</button></th>
                      <th><button type="button" class="btn btn-success">Paid/Due</button></th>
                      <th><button type="button" class="btn btn-success">Payment Type</button></th>
                      <th><button type="button" class="btn btn-success">Paid Date</button></th>
                      <th><button type="button" class="btn btn-success">Due Date</button></th>
                      <th><button type="button" class="btn btn-success">Note</button></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                      <td>Booking Money</td>
                      <td>{{ Auth::user()->booking_money}}</td>
                      <td>Paid : {{ Auth::user()->booking_money_paid}} Due : {{ Auth::user()->booking_money - Auth::user()->booking_money_paid}} </td>
                      <td>{{ Auth::user()->payment_booking_money }}</td>
                      <td>{{ Auth::user()->booking_money_paid_date }}</td>
                      <td>{{ Auth::user()->booking_money_due_date }}</td>
                      <td>{{ Auth::user()->booking_money_note }}</td>
                    </tr>

                    <tr>
                      <td>Down Payment</td>
                      <td>{{ Auth::user()->down_payment}}</td>
                      <td>Paid : {{ Auth::user()->down_payment_paid  }} Due : {{ Auth::user()->down_payment - Auth::user()->down_payment_paid}}</td>
                      <td>{{ Auth::user()->payment_down_payment }}</td>
                      <td>{{ Auth::user()->down_payment_paid_date }}</td>
                      <td>{{ Auth::user()->down_payment_due_date }}</td>
                      <td>{{ Auth::user()->down_payment_note }}</td>
                    </tr>
                    <tr>
                      <td>Car Parking</td>
                      <td>{{ Auth::user()->car_parking}}</td>
                      <td>Paid : {{ Auth::user()->car_parking_paid}} Due : {{ Auth::user()->car_parking - Auth::user()->car_parking_paid}}</td>
                      <td>{{ Auth::user()->payment_car_parking }}</td>
                      <td>{{ Auth::user()->car_parking_paid_date }}</td>
                      <td>{{ Auth::user()->car_parking_due_date }}</td>
                      <td>{{ Auth::user()->car_parking_note }}</td>
                    </tr>

                    <tr>
                      <td>Land Filling (1st)</td>
                      <td>{{ Auth::user()->land_filling_1}}</td>
                      <td>Paid : {{ Auth::user()->land_filling_1_paid}} Due : {{ Auth::user()->land_filling_1 - Auth::user()->land_filling_1_paid}}</td>
                      <td>{{ Auth::user()->payment_land_1st }}</td>
                      <td>{{ Auth::user()->land_filling_1_paid_date }}</td>
                      <td>{{ Auth::user()->land_filling_1_due_date }}</td>
                      <td>{{ Auth::user()->land_filling_1_note }}</td>
                    </tr>

                    <tr>
                      <td>Land Filling (2nd)</td>
                      <td>{{ Auth::user()->land_filling_2}}</td>
                      <td>Paid : {{ Auth::user()->land_filling_2_paid}} Due : {{ Auth::user()->land_filling_2 - Auth::user()->land_filling_2_paid}}</td>
                      <td>{{ Auth::user()->payment_land_2nd }}</td>
                      <td>{{ Auth::user()->land_filling_2_paid_date }}</td>
                      <td>{{ Auth::user()->land_filling_2_due_date }}</td>
                      <td>{{ Auth::user()->land_filling_2_note }}</td>
                    </tr>

                    <tr>
                      <td>Building Pilling</td>
                      <td>{{ Auth::user()->building_pilling}}</td>
                      <td>Paid : {{ Auth::user()->building_pilling_paid}} Due : {{ Auth::user()->building_pilling - Auth::user()->building_pilling_paid}}</td>
                      <td>{{ Auth::user()->payment_building_pilling }}</td>
                      <td>{{ Auth::user()->building_pilling_paid_date }}</td>
                      <td>{{ Auth::user()->building_pilling_due_date }}</td>
                      <td>{{ Auth::user()->building_pilling_note }}</td>
                    </tr>

                    <tr>
                      <td>1st floor Roof Casting</td>
                      <td>{{ Auth::user()->first_roof_casting}}</td>
                      <td>Paid : {{ Auth::user()->first_roof_casting_paid}} Due : {{ Auth::user()->first_roof_casting - Auth::user()->first_roof_casting_paid}}</td>
                      <td>{{ Auth::user()->payment_1st_floor_roof_casting }}</td>
                      <td>{{ Auth::user()->first_roof_paid_date }}</td>
                      <td>{{ Auth::user()->first_roof_due_date }}</td>
                      <td>{{ Auth::user()->roof_casting_note }}</td>
                    </tr>

                    <tr>
                      <td>Finishing Work</td>
                      <td>{{ Auth::user()->finishing_work}}</td>
                      <td>Paid : {{ Auth::user()->finishing_work_paid}} Due : {{ Auth::user()->finishing_work - Auth::user()->finishing_work_paid}}</td>
                      <td>{{ Auth::user()->payment_finishing_work }}</td>
                      <td>{{ Auth::user()->finishing_work_paid_date }}</td>
                      <td></td>
                      <td>{{ Auth::user()->finishing_work_note }}</td>
                    </tr>
                    <tr>
                      <td>After Handover Money</td>
                      <td>{{ Auth::user()->finishing_work}}</td>
                      <td>Paid : {{ Auth::user()->finishing_work_paid}} Due : {{ Auth::user()->finishing_work - Auth::user()->finishing_work_paid}}</td>
                      <td>{{ Auth::user()->payment_after_handover_money }}</td>
                      <td>{{ Auth::user()->after_handover_paid_date }}</td>
                      <td></td>
                      <td>{{ Auth::user()->after_handover_money_note }}</td>
                    </tr>

                    {{-- @foreach ($user->no_of_installment as $item)
                    <tr>
                      <td>Installment {{ $loop->index+1 }}</td>
                      <td>{{ $user->total_installment_amount / $user->no_of_installment }} </td>
                      <td>Paid : 0 Due : 0</td>
                      <td> Cash </td>
                      <td> 01/01/2021 </td>
                      <td> 01/01/2021 </td>
                      <td> this is note </td>
                    </tr>

                    @endforeach --}}

                  @for ($i = 0; $i <  Auth::user()->no_of_installment; $i++)
                    <tr>
                      <td>Installment {{ $i+1 }}</td>
                      <td>{{ Auth::user()->total_installment_amount / Auth::user()->no_of_installment }} </td>
                        @if(isset($installments[$i]))
                                   {{-- total installment amount --}}
                            <td>Paid :{{ $installments[$i]->installment_paid }}  Due : {{ $installments[$i]->installment_due }}</td>
                            <td> Cash </td>
                            <td> {{ $installments[$i]->installment_date }} </td>
                            <td> {{ $installments[$i]->installment_due_date }} </td>
                            <td> {{$installments[$i]->installment_note}} </td>

                        @else
                        <td>Paid :0  Due : 0</td>
                        <td> Cash </td>
                        <td> {{date('d-m-Y', strtotime("+$i months", strtotime($timeformate)))}} </td>
                        <td> {{date('d-m-Y', strtotime("+$i months", strtotime($timeformate)))}} </td>

                        @endif                      
    
                    </tr>
                  @endfor


                    </tbody>

                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->


    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <table style="background-color: rgb(250, 250, 250)" class="table">
                    <thead>
                    <tr><h4 style="color: rgb(132, 139, 167); font-weight:bold;" class="p-3 text-center">Payment History</h4></tr>
                    <tr>
                        <th scope="col">Total Amount</th>
                        <td>{{ Auth::user()->total_amount }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Number of Installment</th>
                        <td>{{ Auth::user()->no_of_installment }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Installment Start From</th>
                        <td>{{ Auth::user()->installment_start_from }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Description</th>
                        <td>{{ Auth::user()->description }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Nominee Image</th>
                        <td><img src="{{ asset('Upload_image/' . Auth::user()->nominee_image) }}" alt="image" height="100px" width="100px"></td>
                    </tr>
                    <tr>
                        <th scope="col">Email Verified At</th>
                        <td>{{ Auth::user()->email_verified_at }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Booking Money</th>
                        <td>{{ Auth::user()->booking_money }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Down Payment</th>
                        <td>{{ Auth::user()->down_payment }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Car Parking</th>
                        <td>{{ Auth::user()->car_parking }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Land Filling 1</th>
                        <td>{{ Auth::user()->land_filling_1 }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Land Filling 2</th>
                        <td>{{ Auth::user()->land_filling_2 }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Building Pilling</th>
                        <td>{{ Auth::user()->building_pilling }}</td>
                    </tr>
                    <tr>
                        <th scope="col">First Roof Casting</th>
                        <td>{{ Auth::user()->first_roof_casting }}</td>
                    </tr>
                    <tr>
                        <th scope="col">Finishing Work</th>
                        <td>{{ Auth::user()->finishing_work }}</td>
                    </tr>
                    <tr>
                        <th scope="col">After Handover money</th>
                        <td>{{ Auth::user()->after_handover_money }}</td>
                    </tr>

                    </thead>


                </table>
            </div>
        </div>
    </div> --}}

</x-app-layout>

<script src="https://kit.fontawesome.com/36feb9c31d.js" crossorigin="anonymous"></script>
</div>
@endsection