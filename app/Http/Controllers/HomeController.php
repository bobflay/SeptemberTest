<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Address;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $users_count = User::count();
        $addresses_count = Address::count();

        $users_per_country = [

        ];
        $users_per_gender = '';

        return view('layout.dashboard',compact('users_count','addresses_count'));
    }
}
