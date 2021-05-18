<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BirthController;
use App\Http\Controllers\MarriageController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\PdfDownloadController;
use App\Http\Controllers\SearchController;

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

Route::redirect('/', '/login');

Auth::routes(['register' => false]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class,'index'])->name('dashboard');


Route::group(['middleware' => 'auth'], function () {
    /** Ruta de Actas */
    Route::group(['prefix' => 'actas'], function () {
        Route::resource('nacimientos', BirthController::class)->except(['create']);
        Route::resource('matrimonios', MarriageController::class)->except(['create']);
        Route::resource('defunciones', DeathController::class)->except(['create']);
    
        /** Rutas de Descarga de Actas */
        Route::get('download/nac/{id}/{format}', [PdfDownloadController::class, 'birthDownload'])->name('birth.download');
        Route::get('download/mar/{id}/{format}', [PdfDownloadController::class, 'marriageDownload'])->name('marriage.download');
        Route::get('download/dea/{id}/{format}', [PdfDownloadController::class, 'deathDownload'])->name('death.download');
    });

    /** Rutas de Tramites */
    // Route::group(['prefix' => 'tramites'], function () {
    //     Route::resource('solterias', App\Http\Controllers\SinglenessController::class);
    // });
    
    /** Rutas de Busqueda */
    Route::resource('search', SearchController::class)->only(['index', 'store']);
    Route::post('search/results', [SearchController::class, 'results'])->name('search.results');
    
    Route::view('/sistema', 'about')->name('sistema');
    Route::view('/author', 'author')->name('autor');
});
