<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests;
use Auth;
use App\Good;
use App\Libs\Imag;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$all = Good::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('home')->with('all',$all);
    }
	public function postIndex(Requests\GoodRequest $r)
    {
		//dd('test');
		$f=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],'/media/photos/');
        $r['user_id']=Auth::user()->id;
		if ($f){
			$r['picture']=$f;		
		}
		else{
			$r['picture']='-';
		} 
		Good::create($r->all());
		return redirect('home');
    }
	public function getDelete($id=null)
	{
		Good::where('user_id', Auth::user()->id)->where('id',$id)->delete();
        return redirect('home');
	}
	public function getEdit($id)
    {
	$one=Good::where('id',$id)->where('user_id',Auth::user()->id)->first();
	return view('edit')->with('one',$one);
	//echo $id;
	}
	public function postEdit(Requests\GoodRequest $r, $id)
	{
	$f=\App::make('App\Libs\Imag')->url($_FILES['picture1']['tmp_name'],'/media/photos/');
        $r['user_id']=Auth::user()->id;
		if ($f){
			$r['picture']=$f;		
		}
		else{
			$r['picture']='-';
		}	
	Good::updateOrCreate(['user_id'=>Auth::user()->id, 'id'=>$id], $r->all());
	return redirect('/home');	
	}
}
