<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        return view('penyakit.datapenyakit',[
            'penyakits' => Penyakit::latest()->paginate(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view('penyakit.createpenyakit',[
        'gejalas' => Gejala::get(),
        ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $penyakit = Penyakit::create([
            'kode'=>$request->kode,
            'kriteria'=>$request->kriteria,
            'deskripsi_penyakit'=> $request->deskripsi
        ]);

        return redirect()->route('datapenyakit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penyakit = Penyakit::where('id', $id)->first();
        return view('penyakit.editpenyakit',compact('penyakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        Penyakit::where('id', $id)->update([
            'kode'=>$request->kode,
            'kriteria'=>$request->kriteria,
            'deskripsi_penyakit'=> $request->deskripsi
        ]);

        return redirect()->route('datapenyakit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penyakit::where('id', $id)->delete();
        return redirect()->route('datapenyakit');
    }
}