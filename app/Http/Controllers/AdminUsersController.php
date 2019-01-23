<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\UsersAccount;

use Illuminate\Http\Request;
use Validator;
use Redirect;

class AdminUsersController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::findOrFail($id);

        $input = $request->all();
        $user->update($input);


        return redirect('/admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        User::findOrFail($id)->delete();

        return redirect('admin/users');

    }


    /**
 * Show the application dashboard.
 * @return \Illuminate\Http\Response
 */
    public function addusers(Request $request)
    {
        
         request()->validate([

            'firstname' => 'required|min:3|max:50',
            'middlename' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:50',
            'address' => 'required',
            'username' => 'required|min:6|max:30|unique:users',
            'password' => 'required|min:6|max:20',
            'confirm_password' => 'required|min:6|max:20|same:password',

        ]);

        $input = $request->all();
        $user = User::create($input);


         //$id = $user->id;

        //$account=new UsersAccount($input);

        //$account->user_id=$id;
        //$account->username=request()->username;
        //$account->password=bcrypt(request()->password);

        //UsersAccount::create(['user_id'=>$account->user_id,'username'=>$account->username,'password'=>$account->password]);

       // $account->save();

        return back()->with('success', 'User created successfully.');

     }

}
