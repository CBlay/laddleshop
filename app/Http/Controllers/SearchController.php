<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use DB;
use Route;

class SearchController extends Controller
{
  public function index()
  {
    return view('search');
  }


  public function resultant(Request $request)
  {

    $name = $request->get('name');
    $filter = $request->get('filter');


    switch ($filter) {
      case 'category':
      $search = DB::table('products')->where('category', 'LIKE', '%'.$name.'%')->simplePaginate(3);
      return view('search', ['stitle'=> $name], ['results' => $search]);
        break;

            case 'price':
            $search = DB::table('products')->where('price', '<', $name)->simplePaginate(3);
            return view('search', ['stitle'=> $name], ['results' => $search]);
              break;

      default:
      $search = DB::table('products')->where('title', 'LIKE', '%'.$name.'%')->simplePaginate(3);
      return view('search', ['stitle'=> $name], ['results' => $search]);
          break;
    };
}

}
