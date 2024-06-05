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
    
    });
    //Penyakit
    Route::prefix('penyakit')->group(function () {
        
    Route::get('/datapenyakit', [App\Http\Controllers\PenyakitController::class, 'index'])->name('datapenyakit');
    Route::get('/createpenyakit', [App\Http\Controllers\PenyakitController::class, 'create'])->name('createpenyakit');
    Route::post('/createpenyakit', [App\Http\Controllers\PenyakitController::class, 'store']);

    });
    Route::prefix('gejalapenyakit')->group(function () {
        
    Route::get('/dataGejalaPenyakit', [App\Http\Controllers\GejalaPenyakitController::class, 'index'])->name('datagejalapenyakit');
    Route::get('/createGejalaPenyakit', [App\Http\Controllers\GejalaPenyakitController::class, 'create'])->name('creategejalapenyakit');
    Route::post('/createGejalaPenyakit', [App\Http\Controllers\GejalaPenyakitController::class, 'store'])->name('gejala_penyakit_store');

    });
    Route::prefix('datadiagnosis')->group(function () {
        
    Route::get('/dataDiagnosa', [App\Http\Controllers\DataDiagnosa::class, 'index'])->name('datadiagnosa');

    });

});


require __DIR__.'/auth.php';