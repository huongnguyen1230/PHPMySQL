<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class TinTucController extends Controller
{
    public function show(){
        return view('front.tintuc.show');
    }
}
