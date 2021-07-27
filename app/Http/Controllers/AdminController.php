<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Throwable;
use Session;
use App\Models\Admin;
use App\Models\User;
use App\Models\Installment;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Pipeline;
use App\Actions\Fortify\AttemptToAuthenticate;
use Laravel\Fortify\Actions\EnsureLoginIsNotThrottled;
use Laravel\Fortify\Actions\PrepareAuthenticatedSession;
use App\Actions\Fortify\RedirectIfTwoFactorAuthenticatable;
use App\Http\Responses\LoginResponse;
use Laravel\Fortify\Contracts\LoginViewResponse;
use Laravel\Fortify\Contracts\LogoutResponse;
use Laravel\Fortify\Features;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Requests\LoginRequest;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\DB;
use PDF;

class AdminController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\StatefulGuard  $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;

    }

    public function loginForm(){
    	return view('auth.adminlogin', ['guard' => 'admin']);
    }

    /**
     * Show the login view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LoginViewResponse
     */
    public function create(Request $request): LoginViewResponse
    {
        return app(LoginViewResponse::class);
    }

    public function postLogin(Request $request)
    {
        $validatedData = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);

        $admin=Admin::where ('email','=',$request->email)->first();
        if($admin){
            if (Hash::check($request->password, $admin->password)) {
                // Success
                return redirect('admin/dashboard');
            }

    }
        else{
        return back()->with('fail','No such email exist');
        }

    }

    /**
     * Attempt to authenticate a new session.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return mixed
     */
    public function store(LoginRequest $request)
    {
        return $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
        });
    }

    /**
     * Get the authentication pipeline instance.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Pipeline\Pipeline
     */
    protected function loginPipeline(LoginRequest $request)
    {
        if (Fortify::$authenticateThroughCallback) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                call_user_func(Fortify::$authenticateThroughCallback, $request)
            ));
        }

        if (is_array(config('fortify.pipelines.login'))) {
            return (new Pipeline(app()))->send($request)->through(array_filter(
                config('fortify.pipelines.login')
            ));
        }

        return (new Pipeline(app()))->send($request)->through(array_filter([
            config('fortify.limiters.login') ? null : EnsureLoginIsNotThrottled::class,
            Features::enabled(Features::twoFactorAuthentication()) ? RedirectIfTwoFactorAuthenticatable::class : null,
            AttemptToAuthenticate::class,
            PrepareAuthenticatedSession::class,
        ]));
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);
    }


    public function all_member()
    {
        $user = user::orderBy('id','DESC')->get();

        return view('admin.all_member',compact('user'));
    }


    public function add(Request $request)
    {
        $add_user = new User;
        $add_user->file_no=$request->get('file-no');
        $add_user->member_name=$request->get('member-name');
        $add_user->father_name=$request->get('father-or-husband-name');
        $add_user->mother_name=$request->get('mother-name');
        $add_user->address=$request->get('mailing-address');
        $add_user->permanent_address=$request->get('permanent-address');
        $add_user->phone_no_1=$request->get('mobile-no-1');
        $add_user->phone_no_2=$request->get('mobile-no-2');
        $add_user->date_of_birth=$request->get('birth-date');
        $add_user->email=$request->get('email');
        $add_user->national_id=$request->get('NID');
        $add_user->profession=$request->get('profession');
        $add_user->office_address=$request->get('office-address');
        $add_user->designation=$request->get('designation');
        $add_user->nominee_name=$request->get('nominee-name');
        $add_user->relation_with_member=$request->get('relation');
        $add_user->building_no=$request->get('building-number');
        //$add_user->payment=$request->get('payment');
        $add_user->total_amount=$request->get('amount');
        $add_user->no_of_installment=$request->get('installment-number');
        $add_user->installment_start_from=$request->get('installment-start');
        $add_user->description=$request->get('description');
        if($request->hasfile('member_img'))
            {
                $file = $request->file('member_img');
                $extension = $file->getClientOriginalExtension();
                $filename = time().".".$extension;
                $file->move("Upload_image/", $filename);
                $add_user->profile_photo_path = $filename;
            }
        if($request->hasfile('nominee_img'))
            {
                $file = $request->file('nominee_img');
                $extension = $file->getClientOriginalExtension();
                $filename = strtotime("+1 minutes").".".$extension;
                $file->move('Upload_image/', $filename);
                $add_user->nominee_image = $filename;
            }
        $add_user->booking_money=$request->get('booking-money');
        $add_user->booking_money_paid_date=$request->get('booking-money-paid-date');
        $add_user->booking_money_due_date=$request->get('booking-money-due-date');

        $add_user->down_payment=$request->get('down-payment');
        $add_user->down_payment_paid_date=$request->get('down-payment-paid-date');
        $add_user->down_payment_due_date=$request->get('down-payment-due-date');

        $add_user->car_parking=$request->get('car-parking');
        $add_user->car_parking_paid_date=$request->get('car-parking-paid-date');
        $add_user->car_parking_due_date=$request->get('car-parking-due-date');

        $add_user->land_filling_1=$request->get('land-filling-1');
        $add_user->land_filling_1_paid_date=$request->get('land-filling-1-paid-date');
        $add_user->land_filling_1_due_date=$request->get('land-filling-1-due-date');

        $add_user->land_filling_2=$request->get('land-filling-2');
        $add_user->land_filling_2_paid_date=$request->get('land-filling-2-paid-date');
        $add_user->land_filling_2_due_date=$request->get('land-filling-2-due-date');

        $add_user->building_pilling=$request->get('building-pilling');
        $add_user->building_pilling_paid_date=$request->get('building-pilling-paid-date');
        $add_user->building_pilling_due_date=$request->get('building-pilling-due-date');

        $add_user->first_roof_casting=$request->get('roof-casting');
        $add_user->first_roof_paid_date=$request->get('roof-casting-paid-date');
        $add_user->first_roof_due_date=$request->get('roof-casting-due-date');

        $add_user->finishing_work=$request->get('finishing-work');
        $add_user->after_handover_money=$request->get('after-handover-money');

        $add_user->finishing_work_paid_date=$request->get('finishing-work-paid-date');
        $add_user->after_handover_paid_date=$request->get('after-handover-money-paid-date');

        //paid part

        $add_user->booking_money_paid=$request->get('booking-money-paid');
        $add_user->down_payment_paid=$request->get('down-payment-paid');
        $add_user->car_parking_paid=$request->get('car-parking-paid');
        $add_user->land_filling_1_paid=$request->get('land-filling-1-paid');
        $add_user->land_filling_2_paid=$request->get('land-filling-2-paid');
        $add_user->building_pilling_paid=$request->get('building-pilling-paid');
        $add_user->first_roof_casting_paid=$request->get('roof-casting-paid');
        //$add_user->finishing_work_paid=$request->get('finishing-work-paid');
        //$add_user->after_handover_money_paid=$request->get('after-handover-money-paid');

        //Payment
        $add_user->payment_total_amount=$request->get('payment-total-amount');
        $add_user->payment_booking_money=$request->get('payment-booking-money');
        $add_user->payment_down_payment=$request->get('payment-down-payment');
        $add_user->payment_car_parking=$request->get('payment-car-parking');
        $add_user->payment_land_1st=$request->get('payment-land-1st');
        $add_user->payment_land_2nd=$request->get('payment-land-2nd');
        $add_user->payment_building_pilling=$request->get('payment-building-pilling');
        $add_user->payment_1st_floor_roof_casting=$request->get('payment-1st-floor-roof-casting');
        $add_user->payment_finishing_work=$request->get('payment-finishing-work');
        $add_user->payment_after_handover_money=$request->get('payment-after-handover-money');


      $add_user->total_installment_amount=$request->get('total-installment-amount');


        //Note
        $add_user->total_amount_note=$request->get('total-amount-note');
        $add_user->booking_money_note=$request->get('booking-money-note');
        $add_user->down_payment_note=$request->get('down-payment-note');
        $add_user->car_parking_note=$request->get('car-parking-note');
        $add_user->land_filling_1_note=$request->get('land-filling-1-note');
        $add_user->land_filling_2_note=$request->get('land-filling-2-note');
        $add_user->building_pilling_note=$request->get('building-pilling-note');
        $add_user->roof_casting_note=$request->get('roof-casting-note');
        $add_user->finishing_work_note=$request->get('finishing-work-note');
        $add_user->after_handover_money_note=$request->get('after-handover-money-note');


       // $add_user->note=$request->get('note');
       // dd($request->get('note'));
        $add_user->password=Hash::make($request->get('password'));

        echo "<h1>Data Inserted Successfully<h1>";

        //Initial DUE amount adding
        $due_money = $request->get('amount') - $request->get('booking-money-paid') - $request->get('car-parking-paid') - $request->get('down-payment-paid') - $request->get('land-filling-1-paid') - $request->get('land-filling-2-paid') - $request->get('building-pilling-paid') - $request->get('roof-casting-paid') - $request->get('finishing-work') - $request->get('after-handover-money');

        //saving intial due to the database
        $add_user->due_amount=$due_money;

        $add_user->save();

        $notification = array(
            'message' =>  'Member Add Successfully',
            'alert-type' => 'success'
        );
        return redirect("/admin/member/{$add_user->id}")->with($notification);

    }

    //Dash board calculation
    public function dashBoardCal(){
        //Total user sum
        $usersCount = DB::table('users')->count();

        //Total user amount sum
        $allTotalAmount = DB::table('users')
        ->select('total_amount')
        ->get();

        //Total user due sum
        $allDueAmount = DB::table('users')
        ->select('due_amount')
        ->get();


        //dd($usersCount);
        return view('admin.index',
        [
            'usersCount' => $usersCount,
            'allTotalAmount'=> $allTotalAmount->sum('total_amount'),
            'allDueAmount' => $allDueAmount->sum('due_amount')
        ]);

        return view('admin.index');
    }

    public function UserDashBoardCal(){
        //Total user sum
        $usersCount = DB::table('users')->count();

        //Total user amount sum
        $allTotalAmount = DB::table('users')
        ->select('total_amount')
        ->get();

        //Total user due sum
        $allDueAmount = DB::table('users')
        ->select('due_amount')
        ->get();


        //dd($usersCount);
        return view('dashboard',
        [
            'usersCount' => $usersCount,
            'allTotalAmount'=> $allTotalAmount->sum('total_amount'),
            'allDueAmount' => $allDueAmount->sum('due_amount')
        ]);

        return view('dashboard');
    }

    public function new(){
        return view('admin.index');
    }

    public function profile($id)
    {
        $user= user::find($id);

        $ins =  DB::table('installments')->where('user_id', $user->id)->get();
        $time=strtotime($user->installment_start_from);
        $timeformate=date('d-M-Y',$time);
        //dd($ins);

        //Total Paid Money including installment
        $paid_amount = $user->booking_money_paid +$user->down_payment_paid+$user->car_parking_paid+$user->land_filling_1_paid+$user->land_filling_2_paid+$user->building_pilling_paid+$user->first_roof_casting_paid+$user->finishing_work_paid+$user->after_handover_money_paid;

        //finding installment paid money from installment table


        foreach ($ins as $installment)
        {
            $paid_amount+=$installment->installment_paid;
        }


        return view('admin.admin_member_profile',compact('user', 'paid_amount', 'ins','timeformate'));
    }

    public function update_member(Request $request,$id)
    {

        $add_user=User::find($id);

        $add_user->member_name=$request->member_name;
        $add_user->father_name=$request->father_name;
        $add_user->mother_name=$request->mother_name;
        $add_user->address=$request->mailing_address;
        $add_user->permanent_address=$request->permanent_address;
        $add_user->phone_no_1=$request->mobile_1;
        $add_user->phone_no_2=$request->mobile_2;
        $add_user->date_of_birth=$request->birth_date;
        $add_user->email=$request->email;
        $add_user->national_id=$request->NID;
        $add_user->profession=$request->profession;
        $add_user->office_address=$request->office_address;
        $add_user->designation=$request->designation;
        $add_user->nominee_name=$request->nominee_name;
        $add_user->relation_with_member=$request->relation;
        $add_user->building_no=$request->building_number;
        $add_user->no_of_installment=$request->installment_number;
        $add_user->total_installment_amount=$request->total_installment_amount;
        $add_user->installment_start_from=$request->installment_start;
        $add_user->description=$request->description;
        if($request->hasfile('member_img'))
            {
                $file = $request->file('member_img');
                $extension = $file->getClientOriginalExtension();
                $filename = time().".".$extension;
                $file->move("Upload_image/", $filename);
                $add_user->profile_photo_path = $filename;
            }
        if($request->hasfile('nominee_img'))
            {
                $file = $request->file('nominee_img');
                $extension = $file->getClientOriginalExtension();
                $filename = strtotime("+1 minutes").".".$extension;
                $file->move('Upload_image/', $filename);
                $add_user->nominee_image = $filename;
            }

        //Updation amount calculation starts from here

        $add_user->total_amount=$request->total_amount;
        $add_user->booking_money= $request->booking_money;
        $add_user->down_payment=$request->down_payment;
        $add_user->car_parking=$request->car_parking;
        $add_user->land_filling_1=$request->land_filling_1;
        $add_user->land_filling_2=$request->land_filling_2;
        $add_user->building_pilling=$request->building_pilling;
        $add_user->first_roof_casting=$request->roof_casting;
        $add_user->finishing_work=$request->finishing_work;
        $add_user->after_handover_money=$request->after_handover_money;
        //$add_user->password=Hash::make($request->get('password'));

        //Paid request part
        $add_user->booking_money_paid = $add_user->booking_money_paid + $request->booking_money_paid;
        $add_user->down_payment_paid= $add_user->down_payment_paid + $request->down_payment_paid;
        $add_user->car_parking_paid= $add_user->car_parking_paid + $request->car_parking_paid;
        $add_user->land_filling_1_paid= $add_user->land_filling_1_paid + $request->land_filling_1_paid;
        $add_user->land_filling_2_paid= $add_user->land_filling_2_paid + $request->land_filling_2_paid;
        $add_user->building_pilling_paid= $add_user->building_pilling_paid + $request->building_pilling_paid;
        $add_user->first_roof_casting_paid= $add_user->first_roof_casting_paid + $request->roof_casting_paid;
        //$add_user->finishing_work_paid= $add_user->finishing_work_paid + $request->finishing_work_paid;
       // $add_user->after_handover_money_paid= $add_user->after_handover_money_paid + $request->after_handover_money_paid;

       //Date

        $add_user->booking_money_paid_date=$request->get('booking-money-paid-date');
        $add_user->booking_money_due_date=$request->get('booking-money-due-date');


        $add_user->down_payment_paid_date=$request->get('down-payment-paid-date');
        $add_user->down_payment_due_date=$request->get('down-payment-due-date');


        $add_user->car_parking_paid_date=$request->get('car-parking-paid-date');
        $add_user->car_parking_due_date=$request->get('car-parking-due-date');


        $add_user->land_filling_1_paid_date=$request->get('land-filling-1-paid-date');
        $add_user->land_filling_1_due_date=$request->get('land-filling-1-due-date');


        $add_user->land_filling_2_paid_date=$request->get('land-filling-2-paid-date');
        $add_user->land_filling_2_due_date=$request->get('land-filling-2-due-date');


        $add_user->building_pilling_paid_date=$request->get('building-pilling-paid-date');
        $add_user->building_pilling_due_date=$request->get('building-pilling-due-date');


        $add_user->first_roof_paid_date=$request->get('roof-casting-paid-date');
        $add_user->first_roof_due_date=$request->get('roof-casting-due-date');

        //update due calculation
        $add_user->due_amount = $request->total_amount - $add_user->booking_money_paid - $add_user->down_payment_paid - $add_user->car_parking_paid - $add_user->land_filling_1_paid - $add_user->land_filling_2_paid - $add_user->building_pilling_paid - $add_user->roof_casting_paid - $add_user->finishing_work - $add_user->after_handover_money;

        //dd($add_user->due_amount);
        //dd($new_due);
        //$add_user->due_amount = $add_user->due_amount - $new_due;

        //new calculation


        //dd($user->total_amount);
        //$add_user->due_amount = $due_money;

        $add_user->save();
        $notification = array(
            'message' =>  'Member Update Successfully',
            'alert-type' => 'success'
        );
        echo "<h1>Data Updated Successfully<h1>";
        return redirect("admin/member/{$add_user->id}")->with($notification);

    }

    public function index()
    {
        $admin=Admin::all();
        return view('admin.view_admin',compact('admin'));   
    }

    public function create_new()
    {
        return view('admin.add_admin');
    }

    //for pdf creation
    public function viewPDF($id){
        $user= user::find($id);
        $ins =  DB::table('installments')->where('user_id', $user->id)->get();
        return view('admin.user_view',compact('user','ins'));

    }

    //PDF download function
    public function pdfDownload($id){
        
        $user= user::find($id);
        $ins =  DB::table('installments')->where('user_id', $user->id)->get();
        $path=base_path('public/Upload_image/'.$user->profile_photo_path);
        $type=pathinfo($path, PATHINFO_EXTENSION);
        $data=file_get_contents($path);
        $pic='data:image/'.$type.';base64,'.base64_encode($data);

        $path2=base_path('public/Upload_image/'.$user->nominee_image);
        $type2=pathinfo($path2, PATHINFO_EXTENSION);
        $data2=file_get_contents($path2);
        $pic2='data:image/'.$type2.';base64,'.base64_encode($data2);

        $pdf = PDF::loadView('admin.user_pdf', compact('user','pic','pic2','ins'));

        return $pdf->download('user_pdf.pdf');

    }

    public function store_new(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email'=>'required',
            'password'=>'required',
        ]);

        $request['password'] = bcrypt($request->password);
        $user = admin::create($request->all());

        return redirect(route('admin.view_admin'));
    }

     function edit_admin($id)
     {
         $admin= Admin::find($id);
         return view('admin.edit_admin',compact('admin'));
     }

     function update_admin(Request $request,$id)
     {
        $admin=Admin::find($id);
        $admin->name=$request->name;
        $admin->email=$request->email;

        $admin->save();


        return redirect(route('admin.view_admin'))->with('message','User updated successfully');
     }

    public function delete($id)
    {
        Admin::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function basic(){

        return view('admin.basic');
    }

    public function basicShowDataUpdate(Request $request){

        //$user= User::find($request->file_no);

        $user = DB::table('users')->where('file_no', $request->file_no)->first();
        return view('admin.basicUpdate',compact('user'));
    }
    public function basicUpdate(Request $request,$id){
        $add_user=User::find($id);

        $add_user->booking_money= $request->booking_money;
        $add_user->down_payment=$request->down_payment;
        $add_user->car_parking=$request->car_parking;
        $add_user->land_filling_1=$request->land_filling_1;
        $add_user->land_filling_2=$request->land_filling_2;
        $add_user->building_pilling=$request->building_pilling;
        $add_user->first_roof_casting=$request->roof_casting;
        $add_user->finishing_work=$request->finishing_work;
        $add_user->after_handover_money=$request->after_handover_money;
        //$add_user->password=Hash::make($request->get('password'));

        //Paid request part
        $add_user->booking_money_paid = $add_user->booking_money_paid + $request->booking_money_paid;
        $add_user->down_payment_paid= $add_user->down_payment_paid + $request->down_payment_paid;
        $add_user->car_parking_paid= $add_user->car_parking_paid + $request->car_parking_paid;
        $add_user->land_filling_1_paid= $add_user->land_filling_1_paid + $request->land_filling_1_paid;
        $add_user->land_filling_2_paid= $add_user->land_filling_2_paid + $request->land_filling_2_paid;
        $add_user->building_pilling_paid= $add_user->building_pilling_paid + $request->building_pilling_paid;
        $add_user->first_roof_casting_paid= $add_user->first_roof_casting_paid + $request->roof_casting_paid;
        //$add_user->finishing_work_paid= $add_user->finishing_work_paid + $request->finishing_work_paid;
       // $add_user->after_handover_money_paid= $add_user->after_handover_money_paid + $request->after_handover_money_paid;

       //Date

        $add_user->booking_money_paid_date=$request->get('booking-money-paid-date');
        $add_user->booking_money_due_date=$request->get('booking-money-due-date');


        $add_user->down_payment_paid_date=$request->get('down-payment-paid-date');
        $add_user->down_payment_due_date=$request->get('down-payment-due-date');


        $add_user->car_parking_paid_date=$request->get('car-parking-paid-date');
        $add_user->car_parking_due_date=$request->get('car-parking-due-date');


        $add_user->land_filling_1_paid_date=$request->get('land-filling-1-paid-date');
        $add_user->land_filling_1_due_date=$request->get('land-filling-1-due-date');


        $add_user->land_filling_2_paid_date=$request->get('land-filling-2-paid-date');
        $add_user->land_filling_2_due_date=$request->get('land-filling-2-due-date');


        $add_user->building_pilling_paid_date=$request->get('building-pilling-paid-date');
        $add_user->building_pilling_due_date=$request->get('building-pilling-due-date');


        $add_user->first_roof_paid_date=$request->get('roof-casting-paid-date');
        $add_user->first_roof_due_date=$request->get('roof-casting-due-date');

        //update due calculation
        $add_user->due_amount = $request->total_amount - $add_user->booking_money_paid - $add_user->down_payment_paid - $add_user->car_parking_paid - $add_user->land_filling_1_paid - $add_user->land_filling_2_paid - $add_user->building_pilling_paid - $add_user->roof_casting_paid - $add_user->finishing_work - $add_user->after_handover_money;

        //dd($add_user->due_amount);
        //dd($new_due);
        //$add_user->due_amount = $add_user->due_amount - $new_due;

        //new calculation


        //dd($user->total_amount);
        //$add_user->due_amount = $due_money;

        $add_user->payment_booking_money = $request->get('payment-booking-money');
        $add_user->booking_money_note = $request->get('booking-money-note');

        $add_user->payment_down_payment = $request->get('payment-down-payment');
        $add_user->down_payment_note = $request->get('down-payment-note');

        $add_user->payment_car_parking = $request->get('payment-car-parking');
        $add_user->car_parking_note = $request->get('car-parking-note');

        $add_user->payment_land_1st = $request->get('payment-land-1st');
        $add_user->land_filling_1_note = $request->get('land-filling-1-note');

        $add_user->payment_land_1st = $request->get('payment-land-1st');
        $add_user->land_filling_1_note = $request->get('land-filling-1-note');

        $add_user->payment_land_2nd = $request->get('payment-land-2nd');
        $add_user->land_filling_2_note = $request->get('land-filling-2-note');

        $add_user->payment_building_pilling = $request->get('payment-building-pilling');
        $add_user->building_pilling_note = $request->get('building-pilling-note');

        $add_user->payment_1st_floor_roof_casting = $request->get('payment-1st-floor-roof-casting');
        $add_user->roof_casting_note = $request->get('roof-casting-note');

        $add_user->payment_building_pilling = $request->get('payment-building-pilling');
        $add_user->building_pilling_note = $request->get('building-pilling-note');


        $add_user->save();
        $notification = array(
            'message' =>  'Member Update Successfully',
            'alert-type' => 'success'
        );
        echo "<h1>Data Updated Successfully<h1>";
        return redirect("admin/member/{$add_user->id}")->with($notification);


    }


}

