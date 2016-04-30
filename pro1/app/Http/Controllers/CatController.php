<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class CatController extends BaseController
{
    //
    // layout 
    protected $layout = 'layout.index';

    public function index(){
    	return view('user.profile');
    	
    }

   public function create(){
   	return 'form to create new Record';
   }

   public function show($id){

   	return 'cat information with this id ' .$id;
   }

   public function edit(){
   	return 'form to edit information ';
   }
}
