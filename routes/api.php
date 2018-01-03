<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Competition;
use App\Conference;
use App\News;
use App\Offer;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/img-load',function(Request $request){
//    $img = $request->input('img');
//    return $img->store('public') || false;
//});