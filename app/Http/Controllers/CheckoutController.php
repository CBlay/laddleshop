<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use DB;
use Route;
use Auth;

class CheckoutController extends Controller
{
    public function index()
    {
      if (empty(Auth::user()->email)) {
      return view('checkout')->with('email', 'guest@flowersghana.com');
    }else {
      $email = Auth::user()->email;
      return view('checkout')
                           ->with('email', $email);
    }

    }

    public function checkout(Request $request)
    {
       $request->validate([
        'email' => 'required:max:255',
        'dte' => 'required:max:255',
        'recipient' => 'required:max:255',
        'phone' => 'required|numeric',
        'addr' => 'required:max:255',
        'message' => 'required:max:255',
        'instructions' => 'required:max:255',
        'yphone' => 'required|numeric'
      ]);

      $dte = $request->post('dte');
      $recipient = $request->post('recipient');
      $phone = $request->post('phone');
      $addr = $request->post('addr');
      $message = $request->post('message');
      $instructions = $request->post('instructions');
      $yphone = $request->post('yphone');
      $email = $request->post('email');
      $identifier = mt_rand(1000000, 9999999);


      \DB::table('checkout')->insertGetId([
        'dte' => $dte,
        'recipent' => $recipient,
        'phone' => $phone,
        'addr' => $addr,
        'message' => $message,
        'instructions' => $instructions,
        'yphone' => $yphone,
        'status' => 'Payment Not Made',
        'identifier' => $identifier,
        'email' => $email

      ]);

      if (session()->get('bagData')) {
        foreach (session()->get('bagData') as $pp) {
          $title = $pp[0];
          $quantity = $pp[1];
          $amount = $pp[2];

          \DB::table('check_bag')->insertGetId([
            'title' => $title,
            'quantity' => $quantity,
            'amount' => $amount,
            'identifier' => $identifier,
            'misc' => ''

          ]);
        }
        $request->session()->forget('bagData');
      }

      $sum = DB::table('check_bag')->where('identifier', $identifier)->sum('amount');
      $order = DB::table('checkout')->where('identifier', $identifier)->get();

      return view('confirm')
                           ->with('sum', $sum)
                           ->with('orders', $order);
    }

}
