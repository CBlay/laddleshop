<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use App\Http\Controllers\Controller;
use DB;
use Route;

class ReviewsController extends Controller
{
    public function index()
    {
      return view('reviews');
    }

    public function reviews(Request $request)
    {
       $request->validate([
        'name' => 'required:max:255',
        'review' => 'required'

      ]);

      $name = $request->post('name');
      $review = $request->post('review');
      $identifier = mt_rand(1000000, 9999999);


      \DB::table('reviews')->insertGetId([
        'identifier' => $identifier,
        'name' => $name,
        'review' => $review

      ]);

      return back()->with('message', 'Your review has been added succefully!');

    }

  }
