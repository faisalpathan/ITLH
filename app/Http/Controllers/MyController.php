<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyController extends Controller
{
    public function Home()
    {
    	return view('Wireframes.Home');
    }
    public function products()
    {
    	return view('Wireframes.products');
    }
    public function prodetails()
    {
    	return view('Wireframes.prodetails');
    }
    public function checkout()
    {
    	return view('Wireframes.checkout');
    }
    public function orderconfirm()
    {
    	return view('Wireframes.orderconfirm');
    }
    public function signup()
    {
    	return view('Wireframes.signup');
    }
    public function sendpass()
    {
    	return view('Wireframes.sendpass');
    }
    public function resetpass()
    {
    	return view('Wireframes.resetpass');
    }
    public function login()
    {
    	return view('Wireframes.login');
    }
    public function orderhistory()
    {
    	return view('Wireframes.orderhistory');
    }
    public function myprofile()
    {
    	return view('Wireframes.myprofile');
    }
    public function editprofile()
    {
    	return view('Wireframes.editprofile');
    }

}
