<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
$shopname = DB::table('admin_home')->orderBy('id','desc')->limit(1)->get();
$banner = DB::table('products')->where('page', 'banner')->orderBy('id','desc')->limit(1)->get();
$featured = DB::table('products')->where('page', 'featured')->orderBy('id','desc')->limit(3)->get();
$popular = DB::table('products')->where('page', 'popular')->orderBy('id','desc')->limit(3)->get();
$more = DB::table('products')->where('page', 'more')->orderBy('id','desc')->limit(3)->get();
$banner2 = DB::table('products')->where('page', 'banner')->orderBy('id','desc')->skip(1)->limit(1)->get();

View::share('name', $shopname);
View::share('banners', $banner);
View::share('featured', $featured);
View::share('popular', $popular);
View::share('more', $more);
View::share('banner2', $banner2);

$reviews = DB::table('reviews')->simplePaginate(3);
View::share('addrev', $reviews);

$logo = DB::table('logo')->orderBy('id','desc')->limit(1)->get();
View::share('logos', $logo);

Route::get('/foo', function () {
Artisan::call('storage:link');
});


Route::get('/', function () {
return view('welcome');
});


Route::prefix('admin')->group(function() {
    Route::post('/', 'AdminController@enter')->name('enter');
    Route::get('/', 'AdminWelcomeController@index');
    Route::post('/products', 'ProductsController@store')->name('products');
    Route::get('/admin-welcome', 'AdminWelcomeController@index');
    Route::get('/logo', function () {
        return view('admin.logo');
    });
    Route::get('/products', function () {
        return view('admin.products');
    });
    Route::get('/delete', function () {
        return view('admin.delete');
    });
    Route::get('/deletereviews', function () {
        return view('admin.deletereviews');
    });
    Route::get('/messages', function () {
      $messages = DB::table('contact')->orderBy('id','desc')->simplePaginate(5);
      return view('admin.messages', ['messages' => $messages]);
    });
    Route::get('/delete', 'DeleteController@deleted')->name('delete');

    Route::get('/deletereviews', 'DeleteReviewsController@removereviews')->name('removereviews');

    Route::post('/admin-welcome', 'AdminWelcomeController@started')->name('started');
    Route::post('/logo', 'LogoController@logo')->name('logo');

    Route::get('/orders', function () {
      $order = DB::table('checkout')->orderBy('id', 'desc')->simplePaginate(5);
      return view('admin.orders', ['orders' => $order]);
    });

    Route::get('/recover', 'OrdersController@comeon')->name('orders');



  });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

Route::get('/about-us', function () {
    return view('about');
});

Route::get('/contact-us', function () {
    return view('contact');
});

Route::get('/featured-products', function () {
  $list = DB::table('products')->where('page', 'featured')->orderBy('id','desc')->limit(32)->simplePaginate(3);
    return view('listings', ['ttitle'=>'Featured Products'], ['list' => $list]);
});

Route::get('/popular-products', function () {
  $list = DB::table('products')->where('page', 'popular')->orderBy('id','desc')->limit(32)->simplePaginate(3);
    return view('listings', ['ttitle'=>'Popular Products'], ['list' => $list]);
});

Route::get('/more-products', function () {
  $list = DB::table('products')->where('page', 'more')->orderBy('id','desc')->limit(32)->simplePaginate(3);
    return view('listings', ['ttitle'=>'More Products'], ['list' => $list]);
});

Route::post('/contact-us', 'ContactController@contact')->name('contact');

Route::get('/description', 'DescriptionsController@index');
Route::post('/description', 'DescriptionsController@addToCart')->name('add.cart');
Route::post('/flush', 'FlushController@clear')->name('clear.cart');
Route::get('/flush', function() {
  return view('flush');
});
Route::get('/description?title={wildcard}', function() {
  return view('description');
});

Route::get('/search', function() {
  return view('search');
});

Route::get('/search', 'SearchController@resultant')->name('result');

Route::get('/description', 'DescriptionsController@see')->name('see');

Route::post('reviews', 'ReviewsController@reviews')->name('reviews');

Route::get('/reviews', 'ReviewsController@index')->name('reviews');

Route::get('/checkout', function() {
  return view('checkout');
});

Route::get('/checkout', 'CheckoutController@index');

Route::post('/checkout', 'CheckoutController@checkout')->name('checkout');

Route::get('/cookies', function() {
  return view('cookies');
});
Route::get('/terms', function() {
  return view('terms');
});
