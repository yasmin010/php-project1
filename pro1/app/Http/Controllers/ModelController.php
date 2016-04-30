<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class ModelController extends BaseController
{
    //

    public function index(){

    	// this make browsing using database 
    	$users = User::where('id','>','0')->paginate(1);
       
       // if we want to return count
       // $count = User::where('id', '>',1)->count();
        return $count;
    	//return view('user.index')->with('users',$users);

    }
}
