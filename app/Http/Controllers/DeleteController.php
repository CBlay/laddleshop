<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use DB;
use Route;

class DeleteController extends Controller
{
  public function index()
  {
    return view('admin.delete');
  }

  public function deleted(Request $request)
  {

    $name = $request->get('name');

    if (!empty($name)) {


    $check = DB::table('products')->where('title', $name)->delete();
    if ($check) {
      return back()->with('messages1', 'The record has been deleted succefully!');
    }else {
      return back()->with('messages1', 'Record not found.');
    }
  }
  else {
    return view('admin.delete');
  }
}

}
