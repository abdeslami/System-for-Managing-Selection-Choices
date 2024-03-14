<?php

use App\Http\Controllers\CondidatureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/acceuil", function(){
    return view("acceuil");
} );
Route::get("/admin", function(){
    return view("admin.index");
} );
Route::get("/compte", function(){
    return view("admin.compte_utilisateur");
} );
Route::get("/etudiant", [CondidatureController::class,'create']);
Route::post("/ajouterE", [CondidatureController::class,'store'])->name('ajouterE');

Route::get("/test", function(){
    return view("admin.test");
} );
Route::get("/condidat", function(){
    return view("admin.condidat");
} );
Route::get('/index',[CondidatureController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
