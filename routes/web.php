<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin/addCategory', function () {
    return view('admin/addCategory');
});

Route::get('/news', function () {
    return view('news');
});


Route::get('/news1', function () {
    return view('news1');
});


Route::get('/news2', function () {
    return view('news2');
});


Route::get('/bmi', function(){
    return view('bmi');
});

Route::get('/aboutUs', function(){
    return view('aboutUs');
});

Route::get('/contactUs', function(){
    return view('contactUs');
});

Route::get('/admin/login', function () {
    return view('admin/login');
 });

 Route::get('/admin/welcome', function () {
    return view('admin/welcome');
 });

 Route::get('/productList', function () {
    return view('/productList');
});

 Route::get('/admin/addProduct', function () {
    return view('admin/addProduct');
});

Route::get('/addFood', function(){
    return view('addFood');
});

Route::get('/modifyMealCalories', function(){
    return view('modifyMealCalories');
});


Route::post('/addCategory',[App\Http\Controllers\CategoryController::class,'add'])->name('admin.addCategory');

Route::get('/viewCategory',[App\Http\Controllers\CategoryController::class,'view'])->name('admin.viewCategory');

Route::get('/deleteCategory/{id}',[App\Http\Controllers\CategoryController::class,'delete'])->name('deleteCategory');

Route::get('/categoryDetails/{id}',[App\Http\Controllers\CategoryController::class,'edit'])->name('admin.editCategory');

Route::get('/products',[App\Http\Controllers\ProductController::class,'view'])->name('products');

Route::get('/showDetail/{id}',[App\Http\Controllers\ProductController::class,'productDetail'])->name('productDetail');

Route::get('/productDetails/{id}',[App\Http\Controllers\ProductController::class,'edit'])->name('admin.editProduct');

Route::post('/updateProduct',[App\Http\Controllers\ProductController::class,'update'])->name('updateProduct');

Route::post('/updateCategory',[App\Http\Controllers\CategoryController::class,'update'])->name('updateCategory');

Route::get('/deleteProduct/{id}',[App\Http\Controllers\ProductController::class,'delete'])->name('deleteProduct');

Route::post('/adminAddProduct',[App\Http\Controllers\ProductController::class,'adminAdd'])->name('admin.addProduct');

Route::get('/productList',[App\Http\Controllers\ProductController::class,'adminShow'])->name('admin.productList');

Route::get('/userCart',[App\Http\Controllers\CartController::class,'showBuyerCart'])->name('userCart');

Route::get('/deleteCart/{id}',[App\Http\Controllers\CartController::class,'deleteCart'])->name('deleteCart');

Route::get('/viewFood', [App\Http\Controllers\FoodController::class, 'view'])->name('viewFood');

Route::post('/addFood/store', [App\Http\Controllers\FoodController::class, 'add'])->name('addFood');

Route::get('/deleteFood/{id}',[App\Http\Controllers\FoodController::class,'delete'])->name('deleteFood');

Route::get('/foodDetail/{id}',[App\Http\Controllers\FoodController::class,'edit'])->name('editFood');

Route::post('/updateFood/store', [App\Http\Controllers\FoodController::class, 'update'])->name('updateFood');

Route::get('/modifyMealCalories',  [App\Http\Controllers\CaloryController::class, 'showModifyMealCalories'])->name('modifyMealCalories');

Route::post('/searchFood',[App\Http\Controllers\FoodController::class,'searchFood'])->name('searchFood');

Route::get('/deleteMeal/{id}',[App\Http\Controllers\CaloryController::class,'deleteMeal'])->name('deleteMeal');

Route::post('/addAll',  [App\Http\Controllers\CaloryController::class, 'addAll'])->name('addAll');
Route::post('/addMeat',  [App\Http\Controllers\CaloryController::class, 'addMeat'])->name('addMeat');
Route::post('/addVegetable',  [App\Http\Controllers\CaloryController::class, 'addVegetable'])->name('addVegetable');
Route::post('/addBeverage',  [App\Http\Controllers\CaloryController::class, 'addBeverage'])->name('addBeverage');
Route::post('/addFruit',  [App\Http\Controllers\CaloryController::class, 'addFruit'])->name('addFruit');

Route::get('/showFood', [App\Http\Controllers\FoodController::class, 'show'])->name('showFood');
Route::get('/showMeat', [App\Http\Controllers\FoodController::class, 'Meat'])->name('showMeat');
Route::get('/showVegetable', [App\Http\Controllers\FoodController::class, 'Vegetable'])->name('showVegetable');
Route::get('/showBeverage', [App\Http\Controllers\FoodController::class, 'Beverage'])->name('showBeverage');
Route::get('/showFruit', [App\Http\Controllers\FoodController::class, 'Fruit'])->name('showFruit');

Route::get('/warnke',[App\Http\Controllers\ProductController::class,'warnke'])->name('warnke');

Route::get('/Swisse',[App\Http\Controllers\ProductController::class,'Swisse'])->name('Swisse');

Route::get('/honey',[App\Http\Controllers\ProductController::class,'honey'])->name('honey');

Route::get('/oatmeal',[App\Http\Controllers\ProductController::class,'oatmeal'])->name('oatmeal');

Route::get('/vitaminc',[App\Http\Controllers\ProductController::class,'vitaminc'])->name('vitaminc');

Route::get('/calcium',[App\Http\Controllers\ProductController::class,'calcium'])->name('calcium');

Route::get('/fishoil',[App\Http\Controllers\ProductController::class,'fishoil'])->name('fishoil');

Route::get('/healthycare',[App\Http\Controllers\ProductController::class,'healthycare'])->name('healthycare');

Route::post('/addCart',[App\Http\Controllers\CartController::class,'addBuyer'])->name('addCart');

Route::post('\checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');

Route::post('/searchProduct', [App\Http\Controllers\ProductController::class, 'searchProduct'])->name('searchProduct');

Route::view('/admin add product page','admin.addProduct')->name('admin.addProduct');
Route::view('/admin edit product page','admin.editProduct')->name('admin.editProduct');
Route::view('/admin edit category page','admin.editCategory')->name('admin.editCategory');
Route::view('/admin product list page','admin.productList')->name('admin.productList');
Route::view('/admin page','admin.welcome')->name('admin.welcome');

Route::get('/news',[App\Http\Controllers\ProductController::class,'news'])->name('news');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('/adminlogin','admin.login')->name('admin.login');
        Route::post('/adminlogin',[App\Http\Controllers\AdminController::class, 'authenticate'])->name('admin.auth');
    });

    Route::group(['middleware' => 'admin.auth'], function(){
        Route::get('/adminWelcome',[App\Http\Controllers\DashboardController::class, 'dashboard'])->name('admin.adminWelcome');
        Route::get('/adminlogout',[App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
    });
});