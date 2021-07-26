<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Installment;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class InstallmentController extends Controller
{
    public function show()
    {

        return view('admin.create');

    }

    public function showInstallmentData(Request $request){

        $user = DB::table('users')->where('file_no', $request->file_no)->first();
        $ins =  DB::table('installments')->where('user_id', $user->id)->get();
        //dd($ins);
        $time=strtotime($user->installment_start_from);
        $timeformate=date('d-M-Y',$time);

        return view('admin.installment.showInstallmentData')->with(compact('user','ins','timeformate'));
    }

    public function addInstallments(Request $request){

        $user = DB::table('users')->where('file_no', $request->file_no)->first();
        $user_id=$user->id;
        $user_file_table = $user->file_no;
        $user_name_table = $user->member_name;
        $total_amount_table = $user->total_amount;
        $last_installment=$request->installment;

        $current_date= Carbon::today();

        $today=$current_date->toDateString();


        // $due =  DB::table('installments')->where('total_due', $request->file)->get();
        // $due_table = $due->id;


        //INSTALLMENT database part
        $installment = new Installment();
        $installment->user_id = $user_id;
        $installment->installment_amount = $request->installment;
        $installment->installment_date=$today;
        $installment->save();

        $ins =  DB::table('installments')->where('user_id', $user_id)->get();
        $num_ins_table = $ins->count();

        //DUE money calculation
        // $due_money = $user->total_amount - $user->booking_money - $user->car_parking - $user->land_filling_1 - $user->land_filling_2 - $user->first_roof_casting - $user->finishing_work - $user->after_handover_money - $last_installment;


        $data = User::find($user->id);
        $data->due_amount = $data->due_amount- $last_installment;
        $due = $data->due_amount;
        $data->save();

        //return value part
        return view('admin.add')->with(compact('user_file_table','last_installment','user_name_table', 'today', 'total_amount_table','num_ins_table', 'due'));

	}

    // edit installment payment method
    public function edit_payment($id, $no){
        $ins =  DB::table('installments')->where('user_id', $id)->where('installment_no',$no)->first();
         return view('admin.installment.edit_payment',compact('ins'));
    }

  // Update installment payment method
    public function installment_update(Request $request,$id,$no)
    {
        // $ins =  DB::table('installments')->where('user_id', $id)->where('installment_no',$no)->update([
        // 'installment_amount'=> $request->total_payment,
        // 'installment_paid'=> $request->payment_paid ,
        // 'installment_date'=> $request->payment_date ,
        // 'installment_due'=> $request->total_payment - $request->payment_paid ,
        // 'installment_due_date'=> $request->payment_due_date 
        // ]);

        // $ins =  DB::table('installments')->where('user_id', $id)->where('installment_no',$no);
   
        // $ins->installment_amount= $request->total_payment;
        // $ins->installment_paid= $request->payment_paid;
        // $ins->installment_date= $request->payment_date;
        // $ins->installment_due=$request->total_payment-$request->payment_paid;
        // $ins->installment_due_date= $request->payment_due_date;
       // $ins->save();


        // Using Eloquent
        $ins= Installment::select('*')
        ->where('user_id','=', $id)
        ->get();
        //dd($no);
        $ins[$no-1]->installment_paid = $ins[$no-1]->installment_paid +$request->payment_paid;
     
        //$ins[$no-1]->installment_amount= $request->total_payment;
        $ins[$no-1]->installment_date= $request->payment_date;
        $ins[$no-1]->installment_due=$request->total_payment- $ins[$no-1]->installment_paid ;
       
        $ins[$no-1]->installment_due_date= $request->payment_due_date;

        $ins[$no-1]->installment_note= $request->installment_note;
        $ins[$no-1]->payment_installment= $request->payment_installment;
      
        $ins[$no-1]->save();
       

            $notification = array(
                'message' =>  'Installment Payment Update Successfully',
                'alert-type' => 'success'
            );
        return redirect("/admin/member/{$id}")->with($notification);
    
    }


public function installment_payment($id,$no)
{
    $user= user::findorfail($id);
    $payment=$user->total_installment_amount / $user->no_of_installment;
    return view('admin.installment.installment_payment',compact('id','no','payment'));
}

public  function installment_payment_paid(Request $request,$id,$no)
{
    $user= user::findorfail($id);

    $new_ins =  DB::table('installments')->where('user_id', $id)->where('installment_no',$no);
   // dd($new_ins->installment_paid);
    $ins= new installment;

    $ins->installment_no=$no;
    $ins->installment_amount=$request->total_payment;
    $ins->installment_paid=$request->payment_paid;
    $ins->installment_due=$request->total_payment-$request->payment_paid;
    $ins->installment_date=$request->payment_date;
    $ins->installment_due_date=$request->payment_due_date;
    $ins->user_id=$id;
    $ins->installment_note=$request->installment_note;
    $ins->payment_installment=$request->payment_installment;

    $ins->save();
    $notification = array(
        'message' =>  'Installment Payment Add Successfully',
        'alert-type' => 'success'
    );
    return redirect("/admin/member/{$id}")->with($notification);



}

}

