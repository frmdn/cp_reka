<?php
namespace App\Http\Controllers;
 use App\Utama;
 use App\Des;
 use App\Setting;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

 class UtamaController extends Controller
 {
  public function index(){
  	 $data['data'] = Utama::where('status', '=', 1)->orderBy('no_urut','asc')->get();
     $data['setting'] = Setting::where('id', 1)->first();
     $data['post1'] = Des::where('sort','=',1)->get();
     $data['post2'] = Des::where('sort','=',2)->get();
  	 return view('web.index', $data);
	 }

   public function halaman($id){
     $data['data'] = Utama::where('status', '=', 1)->orderBy('no_urut','asc')->get();
     $data['datadetail'] = Des::find($id);
	 $data['setting'] = Setting::where('id', 1)->first();
     return view('web/halaman', $data);
   }
 }
