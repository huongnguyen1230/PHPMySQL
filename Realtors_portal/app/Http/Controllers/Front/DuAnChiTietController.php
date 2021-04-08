<?php


namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;

class DuAnChiTietController extends Controller
{
    public function show($id){
        return view('front.duanchitiet.show');
    }
}
