<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MyController extends Controller
{
    //front end

    public function Home()
    {
    	return view('Frontend.Home');
    }
    public function products()
    {
    	return view('Frontend.products');
    }
    public function prodetails()
    {
    	return view('Frontend.prodetails');
    }
    public function checkout()
    {
    	return view('Frontend.checkout');
    }
    public function orderconfirm()
    {
    	return view('Frontend.orderconfirm');
    }
    public function signup()
    {
    	return view('Frontend.signup');
    }
    public function sendpass()
    {
    	return view('Frontend.sendpass');
    }
    public function resetpass()
    {
    	return view('Frontend.resetpass');
    }
    public function login()
    {
    	return view('Frontend.login');
    }
    public function orderhistory()
    {
    	return view('Frontend.orderhistory');
    }
    public function myprofile()
    {
    	return view('Frontend.myprofile');
    }
    public function editprofile()
    {
    	return view('Frontend.editprofile');
    }
    

    //Backend

    public function dashboard()
    {
        return view('Backend.dashboard');
    } 
    public function orders()
    {
        return view('Backend.orders');
    } 
     public function categories()
    {
        return view('Backend.categories');
    } 
    public function addcategory()
    {
        return view('Backend.addcategory');
    }
    public function editcategory()
    {
        return view('Backend.editcategory');
    }
     public function listattributes()
    {
        return view('Backend.listattributes');
    }
     public function categoryproductlist()
    {
        return view('Backend.categoryproductlist');
    }
     public function backproducts()
    {
        return view('Backend.backproducts');
    }
    public function addproduct()
    {
        return view('Backend.addproduct');
    }
    public function editproduct()
    {
        return view('Backend.editproduct');
    }
    public function banners()
    {
        return view('Backend.banners');
    }
    public function staticpages()
    {
        return view('Backend.staticpages');
    }
}
