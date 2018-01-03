<?php

use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\App;
use \App\News;
use \App\Competition;
use \App\Offer;
use \App\Conference;
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
Auth::routes();
Route::get('/admin','HomeController')->name('home');
Route::prefix('/admin')->group(function(){
    Route::get('/auth',function (){
        return view('admin.user.auth');
    });
//    Route::post('/register','Auth\RegisterController@create')->name('register-user');
//
//    Route::get('/register',function (){
//        return view('auth.register');
//    })->name('register');

    Route::resource('conferences','ConferencesController');
    Route::resource('news','NewsController');
    Route::resource('competitions','CompetitionsController');
    Route::resource('offers','OffersController');
});



/*
    Front End
*/
Route::get('/',function(){
    return view('pages.home',['news'=>News::all()]);
});
Route::get('/en',function(){
    return view('pages.home',['news'=>News::all()]);
});
Route::get('/olympiads',function(){
    return view('pages.olympiads',['competitions'=>Competition::all()]);
});
Route::get('en/olympiads',function(){
    return view('pages.olympiads',['competitions'=>Competition::all()]);
});
Route::get('/offers',function(){
    return view('pages.offers',['offers'=>Offer::all()]);
});
Route::get('/en/offers',function(){
    return view('pages.offers',['offers'=>Offer::all()]);
});
Route::get('/conferences',function(){
    return view('pages.conferences',['conferences'=>Conference::all()]);
});
Route::get('/en/conferences',function(){
    return view('pages.conferences',['conferences'=>Conference::all()]);
});
Route::get('/en/applicant',function(){
    return view('pages.applicant-en');
});
Route::get('/en/employment',function(){
    return view('pages.employment');
});

Route::get('{all}',function (Request $request){
    $path = $request->path();
    if(App::getLocale()=='en'){
        $path = str_replace('en','',$path);
    }
    $view = 'pages.'.$path;
    if(view()->exists($view)){
        return view($view);
    }
//    return redirect('/');
})->where('all', '.*');;



