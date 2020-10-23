<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminWelcomeController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  //public function __construct()
  //{
  //    $this->middleware('auth:admin');
  //}

  public function index()
  {
    if(session('adminLogin')) {
      $users = DB::table('users')->orderBy('id', 'desc')->simplePaginate(5);
      $info = DB::table('admin_home')->orderBy('id','desc')->limit(1)->get();
      return view('admin.home')
                           ->with('infos', $info)
                           ->with('users', $users);
    }else {
      return view('admin.login');
    }
  }

  public function started(Request $request)
  {
     $request->validate([
      'shopname' => 'required:max:20',
      'about' => 'required',
      'phone' => 'required:max:20:numeric',
      'email' => 'required:max:255',
      'address' => 'required:max:255',
      'message1' => 'required:max:150',
      'instagram' => 'required:max:80',
      'facebook' => 'required:max:80',
      'twitter' => 'required:max:80'
    ]);

    $shopname = $request->post('shopname');
    $about = $request->post('about');
    $phone = $request->post('phone');
    $email = $request->post('email');
    $address = $request->post('address');
    $message = $request->post('message1');
    $instagram = $request->post('instagram');
    $facebook = $request->post('facebook');
    $twitter = $request->post('twitter');

    \DB::table('admin_home')->insertGetId([
      'shopname' => $shopname,
      'about' => $about,
      'phone' => $phone,
      'email' => $email,
      'address' => $address,
      'instagram' => $instagram,
      'facebook' => $facebook,
      'twitter' => $twitter,
      'message' => $message
    ]);

    return back()->with('message1', 'Your post is submitted successfully');


  }

}
