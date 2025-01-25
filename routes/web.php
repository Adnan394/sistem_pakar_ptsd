<?php

use App\Models\Gejala;
use App\Models\Diagnosa;
use App\Models\Penyakit;
use App\Models\Konsultasi;
use Illuminate\Http\Request;
use App\Models\DiagnosisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenyakitController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/diagnosis', [DiagnosisController::class, 'start'])->name('diagnosis.start');
Route::post('/diagnosis', [DiagnosisController::class, 'process'])->name('diagnosis.process');
Route::get('/preview', function (Request $request) {
   return view('preview', [
        'konsultasi_id' => $request->konsultasi_id
   ]); 
});
// Route::get('konsultasi', function() {
//     return view('konsultasi.index', [
//         'gejalas' => Gejala::get(),
//         'penyakits' => Penyakit::get()
//     ]);
// })->name('konsultasi');

// Route::post('data_konsultasi', function(Request $request) {
//    $data = Konsultasi::create([
//         'name' => $request->name,
//         'umur' => $request->umur,
//     ]);
//     return view('konsultasi.index', [
//         'data_konsultasi' => $data,
//         'gejalas' => Gejala::where('id', 1)->first()
//     ]);
// })->name('data_konsultasi');
Route::post('konsultasi', function(Request $request) {
    $data = Konsultasi::create([
        'name' => $request->name,
        'umur' => $request->umur,
    ]);

    return redirect()->route('diagnosis.start')->with('data_konsultasi', $data);
})->name('konsultasi_store');



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    //Gejala
    Route::prefix('gejala')->group(function () {
       
    Route::get('/datagejala', [App\Http\Controllers\GejalaController::class, 'index'])->name('datagejala');
    Route::get('/creategejala', [App\Http\Controllers\GejalaController::class, 'create'])->name('creategejala');
    Route::post('/savegejala', [App\Http\Controllers\GejalaController::class, 'store'])->name('savegejala'); 
    Route::get('/editgejala/{id}', [App\Http\Controllers\GejalaController::class, 'edit'])->name('editgejala'); 
    Route::put('/updategejala/{id}', [App\Http\Controllers\GejalaController::class, 'update'])->name('updategejala'); 
    Route::get('/deletegejala/{id}', [App\Http\Controllers\GejalaController::class, 'destroy'])->name('deletegejala'); 
    });
    //Penyakit
    Route::prefix('penyakit')->group(function () {
        
    Route::get('/datapenyakit', [App\Http\Controllers\PenyakitController::class, 'index'])->name('datapenyakit');
    Route::get('/createpenyakit', [App\Http\Controllers\PenyakitController::class, 'create'])->name('createpenyakit');
    Route::post('/createpenyakit', [App\Http\Controllers\PenyakitController::class, 'store'])->name('savepenyakit');
    Route::get('/editpenyakit/{id}', [App\Http\Controllers\PenyakitController::class, 'edit'])->name('editpenyakit');
    Route::put('/updatepenyakit/{id}', [App\Http\Controllers\PenyakitController::class, 'update'])->name('updatepenyakit');
    Route::get('/deletepenyakit/{id}', [App\Http\Controllers\PenyakitController::class, 'destroy'])->name('deletepenyakit');

    });
    Route::prefix('gejalapenyakit')->group(function () {
        
    Route::get('/dataGejalaPenyakit', [App\Http\Controllers\GejalaPenyakitController::class, 'index'])->name('datagejalapenyakit');
    Route::get('/createGejalaPenyakit', [App\Http\Controllers\GejalaPenyakitController::class, 'create'])->name('creategejalapenyakit');
    Route::post('/createGejalaPenyakit', [App\Http\Controllers\GejalaPenyakitController::class, 'store'])->name('gejala_penyakit_store');
    Route::get('/editgejalapenyakit/{id}', [App\Http\Controllers\GejalaPenyakitController::class, 'edit'])->name('editgejalapenyakit');
    Route::put('/updategejalapenyakit/{id}', [App\Http\Controllers\GejalaPenyakitController::class, 'update'])->name('updategejalapenyakit');
    Route::get('/deletegejalapenyakit/{id}', [App\Http\Controllers\GejalaPenyakitController::class, 'destroy'])->name('deletegejalapenyakit');
    });
    Route::prefix('datadiagnosis')->group(function () {
        
    Route::get('/dataDiagnosa', [App\Http\Controllers\DataDiagnosa::class, 'index'])->name('datadiagnosa');

    });

});


require __DIR__.'/auth.php';