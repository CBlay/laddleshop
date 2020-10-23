<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use AUTH;
use DB;
use App\Http\Controllers\Controller;


class ProductsController extends Controller
{
    //
    public function index()
    {
        return view('admin.products');
    }

    public function store(Request $request)
    {
       $request->validate([
        'title' => 'required:max:255',
        'description' => 'required',
        'price' => 'required|numeric',
        'page' => 'required:max:20',
        'category' => 'required:max:50',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048'
      ]);

      $title = $request->post('title');
      $description = $request->post('description');
      $price = $request->post('price');
      $page = $request->post('page');
      $category = $request->post('category'); 

            $image = $request->file('image');
            $file_name = $image->getClientOriginalName();
            $file_mime = $image->getClientOriginalExtension();
            Storage::putFileAs('public', new File($image), $file_name, 'public');
            $path = Storage::url($file_name);

      \DB::table('products')->insertGetId([
        'title' => $title,
        'image' => $path,
        'price' => $price,
        'description' => $description,
        'page' => $page,
        'category' => $category
      ]);

      return back()->with('message2', 'Your product has been added successfully!');
    }

}
