<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class LienHeController extends Controller
{
    public function show(){
        return view('front.lienhe.show');
    }
}
