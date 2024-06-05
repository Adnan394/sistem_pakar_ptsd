<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use Illuminate\Http\Request;

class DataDiagnosa extends Controller
{
    public function index() {
        return view('datadiagnosa.datadiagnosa', [
            'konsultasi' => Konsultasi::all()
        ]);
    }
}