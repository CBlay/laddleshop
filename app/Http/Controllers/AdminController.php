<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;


class AdminController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

        public function enter(Request $request)
    {
      $email = $request->post('email');
      $password = $request->post('password');

      if ($email=='email' && $password=='password') {
        session()->put('adminLogin', 'active');
        $users = DB::table('users')->orderBy('id', 'desc')->simplePaginate(5);
        $info = DB::table('admin_home')->orderBy('id','desc')->limit(1)->get();
        return view('admin.home')
                             ->with('infos', $info)
                             ->with('users', $users);
      }else {
          return view('admin.login');
        };
      }
}
