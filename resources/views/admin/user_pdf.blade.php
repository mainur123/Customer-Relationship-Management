<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Generate Pdf</title>

    <style>
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
            @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap');

            body {
                font-family: 'Source Sans Pro', sans-serif !important;
                font-size: 16px !important;
                line-height: 1.6 !important;
            }

            table {
                border: 0px !important;
            }

            table tr {
                border: 1px solid #C9CACC !important;
            }

            table tr th,
            table tr td {

                padding: 10px !important;
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
            }
        }

        @media print {}

    </style>
</head>

<body>

    <table cellpadding="0" cellspacing="0" border="0" align="center" width="90%" style="border: 0px;">
        <tr>
            <td style="border: 0px !important; padding: 0px;">

                <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border: 0px !important;">
                    <tr>

                        <td width="50%" style="border: 0px !important;">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border: 0px; padding-right: 20px">
                                <tr>
                                    <td style="border: 0px !important">
                                        <p>Applicant's Photo:</p>

                                    </td>
                                    <td height="150" width="100" style="border: 0px;border-radius: 50px;overflow: hidden;">
                                        <p style="height: 100px; width: 100px !important;float: right;">
                                            <img src="<?php echo $pic;?>" alt="" style="height:100%;width:100%;">
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="50%" style="border: 0px !important">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border: 0px; margin-left: 20px">
                                <tr>
                                    <td style="border: 0px !important">
                                        <p>Applicant's Photo1:</p>

                                    </td>
                                    <td height="150" width="100" style="border: 0;border-radius: 50px;overflow: hidden;">
                                        <p style="height: 100px; width: 100px !important;float: right;">
                                            <img src="<?php echo $pic2;?>" alt="" style="height:100%;width:100%;">
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>

            </td>
        </tr>
        <tr>
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
{{--                    <tr>--}}
{{--                        <td>Fax:</td>--}}
{{--                        <td>-</td>--}}
{{--                    </tr>--}}
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

                    {{-- <tr>
                        <td>Installment 1:</td>
                        <td>{{$ins->installment_amount}}</td>
                    </tr> --}}

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
                            <h3 style="color: red;">Total Due: {{$user->due_amount}}</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>Total Amount :</td>
                        <td style="background: red; color: #fff;border: 0"> {{$user->total_amount}}</td>
                    </tr>

                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: 0px; border: 0px;" width="100%">
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style="border: 0px;">
                    <tr>
                        <td style="border: 0px;padding: 0px;" width="50%">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                                <tr>
                                    <td style="border-left: 0px;">Building No</td>
                                    <td style="border-left: 0px;">{{$user->building_no}}</td>
                                </tr>
                                <tr>
                                    <td style="border-left: 0px;">Client Name</td>
                                    <td style="border-left: 0px;">-</td>
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
                                    <td style="border-left: 0px;">{{$user-> land_filling_1}}</td>
                                </tr>
                                <tr>
                                    <td style="border-left: 0px;">Land Filling 2</td>
                                    <td style="border-left: 0px;">{{$user-> land_filling_2}}</td>
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
                        <td style="border: 0px;padding: 0px;" width="50%">
                            <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%">
                                <tr>
                                    <td style="border-left:0px;"><b>Total Paid :</b></td>
                                    <td>-</td>

                                </tr>
                                <tr>
                                    <td style="border-left:0px;">Current Date Due</td>
                                    <td>-</td>

                                </tr>
                                <tr>
                                    <td style="border-left:0px;"><b>Date</b></td>
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
                                    <td style="border-left:0px;">1st Floor Roof Date </td>
                                    <td>{{$user->first_roof_paid_date}}</td>

                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="padding: 0px;">
                <table cellpadding="0" cellspacing="0" border="0" align="center" width="100%" style=" margin-top: 30px;">
                    <tr>
                        <th colspan="2"><h2 style="text-align: center; padding: 0;">Installment History</h2></th>
                    </tr>

                    <tr>
                        <td><b style="padding: 0px;">Amount </b></td>
                        <td><b style="padding: 0px;">Date</b></td>
                    </tr>
                    @foreach ($ins as $installment)
                        <tr>
                            <td style="padding: 0px;">
                                <table cellpadding="0" cellspacing="0" border="0" align="left" width="100%" style="font-size: 14px;">
                                    <tr>
                                        <td style="border:0px;">Installment Money {{$installment->installment_no}} : {{ $installment->installment_amount }} </td>
                                        <td style="border:0px;">Paid: {{$installment->installment_paid}} Due:{{$installment->installment_due}}</td> 
                                          
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

</body>

</html>
