<?php
use App\Http\Controllers\BukuController;
use App\Exports\BukuExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Route;

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
Route::get('/buku', 'BukuController@index');
Route::get('/buku/export_excel', 'BukuController@export_excel');
Route::resource('buku', BukuController::class);
