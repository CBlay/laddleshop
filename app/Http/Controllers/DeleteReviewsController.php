<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use DB;
use Route;

class DeleteReviewsController extends Controller
{
  public function removereviews(Request $request)
  {

    $name = $request->get('name');

    if (!empty($name)) {


    $check = DB::table('reviews')->where('name', $name)->delete();
    if ($check) {
      return back()->with('messages1', 'The record has been deleted succefully!');
    }else {
      return back()->with('messages1', 'Record not found.');
    }
  }
  else {
    return view('admin.deletereviews');
  }
}

}
