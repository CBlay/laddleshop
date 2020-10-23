<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use AUTH;
use DB;
use App\Http\Controllers\Controller;

class DescriptionsController extends Controller
{


  public function index()
  {
      return view('description');
  }

  public function see(Request $request)
  {
     $request->validate([
      'title' => 'required:max:255'
    ]);

    $title = $request->get('title');

    $description = DB::table('products')->where('title', $title)->limit(1)->get();
    return view('description', ['dtitle' => $title], ['descriptions' => $description]);
  }

  public function addToCart(Request $request)
  {
    $request->validate([
     'title' => 'required:max:255',
     'price' => 'required|numeric',
     'quantity' => 'required|numeric'
   ]);
    $title = $request->post('title');
    $price = $request->post('price');
    $quantity = $request->post('quantity');

    $total = $price * $quantity;

    if($total<1) {
      return view('description');
    }else{
    $order = collect([$title, $quantity, $total]);
    $request->session()->push('bagData', $order);




            return back()->with('message', 'Your item has been added to shopping bag.');

}
}


}
