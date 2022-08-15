<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicePagesController;
use App\Http\Controllers\PortfolioPagesController;
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
Route::prefix('admin')->group(function(){
    
    Route::get('/dashboard',[PagesController::class,'admin'])->name('admin.dashboard');
    //Main section Route
    Route::get('/main',[MainPagesController::class,'index'])->name('admin.main');
    Route::put('/main',[MainPagesController::class,'update'])->name('admin.main.update');
    Route::get('/services/create',[ServicePagesController::class,'create'])->name('admin.services.create');
    Route::post('/services/create',[ServicePagesController::class,'store'])->name('admin.services.store');
    Route::get('/services/list',[ServicePagesController::class,'list'])->name('admin.services.list');
    Route::get('/services/edit/{id}',[ServicePagesController::class,'edit'])->name('admin.services.edit');
    Route::post('/services/update/{id}',[ServicePagesController::class,'update'])->name('admin.services.update');
    Route::delete('/services/destroy/{id}',[ServicePagesController::class,'destroy'])->name('admin.services.destroy');
    //Portfolios part
    Route::get('/portfolios/create',[PortfolioPagesController::class,'create'])->name('admin.portfolios.create');
    Route::put('/portfolios/create',[PortfolioPagesController::class,'store'])->name('admin.portfolios.store');
    Route::get('/portfolios/list',[PortfolioPagesController::class,'list'])->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}',[PortfolioPagesController::class,'edit'])->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}',[PortfolioPagesController::class,'update'])->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}',[PortfolioPagesController::class,'destroy'])->name('admin.portfolios.destroy');


Route::get('/services',[PagesController::class,'services'])->name('admin.services');
Route::get('/portfolio',[PagesController::class,'portfolio'])->name('admin.portfolio');
Route::get('/about',[PagesController::class,'about'])->name('admin.about');
Route::get('/contact',[PagesController::class,'contact'])->name('admin.contact');
});

Route::get('/',[PagesController::class,'index'])->name('home');




Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
