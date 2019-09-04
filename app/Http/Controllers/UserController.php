<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;
use App\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function index()
    {

    	$users = User::paginate(10);

    	return view('users.index',compact('users'));
    }


    public function create()
    {
    	return view('users.create');
    }


    public function store(StoreUser $request)
    {

    	$validated = $request->validated();

    	$date_of_birth = Carbon::parse($request->date_of_birth);

    	$user = User::create([
    		'first_name'=>$request->first_name,
    		'last_name'=>$request->last_name,
    		'email'=>$request->email,
    		'phone_number'=>$request->phone_number,
    		'date_of_birth'=>$date_of_birth,
    		'preferred_contact_method'=>$request->preferred_contact_method,
    		'gender'=>$request->gender,
    		'created_by'=>'admin_user'
    	]);

        return redirect('/users');
    }


    public function view($id)
    {
    	$user = User::find($id);
        $users = User::all();

        $create_from_user = true;
    	return view('users.view',compact('user','users','create_from_user'));
    }

    public function update($id,Request $request)
    {
    	$user = User::find($id);
    	$user->first_name = $request->first_name;
    	$user->last_name = $request->last_name;
    	$user->email = $request->email;
    	$user->phone_number = $request->phone_number;
    	$user->date_of_birth = Carbon::parse($request->date_of_birth);
    	$user->preferred_contact_method = $request->preferred_contact_method;
    	$user->gender = $request->gender;
    	$user->modified_by = 'admin_user';
        $user ->save();

    	return redirect('/users');
    }


    public function destroy($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return $this->index();
    }

    public function edit($id)
    {
    	$user = User::find($id);

    	return view('users.create',compact('user'));
    }
}

