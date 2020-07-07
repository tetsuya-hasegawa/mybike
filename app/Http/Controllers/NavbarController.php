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
    public function add()
    {
        return view('layouts.navbar.myprofile');
    }
     public function add2()
    {
        return view('layouts.navbar.myportfolio');
    }
    public function add3()
    {
        return view('layouts.navbar.myblog');
    }
}
