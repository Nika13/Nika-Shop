<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use App\Http\Requests;

class BaseController extends Controller
{
   public function getIndex(){
	// dd($id);
	$all=Good::where('showhide','show')->orderBy('id','DESC')->paginate(10);
	return view('index')->with('all',$all);  
   }
   
   public function getStatic($id){
	// dd($id);
	return view('static')->with('id',$id);   
   }
}
