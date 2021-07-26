
@extends('admin.admin_master')
@section('header_css')
   <style>
       @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap');

       body {
           font-family: 'Montserrat', sans-serif;
           font-size: 16px;
           line-height: 1.6;
       }

       table {
           border: 1px solid #C9CACC;
       }

       table tr td {
           width: 50%;
           padding: 5px 10px;
           border: 1px solid #C9CACC;
           border-right: 0px;
           border-left: 0px;
       }

       @media print {
           body {
               font-family: 'Source Sans Pro', sans-serif !important;
               font-size: 16px !important;
               line-height: 1.6 !important;
           }

           table {
               border: 0px !important;
               width: 95%;
           }
           
           
           table tr {
               border: 1px solid #C9CACC !important;
           }
           
           table tr th,
           table tr td {

               padding: 5px 0px 5px 10px !important;
               border-bottom: 0px !important;
               font-family: 'Source Sans Pro', sans-serif !important;
               
           }
           
          
           table tr td a,
           table tr th,
           table tr td b {
               color: #1F1752 !important;
               font-size: 18px !important;
           }

           table tr td b {
               padding-right: 5px !important;
           }

           .border_none tr td {
               border: 0 !important;
               border-color: #fff !important;
           }
           .br_none{
               border: 0px solid #C9CACC !important ;
           }
           .bg_red{
               color: red !important;
           }
           
           table tr .pl_0{
               padding: 5px 0px 5px 0px !important;
              
           }
       }

       @media print {
           table tr td a {
               display: none;
               height: 0px;
           }
           table tr td{
            border: none !important;
            border-color: #fff !important;
           }

       }

   </style>
