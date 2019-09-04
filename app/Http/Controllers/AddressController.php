<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAddress;

use App\Address;
use App\User;
class AddressController extends Controller
{
    

    public function index()
    {
    	$addresses = Address::paginate(10);
    	return view('addresses.index',compact('addresses'));
    }

    public function view($id)
    {
    	$address = Address::find($id);
    	$user = $address->user;
    	return view('addresses.view',compact('address','user'));
    }


    public function destroy($id)
    {
    	$address = Address::find($id);
    	$address->delete();
    	return redirect('/addresses');
    }

    public function create()
    {
    	$users = User::all();
    	return view('addresses.create',compact('users'));
    }

    public function store(StoreAddress $request)
    {
    	$validated = $request->validated();

    	$address = Address::create([
    		'name'=>$request->name,
    		'floor'=>$request->floor,
    		'building'=>$request->building,
    		'street'=>$request->street,
    		'city'=>$request->city,
    		'region'=>$request->region,
    		'country'=>$request->country,
    		'user_id'=>$request->user_id,
    		'created_by'=>'admin_user'
    	]);

    	return redirect('/addresses');
    }


    public function edit($id)
    {
    	$address= Address::find($id);
    	$users = User::all();
    	return view('addresses.create',compact('address','users'));
    }

    public function update($id, Request $request)
    {
    	$address = Address::find($id);
    	$address->name = $request->name;
    	$address->floor = $request->floor;
    	$address->building = $request->building;
    	$address->street = $request->street;
    	$address->city = $request->city;
    	$address->region = $request->region;
    	$address->country = $request->country;
    	$address->user_id = $request->user_id;
    	$address->modified_by = 'admin_user';
    	$address->save();

    	return redirect('/addresses');
    }

}
