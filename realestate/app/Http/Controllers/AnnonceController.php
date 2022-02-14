<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Features;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Session;

class AnnonceController extends Controller
{
    public function index(){
        $types = Type::all();
        $features = Features::all();
        if(Session::get('locale') == 'fr'){
            $lang = new GoogleTranslate();
            foreach($types as $type){
                //$type->name = $lang->setSource("en")->setTarget("fr")->translate($type->name);
                GoogleTranslate::trans($type->name,'fr','en');
            }

            /*foreach($features as $feature){
                $feature->name = $lang->setSource("en")->setTarget("fr")->translate($feature->name);
            }*/
        }

        return view('user.create',compact('types','features'));
    }
}
