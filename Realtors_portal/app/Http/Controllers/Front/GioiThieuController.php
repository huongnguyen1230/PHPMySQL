<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class GioiThieuController extends Controller
{
    public function show(){
        return view('front.gioithieu.show');
    }
}
