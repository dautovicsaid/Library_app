<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PovezController;
use App\Http\Controllers\KategorijeController;
use App\Http\Controllers\FormatController;
use App\Http\Controllers\KorisnikController;
use App\Http\Controllers\BibliotekarController;
use App\Http\Controllers\TipkorisnikaController;
use App\Http\Controllers\UcenikController;
use App\Http\Controllers\ZanroviController;
use App\Http\Controllers\IzdavacController;
use App\Http\Controllers\PismoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\KnjigaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\GlobalnavarijablaController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\EvidencijaController;
use App\Http\Controllers\IzdavanjeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NestoController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Providers\BroadcastServiceProvider;


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


Route::middleware(['auth'])->group(function () {
    
Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');


//Povez

Route::resource('povez',PovezController::class);

//kategorije

Route::resource('kategorije',KategorijeController::class);

//format

Route::resource('format',FormatController::class);

//Zanrovi

Route::resource('zanrovi',ZanroviController::class);

//Izdavac

Route::resource('izdavac',IzdavacController::class);

//Ucenik

Route::resource('ucenik',UcenikController::class);

//Bibliotekar

Route::resource('bibliotekar',BibliotekarController::class);

//Pismo

Route::resource('pismo',PismoController::class);

//Autor

Route::resource('autor',AutorController::class);

//Polise

Route::resource('polisa',GlobalnavarijablaController::class);

//evidencija


Route::get('evidencija/izdate-knjige',[EvidencijaController::class,'index'])->name('evidencija.index');
Route::get('evidencija/izdate-knjige/{id}',[EvidencijaController::class,'show'])->name('evidencija.show');
Route::get('evidencija/vracene-knjige',[EvidencijaController::class,'index'])->name('evidencija.vracene');
Route::get('evidencija/vracene-knjige/{id}',[EvidencijaController::class,'show'])->name('evidencija.showVracene');
Route::get('evidencija/knjige-u-prekoracenju',[EvidencijaController::class,'index'])->name('evidencija.prekoracene');
Route::get('evidencija/knjige-u-prekoracenju/{id}',[EvidencijaController::class,'show'])->name('evidencija.showPrekoracenje');
Route::get('evidencija/aktivne-rezervacije',[EvidencijaController::class,'rezervacije'])->name('evidencija.aktivne');
Route::get('evidencija/aktivne-rezervacije/{id}',[EvidencijaController::class,'showRezervacije'])->name('evidencija.showAktivne');
Route::get('evidencija/arhivirane-rezervacije',[EvidencijaController::class,'rezervacije'])->name('evidencija.arhivirane');
Route::get('evidencija/arhivirane-rezervacije/{id}',[EvidencijaController::class,'showRezervacije'])->name('evidencija.showArhivirane');


//Knjige


Route::resource('knjiga',KnjigaController::class);
Route::get('knjiga-{knjiga}/specifikacija',[KnjigaController::class,'spec'])->name('knjiga.spec');
Route::post('rezervisi/{knjiga}',[KnjigaController::class,'rezervisi'])->name('knjiga.rezervisi');
Route::get('rezervacija/{knjiga}',[KnjigaController::class,'rezervacija'])->name('knjiga.rezervacija');
Route::get('izdavanje/{knjiga}',[KnjigaController::class,'izdavanje'])->name('knjiga.izdavanje');
Route::post('izdaj/{knjiga}',[KnjigaController::class,'izdaj'])->name('knjiga.izdaj');
Route::get('iznajmljena/{knjiga}',[KnjigaController::class,'iznajmljena'])->name('knjiga.iznajmljena');
Route::get('vracanje/{knjiga}',[KnjigaController::class,'vracanje'])->name('knjiga.vracanje');
Route::post('vrati/{knjiga}',[KnjigaController::class,'vrati'])->name('knjiga.vrati');
Route::get('otpisivanje/{knjiga}',[KnjigaController::class,'otpisivanje'])->name('knjiga.otpisivanje');
Route::post('otpisati/{knjiga}',[KnjigaController::class,'otpisati'])->name('knjiga.otpisati');
Route::post('otpisi/{knjiga}', [KnjigaController::class, 'otpisi'])->name('knjiga.otpisi');



 });

//login
Auth::routes();

Route::resource('nesto',NestoController::class);

Route::put('/resetSifre/{id}', [UcenikController::class, 'resetSifre'])->name('reset.sifre');

Route::put('/resetSifreBibliotekar/{id}', [BibliotekarController::class, 'resetSifre'])->name('reset.sifreBibliotekar');
//Otpisivanje
Route::get('otpisi/{knjiga}',[KnjigaController::class,'otpisi'])->name('knjiga.otpisi');


    