<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductComment;
use Illuminate\Http\Request;

class ShopController extends Controller
{
//
    public function show($id)
    {
// Get categories,brands:
        $categories = ProductCategory::all();
        $product = Product::findOrFail($id);
        $brands = Brand::all();

        $avgRating = 0;
        $sumRating = array_sum(array_column($product->productComments->toArray(), 'rating'));
        $countRating = count($product->productComments);
        if ($countRating != 0) {
            $avgRating = $sumRating / $countRating;
        }

        $relatedProducts = Product::where('product_category_id',$product->product_category_id)
            ->where('tag',$product->tag)
            ->limit(4)
            ->get();

        return view('front.shop.show',compact('product','categories','brands','avgRating','relatedProducts'));
    }

    public function postComment(Request $request){
        ProductComment::create($request->all());

        return redirect()->back();
    }

    public function index(Request $request)
    {
// Get categories , brands:
        $categories = ProductCategory::all();
        $brands = Brand::all();

        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';
        $search = $request->search ?? '';

        $products = Product::where('name','like','%' . $search . '%');

        $products = $this->filter($products,$request);

        $products = $this->sortAndPagination($products,$sortBy,$perPage);



        return view('front.shop.index',compact('categories','brands','products'));
    }

    public function category($categoryName, Request $request){
// Get categories,brands:
        $categories = ProductCategory::all();
        $brands = Brand::all();
// Get Products:
        $perPage = $request->show ?? 3;
        $sortBy = $request->sort_by ?? 'latest';

        $products = ProductCategory::where('name',$categoryName)->first()->products->toQuery();

        $products = $this->filter($products,$request);

        $products = $this->sortAndPagination($products,$sortBy,$perPage);

        return view('front.shop.index',compact('categories','brands','products'));

    }

    public function sortAndPagination($products,$sortBy,$perPage){
        switch ($sortBy){
            case 'latest':
                $products =$products->orderBy('id');
                break;
            case 'oldest':
                $products = $products->orderByDesc('id');
                break;
            case 'name-ascending':
                $products = $products->orderBy('name');
                break;
            case 'name-descending':
                $products = $products->orderByDesc('name');
                break;
            case 'price-ascending':
                $products = $products->orderBy('price');
                break;
            case 'price-descending':
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('id');
        }

        $products = $products->paginate($perPage);

        $products->appends(['sort_by'=>$sortBy,'show'=>$perPage]);

        return $products;
    }

    public function filter($products, Request $request)
    {
//Brand :
        $brands = $request->brand ?? [];
        $brand_ids = array_keys($brands);
        $products = $brand_ids != null ? $products->whereIn('brand_id',$brand_ids) : $products;

//Price:
        $priceMin = $request->price_min;
        $priceMax = $request->price_max;
        $priceMin = str_replace('$','',$priceMin);
        $priceMax = str_replace('$','',$priceMax);
        $products = ($priceMin != null && $priceMax !=null) ? $products->whereBetween('price',[$priceMin,$priceMax]) : $products;

//Color:
        $color = $request->color;
        $products = $color != null
            ? $products->whereHas('productDetails',function ($query) use($color){
                return $query->where('color',$color)->where('qty','>',0);
            })
            : $products;

//Size:
        $size = $request->size;
        $products = $size != null
            ? $products->whereHas('productDetails',function ($query) use($size){
                return $query->where('size',$size)->where('qty','>',0);
            })
            : $products;


        return $products;
    }
}
