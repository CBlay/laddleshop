<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use DB;
use Route;

class OrdersController extends Controller
{
  public function index()
  {
    return view('admin.orders');
  }

  public function comeon(Request $request)
  {

    $id = $request->get('idd');

    $search = DB::table('check_bag')->where('identifier', $id)->orderBy('id', 'desc')->get();
    return view('admin.recover', ['orders'=> $search]);
  }
}
