<?php

namespace App\Http\Controllers\app;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Data;
class HomeController extends Controller
{
    //
    public function index(){
    	$data = Data::simplePaginate(1);
    	return view('app.home.index', compact('data'));
    }
     public function info($id){
    	$info = Data::find($id);
		return view('app.home.info', compact('info'));
    }
}
