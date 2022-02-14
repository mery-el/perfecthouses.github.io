<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class HomeController extends Controller
{
    public function index(){
        $dataf = FeaturesController::getfeatures();
        $datat = Type::all();
        return view('user.home',compact('dataf','datat'));
    }
}
