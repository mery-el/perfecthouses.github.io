<?php

use Illuminate\Support\Facades\Route;
use App\Models\Annonce;
use App\Models\Features;
use App\Models\Feat_annonce;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AnnonceController;
use Stichoza\GoogleTranslate\GoogleTranslate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    $Features = Features::find(1);
   / $annonce->features()->attach(1);
    dd($Features->annonces);
});*/

Route::get('/',[HomeController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::post('/contact',[ContactController::class,'send'])->name('contact.send');
Route::get('/create',[AnnonceController::class,'index']);

Route::get('/test',function(){
    $l = new GoogleTranslate('en');
    return $l->setSource('en')->setTarget('ar')->translate("hello world");
});

Route::get('/locale/{lang}',[LocalizationController::class,'setLang']);

//user
Route::group(['middleware' => ['auth','role:user','verified']],function(){

});

//admin
Route::group(['middleware' => ['auth','role:admin','verified']],function(){

});

require __DIR__.'/auth.php';
