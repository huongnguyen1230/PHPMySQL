<?php

use Illuminate\Support\Facades\Route;
use App\Models\product;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//hiển thị toàn bộ sản phẩm
Route::get('/', function () {
    $products = product::orderBy('id', 'asc')->get();

    return view('product',[
        'product'=>$products
    ]);
});
//thêm sản phẩm
Route::post('/product', function (Request $request){
//validate infomation
    $validator = Validator::make($request->all(),[
        'name' => 'required|max:225',
        'status' => 'required|max:225',
    ]);
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }
    $product = new product;
    $product ->name = $request->name;
    $product ->price = $request->price;
    $product ->description = $request->description;
    $product ->qty = $request->qty;
    $product ->status = $request->status;
    $product->save();

    return redirect('/');
});
//xóa sản phẩm
Route::delete('/product/{product}', function ($id){
    product::findOrFail($id)->delete();
    return redirect('/');
});
