<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//to use the User Model Class
use App\User;
//for Query Builder
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
	public function index(){
		return view('login.index');
	}

	public function verify(Request $request)
    {
    	$un=$request->username;
    	$pw=$request->password;

    	$user=DB::table('login')
				->where('username',$un)
				->where('password',$pw)
				->first();

    	if($user!=null)
    	{
    		$request->session()->put('username',$user->username);

        if ($user->type == 'admin') {
          $request->session()->put('type',1);
          return redirect()->route('admin.index');
        }
        else if ($user->type == 'teacher') {
          $request->session()->put('type',2);
          return redirect()->route('teacher.index');
        }
        else{
          $request->session()->put('type',3);
          return redirect()->route('student.index');
        }
    	}
    	else
    	{
    		$request->session()->flash('logmsg','Invalid User ID or Password');
    		return redirect()->route('login.index');
    	}
    }

}
