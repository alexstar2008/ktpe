<?php

use \Illuminate\Http\Request;
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
    Admin panel
*/
Route::get('/admin','HomeController')->name('home');
Auth::routes();
Route::prefix('/admin')->group(function(){
    Route::get('/auth',function (){
        return view('admin.user.auth');
    });
    Route::resource('conferences','ConferencesController');
    Route::resource('news','NewsController');
    Route::resource('competitions','CompetitionsController');
    Route::resource('offers','OffersController');
});

/*
    Front End
*/

Route::get('/',function(){
    return view('pages.home');
});
Route::get('{all}',function (Request $request){
    $view = 'pages.'.$request->path();
    if(view()->exists($view)){
        return view($view);
    }
//    return redirect('/');
})->where('all', '.*');;



