<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;


class HomeController extends Controller
{
	public function _construct()
    {
    	$this->middleware('auth');
    }

    //
    function checklogin(Request $request)
    {

    	request()->validate([

            'username' => 'required',
            'password' => 'required',

        ]);

        //$input = $request->all();

        $user_data = array(
	    	'username'  => $request->get('username'),
	    	'password' => $request->get('password')
	    );

	    if(Auth::attempt($user_data))
	    {
	    	//return view('admin.index');
	    	//$user = Auth::user();
	    	return redirect('/admin');
	    }
	    else
	    {
	    	return back()->with('error', 'Wrong login Details');
	    }

    }

    function logout()
    {
     Auth::logout();
     return redirect('/');
    }
}
