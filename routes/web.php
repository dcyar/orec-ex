<?php

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

// Auth::routes();
Auth::routes(['register' => false]);

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/sistema', function () {
    return view('about');
})->name('sistema');
Route::get('/autor', function () {
    return view('author');
})->name('autor');

Route::group(['prefix' => 'actas', 'middleware' => 'auth'], function () {
    Route::resource('nacimientos', 'BirthController');
    
    Route::resource('matrimonios', 'MarriageController');
    Route::resource('defunciones', 'DeathController');
    
    Route::resource('search', 'SearchController')->only(['index', 'store']);
    Route::post('search/results', 'SearchController@results')->name('search.results');

    Route::get('download/nac/{id}/{format}', 'PdfDownloadController@birthDownload')->name('birth.download');
    Route::get('download/mar/{id}/{format}', 'PdfDownloadController@marriageDownload')->name('marriage.download');
    Route::get('download/dea/{id}/{format}', 'PdfDownloadController@deathDownload')->name('death.download');
});