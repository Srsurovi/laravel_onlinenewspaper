<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Auth;


class AdminController extends Controller
{
	public function login(Request $request){
		if($request->isMethod('post')){
			$data=$request->input();
			if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
				//Session::put('adminsession',$data['email']);
				return redirect('/admin/dashboard');
			}
			else{
				/*echo "Fail"; die;*/
				return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
			}
		}
		return view('admin.admin_login');
	}
	public function dashboard(){
		/*if(Session::has('adminsession')){
			//
		}else{
			return redirect('/admin')->with('flash_message_error','Please login to access');
		}*/
		return view('admin.dashboard');
	}

	public function setting(){
		return view('admin.register');

	}

	public function logout(){
		Session::flush();
		return redirect('/admin')->with('flash_message_success','Logged out Successfully');
	}

}
