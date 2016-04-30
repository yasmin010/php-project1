<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Lang;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UserController extends BaseController
{
    //
    public function index(){
        //if i want to return all data in database
       // $users = User::all();
        // if i want to return coulmn from database 
       // $users = User::find(1)->adress;



    //return view('user.index')->with('user',$users);
         //return $users; 
        // to return password 
        return Lang::get('passwords.password');

    }

    public function create(){
    	return view('user.create');
    }

    public function store(){
        // this is the first way to add data to database
        //$user = User::create(array('name' => Input::get('name'),
          //                          'email' => Input::get('email')));
         
         // the seconde way to add data to database
        $user = new User;
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        return 'information saved successfuly'; 

    }

    public function edit($id){
        $user = User::find($id);

        
        return view('user.edites')->with('user', $user);
    }

    public function update($id){

        $user = User::find($id);
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->save();
        return redirect::to('user');


    }

}
