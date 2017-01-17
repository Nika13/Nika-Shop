<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
Use App\Maintext;

class StaticController extends Controller
{
  Public function getIndex(){
  $all = Maintext::get();
  Return view(‘staticall’)->with(‘all’, $all);
}
Вывод по одной записи по значению url
 Public function getOne($id = null){
 $one = Maintext::where(‘url’, $id)->first();
 Return view(‘staticone’)->with(‘one’,$one);
}

}
Route::get(‘all’,’StaticController@getIndex’);
Route::get(‘static/{id}’,’StaticController@getOne’)
