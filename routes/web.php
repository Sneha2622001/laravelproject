<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Democontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use  App\Models\Customer;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo' , function (){
//     echo "hello world";
// });

// Route::any('/test', function (){
//     echo "testing the route";
// });

// Route::get('/demo' , function (){
//    return view('demo');
// });

// Route::get('/exm/{name}/{id?}' , function ($name , $id = null){
//    $data = compact('name','id');
//    //print_r($data);
//    return view('demo')->with ($data);
//  });

// Route::put('user/{id}', function ($id){
// });

// Route::patch();

// Route::delete('user/{id}', function ($id){
// });


// Route::get('/{name?}' , function ($name = null){
//     $data = compact('name');
//     return view('home')->with ($data);
//  });


//democontroler...........

// Route::get('/' , [Democontroller::class , 'index']);

// Route::get('/about' ,'App\Http\Controllers\Democontroller@about');

// Route::resource('/photo', PhotoController::class);

// Route::get('/register' , [RegistrationController::class , 'index']);
// Route::post('/register' , [RegistrationController::class , 'register']);

// Route::get('/customer' , function(){
//     $customers = Customer::all();
//     echo "<pre>";
//     print_r($customers->toArray());
// });


Route::get('/' , function (){
    return view('index');
 });

Route::group([] , function(){
        Route::get('/register' , [RegistrationController::class , 'index']);
        Route::post('/register' , [RegistrationController::class , 'register']);
        Route::get('/customer/delete/{id}' , [CustomerController::class , 'delete'])->name('customer.delete');
        Route::get('/customer/restore/{id}' , [CustomerController::class , 'restore'])->name('customer.restore');
        Route::get('/customer/force-delete/{id}' , [CustomerController::class , 'forceDelete'])->name('customer.force-delete');
        Route::get('/customer/edit/{id}' , [CustomerController::class , 'edit'])->name('customer.edit');
        Route::post('/customer/update/{id}' , [CustomerController::class , 'update'])->name('customer.update');
        Route::get('/customer' , [CustomerController::class , 'index'])->name('customer.index');
        Route::post('/customer' , [CustomerController::class , 'store']);
        // Route::get('/customer/index' , [CustomerController::class , 'index']);
        Route::get('/customer/view' , [CustomerController::class , 'view']);
        Route::get('/customer/trash' , [CustomerController::class , 'trash']);
});

// showing session veriable.....
Route::get('get-all-session', function (){
    $session = session()->all();
    p($session);
});

// setting session veriablr.....
Route::get('set-session' , function (Request  $request) {
    $request->session()->put('user_name' , 'WsCube Tech');
    $request->session()->put('user_id' , 'AU/BCA/2019/0003771');
    return redirect('get-all-session');
});

//deleting session.....
Route::get('destroy-session', function (){
   session()->forget(['user_name' , 'user_id']);
   return redirect('get-all-session');
});


//uploading file.......1
Route::get('/upload' , function (){
    return view('upload');
 });


//uploading file.......2
 Route::post('/upload' , [UploadController::class , 'response']);

//protected
//  Route::get('/data' , [IndexController::class , 'index'])->middleware('guard');
//  Route::get('/group/{id}' , [IndexController::class , 'group'])->middleware('guard');

//  Route::get('/{lang?}' , function ($lang = null){
//      App::setLocale($lang);
//     return view('hello');
//  });


 Route::get('/profile' , function (){
     return "welcome to your profile";
 });

 
 Route::get('/no-access' , function (){
     echo "you are not allow to access the page";
     die;
 });


 //logging page............
 Route::get('/login' , function (){
    session()->put('customer_id' , 1);
    return redirect('/');
});



 //logged-out page............
 Route::get('/logout' , function (){
    session()->forget('customer_id');
    return redirect('/');
});


//middleware group.......

Route::middleware(['guard'])->group(function(){
    Route::get('/data' , [IndexController::class , 'index']);
    Route::get('/group' , [IndexController::class , 'group']);
});
