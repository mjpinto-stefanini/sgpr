<?php

use App\Http\Controllers\AutoCompleteController;
use App\Http\Controllers\EconomicRatingController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\TypeOfExpenseController;
use App\Http\Controllers\UpgController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UnitController;


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


Route::controller(ParameterController::class)->group(function(){
    Route::get('parameters', 'index');

});


Route::controller(ParameterController::class)->group(function(){
    Route::get('parameters-create', 'create');

});

Route::get('/', function () {
    return view('app');
});

Route::get('load_despesas', 'App\Http\Controllers\ParameterController@loadDespesas')->name('load_despesas');

Route::controller(ParameterController::class)->group(function(){
    Route::get('parameters-create-management', 'createManagement');

});

Route::controller(ParameterController::class)->group(function(){
    Route::get('parameters-create-budget', 'createBudget');

});

Route::controller(UnitController::class)->group(function(){
    Route::get('units', 'index');
    Route::get('units-export', 'export')->name('units.export');
    Route::post('units-import', 'import')->name('units.import');
});

Route::controller(EconomicRatingController::class)->group(function(){
    Route::get('economic-ratings', 'index');
    Route::get('economicratings-export', 'export')->name('economicratings.export');
    Route::post('economicratings-import', 'import')->name('economicratings.import');
});


Route::controller(SourceController::class)->group(function(){
    Route::get('sources', 'index');
    Route::get('sources-export', 'export')->name('sources.export');
    Route::post('sorces-import', 'import')->name('sources.import');
});

Route::controller(TypeOfExpenseController::class)->group(function(){
    Route::get('typeofexpenses', 'index');
    Route::get('typeofexpenses-export', 'export')->name('typeofexpenses.export');
    Route::post('typeofexpenses-import', 'import')->name('typeofexpenses.import');
});

Route::controller(UpgController::class)->group(function(){
    Route::get('upgs', 'index');
    Route::get('upgs-export', 'export')->name('upgs.export');
    Route::post('upgs-import', 'import')->name('upgs.import');
});


