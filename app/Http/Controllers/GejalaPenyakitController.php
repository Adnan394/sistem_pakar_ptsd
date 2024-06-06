<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\GejalaPenyakit;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class GejalaPenyakitController extends Controller
{
    public function index()
    {
        $datagejalapenyakit = GejalaPenyakit::all();
        return view('gejalapenyakit.datagejalapenyakit',compact('datagejalapenyakit'));
    }

    public function create() {
        return view('gejalapenyakit.creategejalapenyakit', [
            'gejalas' => Gejala::all(),
            'penyakits' => Penyakit::all()
        ]);
    }

    public function store(Request $request) {
        GejalaPenyakit::create([
            'gejala_id' => $request->gejala_id,
            'penyakit_id' => $request->penyakit_id
        ]);

        return redirect()->route('datagejalapenyakit');
    }

    public function edit($id) {
        $gejalapenyakit = GejalaPenyakit::where('id', $id)->first();
        return view('gejalapenyakit.editgejalapenyakit',[
            'data' => $gejalapenyakit,
            'gejalas' => Gejala::all(),
            'penyakits' => Penyakit::all()
        ]);
    }

    public function update ($id, Request $request) {
        GejalaPenyakit::where('id', $id)->update([
            'gejala_id' => $request->gejala_id,
            'penyakit_id' => $request->penyakit_id
        ]);
        return redirect()->route('datagejalapenyakit');
    }

    public function destroy($id) {  
        GejalaPenyakit::where('id', $id)->delete();
        return redirect()->route('datagejalapenyakit');
    }
}