@endsection
@section('admin')
  <div class="content-wrapper">
       <!-- Content Header (Page header) -->
       <div class="content-header">
           <div class="container-fluid">
               <div class="row mb-2">
                   <div class="col-sm-6">
                       <h1 class="m-0">View User</h1>
                   </div><!-- /.col -->
                   <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                           <li class="breadcrumb-item"><a href="#">Home</a></li>
                           <li class="breadcrumb-item active">View User</li>
                       </ol>
                   </div><!-- /.col -->
               </div><!-- /.row -->
           </div><!-- /.container-fluid -->
       </div>
       <!-- /.content-header -->
       <!-- Main content -->
       <section class="content">
           <div class="container-fluid">
               <table cellpadding="0" cellspacing="0" border="0" align="center" width="1000" style="border: 0px;" >
                   <tr class="br_none">
                       <td style="border:0px;">
                           <a href="/admin/member/{{$user->id}}/pdf" style="padding: 12px 25px; background: #c82333; font-size:18px;font-width:bold;text-decoration:none; color:#fff; border-radius:10px;margin-top: 10px;">Download PDF</a>
                           <a href="#" onclick="window.print()" style="padding: 12px 25px; background: #007bff; font-size:18px;font-width:bold;text-decoration:none; color:#fff; border-radius:10px;margin-top: 10px;">Print</a>
                       </td>
                   </tr>
               </table>

               <table cellpadding="0" cellspacing="0" border="0" align="center" width="1000" style="border: 0px;">
                   <tr class="br_none">
                       <td style="border: 0px; padding: 0px;">
                           <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border: 0px !important;">
                               <tr class="br_none">

                                   <td width="50%" style="border: 0px !important;">
                                       <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border: 0px; padding-right: 20px">
                                           <tr class="br_none">
                                               <td style="border: 0px !important">
                                                   <p>Applicant's Photo:</p>

                                               </td>
                                               <td height="120" width="120" style="border: 0px">
                                                   <p style="height: 120px; width: 120px !important;float: right;border-radius:50%;overflow:hidden;">
                                                       <img src="{{asset('upload_image/'.$user->profile_photo_path)}}" alt="" style="height:100%;width:100%;">
                                                   </p>
                                               </td>
                                           </tr>
                                       </table>
                                   </td>
                                   <td width="50%" style="border: 0px;">
                                       <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border: 0px; margin-left: 20px">
                                           <tr class="br_none">
                                               <td style="border: 0px !important">
                                                   <p>Nommies's Photo1:</p>

                                               </td>
                                               <td height="120" width="120" style="border: 0px; ">
                                                   <p style="height: 120px; width: 120px !important;float: right;border-radius:50%;overflow:hidden;">
                                                       <img src="{{asset('upload_image/'.$user->nominee_image)}}" alt="" style="height:100%;width:100%;">
                                                   </p>
                                               </td>
                                           </tr>
                                       </table>
                                   </td>

                               </tr>
                           </table>
                       </td>
                   </tr>
                   <tr class="br_none">
                       <td style="border: 0px !important; padding: 0 !important;">
                           <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                               <tr>
                                   <td>File No:</td>
                                   <td>{{$user->file_no}}</td>
                               </tr>
                               <tr>
                                   <td>Applicant Name:</td>
                                   <td>{{$user->member_name}}</td>
                               </tr>
                               <tr>
                                   <td>Father/Husband Name:</td>
                                   <td>{{$user->father_name}}</td>
                               </tr>
                               <tr>
                                   <td>Mother Name:</td>
                                   <td>{{$user->mother_name}}</td>
                               </tr>
                               <tr>
                                   <td>Malling Address:</td>
                                   <td>{{$user->address}}</td>
                               </tr>
                               <tr>
                                   <td>Parment Address:</td>
                                   <td>{{$user->permanent_address}}</td>
                               </tr>
                               <tr>
                                   <td>Mobile No 1:</td>
                                   <td>{{$user->phone_no_1}}</td>
                               </tr>
                               <tr>
                                   <td>Mobile No 2:</td>
                                   <td>{{$user->phone_no_2}}</td>
                               </tr>
                               <tr>
                                   <td>Date of Birth:</td>
                                   <td>{{$user->date_of_birth}}</td>
                               </tr>
                               <tr>
                                   <td>Email:</td>
                                   <td>{{$user->email}}</td>
                               </tr>
                               <tr>
                                   <td>National ID No:</td>
                                   <td>{{$user->national_id}}</td>
                               </tr>
                               <tr>
                                   <td>Profession/Occupassion:</td>
                                   <td>{{$user->profession}}</td>
                               </tr>
                               <tr>
                                   <td>Office Address:</td>
                                   <td>{{$user->office_address}}</td>
                               </tr>
                               <tr>
                                   <td>Designation:</td>
                                   <td>{{$user->designation}}</td>
                               </tr>
                               <tr>
                                   <td>Nominee:</td>
                                   <td>{{$user->nominee_name}}</td>
                               </tr>
                               <tr>
                                   <td>Relation With Applicant:</td>
                                   <td>{{$user->relation_with_member}}</td>
                               </tr>
                               <tr>
                                   <td>Building No:</td>
                                   <td>{{$user->building_no}}</td>
                               </tr>
                               <tr>
                                   <td>Total Amount:</td>
                                   <td>{{$user->total_amount}}</td>
                               </tr>
                               <tr>
                                   <td>No of Installment:</td>
                                   <td>{{$user->no_of_installment}}</td>
                               </tr>

                               <tr>
                                   <td>Installment Start Form:</td>
                                   <td>{{$user->installment_start_from}}</td>
                               </tr>
                               <tr>
                                   <td>Description:</td>
                                   <td>{{$user->description}}</td>
                               </tr>


                               <tr>
                                   <td></td>
                                   <td>
                                       <h3 style="color: red;">Total Due </h3>
                                   </td>
                               </tr>
                               <tr>
                                   <td></td>
                                   <td class="bg_red" style="background: red; color: #fff;border-color: red">{{$user->due_amount}} </td>
                               </tr>
                               <tr class="br_none">
                                   <td style="border: 0px;padding: 0px;" class="pb_0 pl_0">
                                       <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                                           <tr>
                                               <td style="border-left: 0px;" >Building No</td>
                                               <td style="border-left: 0px;">{{$user->building_no}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Client Name</td>
                                               <td style="border-left: 0px;">{{$user->member_name}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Total Amount</td>
                                               <td style="border-left: 0px;">{{$user->total_amount}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Booking Money</td>
                                               <td style="border-left: 0px;">{{$user->booking_money}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Down Payment</td>
                                               <td style="border-left: 0px;">{{$user->down_payment}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Car Parking</td>
                                               <td style="border-left: 0px;">{{$user->car_parking}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Land Filling 1</td>
                                               <td style="border-left: 0px;">{{$user->land_filling_1}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Land Filling 2</td>
                                               <td style="border-left: 0px;">{{$user->land_filling_2}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">Building Pilling </td>
                                               <td style="border-left: 0px;">{{$user->building_pilling}}</td>
                                           </tr>
                                           <tr>
                                               <td style="border-left: 0px;">1st flor Roof Custing: </td>
                                               <td style="border-left: 0px;">{{$user->first_roof_casting}}</td>
                                           </tr>

                                       </table>
                                   </td>
                                   <td style="border: 0px;padding: 0px;" class="pb_0 pl_0">
                                       <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                                           <tr>
                                               <td style="border-left:0px;"><b>Total Paid :</b></td>
                                               <td></td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">Current Date Due</td>
                                               <td>{{$user->due_amount}}</td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;"><b> Paid Date</b></td>
                                               <td></td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">Booking Date:</td>
                                               <td>{{$user->booking_money_paid_date}}</td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">Down Date</td>
                                               <td>{{$user->down_payment_paid_date}}</td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">Car Parking Date</td>
                                               <td>{{$user->car_parking_paid_date}}</td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">Land Filling(1) Date </td>
                                               <td>{{$user->land_filling_1_due_date}}</td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">Land Filling(2) Date </td>
                                               <td>{{$user->land_filling_2_paid_date}}</td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">Building Piling Date </td>
                                               <td>{{$user->building_pilling_paid_date}}</td>

                                           </tr>
                                           <tr>
                                               <td style="border-left:0px;">First Roof  Date</td>
                                               <td>{{$user->first_roof_paid_date}}</td>

                                           </tr>

                                       </table>
                                   </td>
                               </tr>
                           </table>
                       </td>
                   </tr>
                   <tr class="br_none">
                       <td colspan="2" style="padding: 0px; border:none;">
                           <table cellpadding="0" cellspacing="0" border="0" align="center" width="1000" style=" margin-top: 30px; margin-bottom: 10px;">
                               <tr>
                                   <th colspan="2"><h2 style="text-align: center; padding: 20px 0;">Installment History</h2></th>
                               </tr>

                               <tr>
                                   <td><h5>Amount </h5></td>
                                   <td><h5>Date</h5></td>
                               </tr>
                               @foreach ($ins as $installment)
                                   <tr>
                                       <td style="padding: 0px; border: 0px;" >
                                           <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%" >
                                               <tr class="br_none">
                                                   <td>Installment Money {{$installment->installment_no}} : {{ $installment->installment_amount }} </td>
                                                   <td>Paid: {{$installment->installment_paid}} Due:{{$installment->installment_due}}</td> 
                                                     
                                               </tr>
                                           </table>
                                       </td>
                                       <td> Installment Date : {{ $installment->installment_date }}</td>
                                   </tr>
                               @endforeach
                           </table>
                       </td>
                   </tr>
               </table>
           </div>
       </section>
   </div>
  
@endsection 
