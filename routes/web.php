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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting/{name?}', function ($name = null) {

    if ($name) {

        echo 'Hello ' . $name . '!';

    } else {

        echo 'Hello World!';

    }

});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});


Route::get('/shop', function () {
    return view('shop');
});

Route::post('/shop', function (Illuminate\Http\Request $request) {

    $productDescription = $request->productDescription;
    $price = $request->listPrice;
    $discountPercent = $request->discountPercent;

    $discountAmount = $price * $discountPercent * 0.01;
    $discountPrice = $price - $discountAmount;

    return view('display-discount',compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});



Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/dictionary', function (Illuminate\Http\Request $request) {

    $words = ['dog'=>'chó','cat'=>"mèo",'home'=>'nhà'];

    $word = $request->word;

    $wordSearch = isset($words[$word]) ? $words[$word] : "Không biết từ này";


    return view('searchDictionary',compact(['word','wordSearch']));
});
