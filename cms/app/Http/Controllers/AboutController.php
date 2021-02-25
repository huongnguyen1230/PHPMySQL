<?php


namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AboutController extends BaseController
{
    public function showDetails(){
        return 'About Details Information';
    }

    public function showSubject($theSubject){
        return"Details information about $theSubject";

    }
}
