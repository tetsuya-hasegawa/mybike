<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//use App\Profile;
//use App\ProfileHistory;
//use Carbon\Carbon;
//use Storage; //追加


class NavbarController extends Controller
{
    public function myprofile()
    {
        return view('layouts.navbar.myprofile');
    }
     public function myportfolio()
    {
        return view('layouts.navbar.myportfolio');
    }
    public function myblog()
    {
        return view('layouts.navbar.myblog');
    }
}
