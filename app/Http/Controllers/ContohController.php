<?php

namespace App\Http\Controllers;
use App\Contoh; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContohController extends Controller
{
    public function index(){ 
	 //return Contoh::orderBy('title','asc')->get(); 
	 //return Contoh::where('title','tes')->where('no_urut','2')->get();
	 //return DB::table('posts')->orderBy('id','dsc')->get();
	 //return Contoh::where('title', '=', 'tes')->where('no_urut', '<=', '2')->get();
	 
	 //return DB::table('page')->where('no_urut', '=', '2')->get();
	 //return DB::table('posts')->orderBy('id','dsc')->get();
	 
	 return DB::table('posts')->get();
	 return view('web.contoh'); 
	 
	 } 
	 
}	
