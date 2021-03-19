<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show($id){
        $product = Product::findOrFail($id);

        $avgRating = 0;
        $sumRating = array_sum(array_column( $product->productComments-> toArray(),'rating'));
        $countRating = count($product->productComments);
        if ($countRating !=0){
            $avgRating = $sumRating/$countRating;
        }
        $relatedProducts = Product::where('product_category_id', $product->product_category_id)
            ->where('tag', $product->tag)
            ->limit(4)
            ->get();

        return view('front.shop.show', compact('product', 'avgRating', 'relatedProducts'));
    }

    public function postComment(Request $request){
        ProductComment::create($request->all());

        return redirect()->back();
    }

    public function index(){
        $products = Product::all();

        return view('front.shop.index', compact('products'));
    }
}
