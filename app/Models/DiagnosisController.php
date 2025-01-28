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
        $gejala = Gejala::all(); // Mulai dari gejala pertama
        return view('diagnosis.konsultasi', [
            'gejala' => $gejala,
            'konsultasi' => Konsultasi::orderBy('id', 'desc')->first(),
        ]);
    }

    public function process(Request $request)
    {
        // return $request->all();

        foreach ($request->gejala_id as $key => $value) {
            Diagnosa::create([
                'konsultasi_id' => $request->konsultasi_id,
                'gejala_id' => $value 
            ]);
        }


        $dataPenyakit = Penyakit::all();
        foreach ($dataPenyakit as $key => $value) {
            
            $dataGejalaPenyakit = GejalaPenyakit::where('penyakit_id', $value->id)->get();
            
            $dataGejalaPenyakit;
            $count = 0;
            foreach ($dataGejalaPenyakit as $key2 => $value2) {
                $diagnosa = Diagnosa::where('konsultasi_id', $request->konsultasi_id)
                    ->where('gejala_id', $value2->gejala_id)
                    ->first();

                if ($diagnosa) {
                    $count += 1;
                }

                if($dataGejalaPenyakit->count() > 0) {
                    $persentase = round(($count / $dataGejalaPenyakit->count()) * 100, 2);
                }else {
                    $persentase = 0;
                }

                if($persentase > 0) {
                    Hasil::create([
                        'konsultasi_id' => $request->konsultasi_id,
                        'penyakit_id' => $value->id,
                        'persentase' => $persentase
                    ]);
                }
                
            }
        }

        return view('diagnosis.hasil', [
            'konsultasi_id' => $request->konsultasi_id
        ]);

        
        // $gejalaId = $request->input('gejala_id');
        // $jawaban = $request->input('jawaban');

        // $diagnosis = Diagnosa::create([
        //     'konsultasi_id' => $request->konsultasi_id,
        //     'gejala_id' => $gejalaId,
        //     'jawaban' => $jawaban,
        // ]);

        //  Diagnosa::where('gejala_id', $gejalaId)
        //                       ->where('jawaban', $jawaban)
        //                       ->first();

        // if ($diagnosis) {
        //     if ($diagnosis->nextGejala == null) {
        //         return view('diagnosis.hasil', [
        //             'penyakit' => \App\Models\Penyakit::where('id', $diagnosis->penyakit_id)->first(),
        //             'konsultasi_id' => $diagnosis->konsultasi_id
        //         ]);
        //     } else {
        //         return view('diagnosis.konsultasi', ['gejala' => $diagnosis->nextGejala]);
        //     }
        // } else {
        //     return "Tidak ada data diagnosis yang cocok.";
        // }
    }
}