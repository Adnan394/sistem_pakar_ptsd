<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datagejala = Gejala::all();
        return view('gejala.datagejala',compact('datagejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gejala.creategejala');
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
        Gejala::create(
            [
                'kode'=>$request->kode_gejala,
                'deskripsi'=>$request->deskrip_gejala,
            ]
            );

            return redirect()->route('datagejala');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gejala = Gejala::where('id', $id)->first();
        return view('gejala.editgejala',compact('gejala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        Gejala::where('id', $id)->update([
            'kode'=>$request->kode_gejala,
            'deskripsi'=>$request->deskrip_gejala,
        ]);
        return redirect()->route('datagejala');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gejala::where('id', $id)->delete();
        return redirect()->back();
    }
}