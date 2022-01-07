<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Firebase\UserController;
use App\Http\Controllers\AdminController;
use Dompdf\Dompdf;
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


Route::get('dersintibak', [UserController::class, 'dersintibak']);
Route::get('dgsbasvuru', [UserController::class, 'dgsbasvuru']);
Route::get('capbasvuru', [UserController::class, 'capbasvuru']);
Route::get('login', [UserController::class, 'login'])->name('LOGin');
Route::get('kayitol', [UserController::class, 'kayitol']);
Route::get('yazOkuluBasvuru', [UserController::class, 'yazOkuluBasvuru']);
Route::get('yatayGecisBasvuru', [UserController::class, 'yataygecisbasvuru']);

//BİLGİ DÜZENLE
Route::get('bilgiDuzenle', [UserController::class, 'bilgiDuzenleGet']);
Route::post('bilgiDuzenle', [UserController::class, 'bilgiDuzenlePost']);

//              BELGELER
Route::get('dersintibakBELGE', [UserController::class, 'dersintibakB']);
Route::get('capbasvuruBELGE', [UserController::class, 'capbasvuruB']);
Route::get('dgsBELGE', [UserController::class, 'dgsB']);
Route::get('yazokuluBELGE', [UserController::class, 'yazokuluB']);
Route::get('yataygecisBELGE', [UserController::class, 'yataygecisB']);

//              ADMİN KISMI
Route::view('/sifremiUnuttum', 'sifremiUnuttum');
Route::view('/admin', 'admin');
Route::view('/adminGiris', 'adminGiris');

Route::post('admin', [AdminController::class, 'adminGiris']);
Route::get('adminCAP', [AdminController::class, 'adminCAP']);
Route::get('adminDersIntibak', [AdminController::class, 'adminDersIntibak']);
Route::get('adminYazOkulu', [AdminController::class, 'adminYazOkulu']);
Route::get('adminDGS', [AdminController::class, 'adminDGS']);
Route::get('adminYatayGecis', [AdminController::class, 'adminYatayGecis']);
Route::view('/devamEdenBasvurular', 'devamEdenBasvurular');


// ONAYLA REDDET KISMI
Route::get('/adminBasvuruIncele', [AdminController::class, 'adminBasvuruIncele']);
Route::post('adminBasvuruIncele', [AdminController::class, 'basvuruOnayla']);
Route::post('yazokuluR', [AdminController::class, 'basvuruReddet']);
Route::get('yazokuluR', [AdminController::class, 'yazokuluR']);

Route::get('/basvuruInceleYatayGecis', [AdminController::class, 'adminbasvuruInceleYatayGecis']);
Route::post('/basvuruInceleYatayGecis', [AdminController::class, 'basvuruOnaylaYatayGecis']);
Route::post('yataygecisR', [AdminController::class, 'basvuruReddetYatay']);
Route::get('yataygecisR', [AdminController::class, 'yataygecisR']);

Route::get('/basvuruInceleCap', [AdminController::class, 'adminBasvuruInceleCap']);
Route::post('basvuruInceleCap', [AdminController::class, 'basvuruOnaylaCap']);
Route::post('capR', [AdminController::class, 'basvuruReddetCap']);
Route::get('capR', [AdminController::class, 'capR']);

Route::get('/basvuruInceleDgs', [AdminController::class, 'adminBasvuruInceleDgs']);
Route::post('basvuruInceleDgs', [AdminController::class, 'basvuruOnaylaDgs']);
Route::post('dgsR', [AdminController::class, 'basvuruReddetDGS']);
Route::get('dgsR', [AdminController::class, 'dgsR']);

Route::get('/basvuruInceleDersIntibak', [AdminController::class, 'adminBasvuruInceleDersIntibak']);
Route::post('basvuruInceleDersIntibak', [AdminController::class, 'basvuruOnaylaDersIntibak']);
Route::post('dersintibakR', [AdminController::class, 'basvuruReddetDersI']);
Route::get('dersintibakR', [AdminController::class, 'dersintibakR']);

//              SAYFALAR

Route::get('/', function () {
    return redirect('kayitol');
});


Route::get('/adminYazOkuluOnayli', [AdminController::class, 'adminYazOkuluOnayli']);
Route::get('/adminYazOkuluRed', [AdminController::class, 'adminYazOkuluRed']);

Route::get('/adminYatayGecisOnayli', [AdminController::class, 'adminYatayGecisOnayli']);
Route::get('/adminYatayGecisRed', [AdminController::class, 'adminYatayGecisRed']);

Route::get('/adminCAPOnayli', [AdminController::class, 'adminCAPOnayli']);
Route::get('/adminCAPRed', [AdminController::class, 'adminCAPRed']);

Route::get('/adminDGSOnayli', [AdminController::class, 'adminDGSOnayli']);
Route::get('/adminDGSRed', [AdminController::class, 'adminDGSRed']);

Route::get('/adminDersIntibakOnayli', [AdminController::class, 'adminDersIntibakOnayli']);
Route::get('/adminDersIntibakRed', [AdminController::class, 'adminDersIntibakRed']);

Route::view('/bitenBasvurular', 'bitenBasvurular');
Route::view('/basvurusayfalari', 'basvurusayfalari');
Route::post('kayitol', [UserController::class, 'store']);
Route::post('login', [UserController::class, 'check']);
Route::post('dersintibak', [UserController::class, 'dersintibakForm']);
Route::post('capbasvuru', [UserController::class, 'capbasvuruForm']);
Route::post('yazOkuluBasvuru', [UserController::class, 'yazokuluForm']);
Route::post('yatayGecisBasvuru', [UserController::class, 'yataygecisForm']);
Route::post('dgsbasvuru', [UserController::class, 'dgsForm']);
Route::post('dersintibakBELGE', [UserController::class, 'dersintibakBelge']);
Route::post('capbasvuruBELGE', [UserController::class, 'capbasvurubelge']);
Route::post('dgsBELGE', [UserController::class, 'dgsbelge']);
Route::post('yazokuluBELGE', [UserController::class, 'yazokulubelge']);
Route::post('yataygecisBELGE', [UserController::class, 'yataygecisbelge']);
