<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //dinh nghia ham add trong controller
    public function add($id){
        $product = Product::findOrFail($id);

    //goi phuong thức add() từ thư viện Cart
        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'qty' => 1,
            'price' => $product->discount ?? $product->price,
            'weight' => $product->weight ?? 0,
            'options' => [
                'images' => $product->productImages,
            ],
        ]);

//dung phuong thuc content() de xem DL trong cart
//        dd(Cart::content());

        return back();
    }
}
