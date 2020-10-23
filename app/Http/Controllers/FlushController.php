<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Route;

class FlushController extends Controller
{
    public function index()
    {
      return view('/flush');
    }

    public function clear(Request $request)
    {

      $request->session()->forget('bagData');


        return back()->with('message7', 'You shopping bag has been cleared.');
    }


}
