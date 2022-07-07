<?php

use App\Models\cart;
use App\Models\City;
use App\Models\User;
use App\Models\produk;
use App\Models\category;
use App\Models\checkout;
use App\Models\detail_order;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\OrderHistoryController;

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

Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
        "active"=>'home',
        "produk"=>produk::all(),
        "category"=>category::all()
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "active"=>'about',
        "nama" => "Teman Bearly Beauty",
        "alamat" => "Sidoarjo",
        "notelp" => "08123111380"
    ]);
});

Route::get('/category', function () {
    return view('showkategori',[
        "title"=>"Category",
        "active"=>'kategori',
        "category"=>category::all()
    ]);
});
Route::get('/produk', [produkController::class,'index']);
Route::get('produk/{produk:slug}',[produkController::class,'show']);
Route::get('/category/{category:slug}',function(category $category){
    return view('kategori',[
        'title'=>'Category',
        "active"=>'kategori',
        "kategori"=>$category,
        "produk"=>produk::all()
    ]);
});

Route::get('/login',[LoginController::class,'index'] )->name('login')->middleware('guest');
Route::get('/admin',[LoginController::class,'indexAdmin'] )->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'] );
Route::post('/logout',[LoginController::class,'logout'] );
Route::get('/register',[RegisterController::class,'index'] )->middleware('guest');
Route::put('/register',[RegisterController::class,'store'] );


Route::get('/forgotpassword', function () {
    return view('login.forgotpassword',[
        "title"=>"Forgot Password",
        "active"=>'forgotpassword',
    ]);
});
Route::post('/forgotpassword', [LoginController::class,'postEmail']);
Route::get('/{token}/reset-password', function ($token) {
    return view('login.resetpw',[
        "title"=>"Reset Password",
        "active"=>'resetpassword',
        "user"=>user::where('token',$token)->firstOrFail()
        
    ]);
});
Route::post('/resetpassword/{User:id}', [LoginController::class,'reset']);


Route::group(['middleware'=>['auth','ceklevel:Admin']],function(){
    Route::get('/dashboard', function () {
        return view('dashboard.index',[
            "active"=>'dashboard1'
        ]);
    });
    
    Route::resource('/dashboard/products', DashboardProdukController::class,['except' => [ 'destroy' ]]);
    Route::get('/dashboard/products/show/{produk:slug}/',[DashboardProdukController::class,'show']);
    Route::get('/dashboard/products/edit/{produk:slug}/',[DashboardProdukController::class,'edit']);
    Route::put('/dashboard/products/edit/{produk:id}',[DashboardProdukController::class,'update']);
    Route::delete('/dashboard/products/{produk:slug}',[DashboardProdukController::class,'destroy']);

    Route::resource('/dashboard/category/', DashboardCategoryController::class,['except' => ['destroy' ]]);
    Route::get('/dashboard/category/show/{category:slug}',[DashboardCategoryController::class,'show']);
    Route::get('/dashboard/category/edit/{category:slug}',[DashboardCategoryController::class,'edit']);
    Route::delete('/dashboard/category/{category:slug}',[DashboardCategoryController::class,'destroy']);
    Route::put('/dashboard/category/{category:id}',[DashboardCategoryController::class,'update']);

    Route::resource('/dashboard/orders', DashboardOrderController::class);

    Route::get('/dashboard/user', function () {
        return view('dashboard.users.index',[
            "title"=>"user",
            "user"=>User::all(),
            "active"=>'user'
        ]);
    });
    Route::get('/dashboard/user/create', function () {
        return view('dashboard.users.create',[
            "title"=>"Create User",
            "active"=>'user'
        ]);
    });
    Route::delete('/dashboard/user/{user:id}',[RegisterController::class,'destroy']);
    Route::put('/dashboard/user',[RegisterController::class,'create']);
});


Route::group(['middleware'=>['auth','ceklevel:User']],function(){
    Route::get('/profile', function () {
        return view('profile.show',[
            "title"=>"Profile",
            "user"=>User::all(),
            "active"=>'profile',
            "city"=>City::all()
        ]);
    });
    Route::resource('/orderhistory', OrderHistoryController::class);
    Route::post('/profile/{User:id}',[RegisterController::class,'update']);
    Route::resource('/cart', CartController::class);
    Route::delete('/cart',[CartController::class,'destroyAll']);
    Route::resource('/checkout', CheckoutController::class);
    Route::get('/confirm/{checkout:id}', 
        function ($order) {
        return view('checkout.detail',[
            "title"=>"Confirm",
            "order"=>checkout::find($order),
            "active"=>'checkout'
        ]);
    });

    Route::get('/thanksorder',function () {
        return view('checkout.thanku',[
            "title"=>"Thanks Order",
            "active"=>'thanks'
        ]);
    });
   
});