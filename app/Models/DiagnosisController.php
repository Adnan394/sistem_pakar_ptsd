<?php

namespace App\Models;

use App\Models\Gejala;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DiagnosisController extends Model
{
    use HasFactory;

    public function start(Request $request)
    {
        $gejala = Gejala::first(); // Mulai dari gejala pertama
        return view('diagnosis.konsultasi', [
            'gejala' => $gejala,
            'konsultasi' => Konsultasi::orderBy('id', 'desc')->first(),
        ]);
    }

    public function process(Request $request)
    {
        // return $request;
        $gejalaId = $request->input('gejala_id');
        $jawaban = $request->input('jawaban');

        $diagnosis = Diagnosa::create([
            'konsultasi_id' => $request->konsultasi_id,
            'gejala_id' => $gejalaId,
            'jawaban' => $jawaban,
        ]);

        //  Diagnosa::where('gejala_id', $gejalaId)
        //                       ->where('jawaban', $jawaban)
        //                       ->first();

        if ($diagnosis) {
            if ($diagnosis->nextGejala == null) {
                return view('diagnosis.hasil', ['penyakit' => \App\Models\Penyakit::where('id', $diagnosis->penyakit_id)->first()]);
            } else {
                return view('diagnosis.konsultasi', ['gejala' => $diagnosis->nextGejala]);
            }
        } else {
            return "Tidak ada data diagnosis yang cocok.";
        }
    }
}