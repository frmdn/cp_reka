<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingsController extends Controller
{

    public function index(){
      $data['settings'] = Setting::first()->get();
      return view('setting/index', $data);
    }

    public function change(Request $request, $id){
      $setting = Setting::find($id);

      if ($request->hasFile('logo')) {
        $path          = $request->file('logo')->store('public');
        $path          = str_replace("public/", "storage/", $path);
        $setting->logo = $path;
      } else {
        $setting->logo = $setting->logo;
      }

      $setting->name        = $request->name;
      $setting->description = $request->description;
      $setting->company     = $request->company;
      $setting->address     = $request->address;
      $setting->phone       = $request->phone;
      $setting->hp          = $request->hp;
      $setting->email       = $request->email;

      $setting->save();

      return redirect()->back()->with('ok', 'berhasil edit data.');
    }

}
