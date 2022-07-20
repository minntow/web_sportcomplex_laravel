<?php
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about_us', function () {
    return view('/about_us');
});



Route::get('/contacts', function () {
    $tasks = DB::table('adres')->get();
    return view('/contacts', compact('tasks'));
});

Route::get('/solyar', function () {
    $tasks = DB::table('solyar')->get();
    return view('/solyar', compact('tasks'));
});



Route::get('/abonements', function () {
    $tasks = DB::table('abonement')->get();
    $raks = DB::table('uslugi')->get();
    return view('/abonements', compact('tasks'), compact('raks'));
});

Route::get('/otzivi', [MainController::class,'otzivi']);

Route::post('/otzivi/check',  [MainController::class,'otzivi_check']);


Route::name('user.')->group(function(){

Route::view('/private', 'private')->middleware('auth')->name('private');
    Route::get('/login', function(){
        if(Auth::check()){
            return redirect('private');
        }
        return view('/login');
    })->name('login');



Route::post('/login', [\App\Http\Controllers\LoginController::class,'log']);

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/registration',function(){
    if(Auth::check()){
        return redirect(route('/'));
    }
    return view('registration');
    })->name('registration');

Route::post('/registration',[\App\Http\Controllers\RegistrationController::class, 'reg']);
});


Route::get('/treneri', function () {
    $tasks=DB::table('treneri')->get();
    return view('/treneri', compact('tasks'));
});

