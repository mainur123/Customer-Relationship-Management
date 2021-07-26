<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request){
        if(isset($_GET['search'])){
            $query = $_GET['search'];
            //$all_admin= DB::table('admins')->where('name','LIKE','%'.$query.'%')->orWhere('email','LIKE','%'.$query.'%')->get();
            $all_user= DB::table('users')->where('member_name','LIKE','%'.$query.'%')->orWhere('phone_no_1','LIKE','%'.$query.'%')->orWhere('email','LIKE','%'.$query.'%')->orWhere('file_no','LIKE','%'.$query.'%')->paginate(10);
            return view('admin.search',compact('all_user'));
        }else{
            return view('admin.search');
        }
    }
}
