<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Features;

class FeaturesController extends Controller
{
    public static function getfeatures(){
        $data = Features::all();
        return $data;
    }
}
