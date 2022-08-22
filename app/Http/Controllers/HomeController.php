<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
class HomeController extends Controller
{
    public function get($id){

        $user_info= Home::find($id)->get();

        return view('user_details',['user_details'=>$user_info[0]]);
    }
    public function onetoone($id){

        $country=Home::find($id)->country;

        return view('user_details',['country'=>$country[0]]);
    }
}
