<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }

    // public function nextGejala()
    // {
    //     return $this->belongsTo(Gejala::class, 'next_gejala_id');
    // }
    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }

    // protected static function booted()
    // {
    //     static::created(function ($diagnosis) {
    //         // Logika untuk mengupdate next_gejala_id berdasarkan gejala_id saat ini
    //         $nextGejalaId = null;

    //         switch ($diagnosis->gejala_id) {
    //             case 1:
    //                 $nextGejalaId = $diagnosis->jawaban ? 2 : 4;
    //                 break;
    //             case 2:
    //                 $nextGejalaId = $diagnosis->jawaban ? 3 : 3;
    //                 break;
    //             case 3:
    //                 $nextGejalaId = $diagnosis->jawaban ? 4 : 4;
    //                 break;
    //             case 4:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  5; 
    //                 }else {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KC')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }
                    
    //                 break;
    //             case 5:
    //                 $nextGejalaId = $diagnosis->jawaban ? 6 : 13;
    //                 break;
    //             case 6:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KG')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  7; 
    //                 }
    //                 break;
    //             case 7:
    //                 $nextGejalaId = $diagnosis->jawaban ? 14 : 8;
    //                 break;
    //             case 8:
    //                 $nextGejalaId = $diagnosis->jawaban ? 17 : 9;
    //                 break;
    //             case 9:
    //                 $nextGejalaId = $diagnosis->jawaban ? 19 : 10;
    //                 break;
    //             case 10:
    //                 $nextGejalaId = $diagnosis->jawaban ? 13 : 11;
    //                 break;
    //             case 11:
    //                 $nextGejalaId = $diagnosis->jawaban ? 15 : 12;
    //                 break;
    //             case 12:
    //                 $nextGejalaId = $diagnosis->jawaban ? 5 : 13;
    //                 break;
    //             case 13:
    //                 $nextGejalaId = $diagnosis->jawaban ? 14 : 15;
    //                 break;
    //             case 14:
    //                 $nextGejalaId = $diagnosis->jawaban ? 15 : 16;
    //                 break;
    //             case 15:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KD')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  16; 
    //                 }
    //                 break;
    //             case 16:
    //                 $nextGejalaId = $diagnosis->jawaban ? 17 : 18;
    //                 break;    
    //             case 17:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KG')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  23; 
    //                 }
    //                 break;
    //             case 18:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KA')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  19; 
    //                 }
    //                 break;
    //             case 19:
    //                 $nextGejalaId = $diagnosis->jawaban ? 21 : 20;
    //                 break;
    //             case 20:
    //                 $nextGejalaId = $diagnosis->jawaban ? 21 : 22;
    //                 break;
    //             case 21:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KA')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  23; 
    //                 }
    //                 break;
    //             case 22:
    //                 $nextGejalaId = $diagnosis->jawaban ? 23 : 25;
    //                 break;
    //             case 23:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KF')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  24; 
    //                 }
    //                 break;
    //             case 24:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  25; 
    //                 }else {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KB')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }
    //                 break;
    //             case 25:
    //                 $nextGejalaId = $diagnosis->jawaban ? 27 : 26;
    //                 break;
    //             case 26:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KA')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  27; 
    //                 }
    //                 break;
    //             case 27:
    //                 $nextGejalaId = $diagnosis->jawaban ? 28 : 30;
    //                 break;
    //             case 28:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  29; 
    //                 }else {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KB')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }
    //                 break;
    //             case 29:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KG')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  30; 
    //                 }
    //                 break;
    //             case 30:
    //                 if ($diagnosis->jawaban) {
    //                     $nextGejalaId =  null;
    //                     $penyakit = Penyakit::where('kode', 'KF')->first()->id;
    //                     $diagnosis->penyakit_id = $penyakit;
    //                 }else {
    //                     $nextGejalaId =  3; 
    //                 }
    //                 break;
    //         }

    //         $diagnosis->next_gejala_id = $nextGejalaId;
            
    //         $diagnosis->save();
    //     });
    // }
}