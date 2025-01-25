@extends('layouts.home')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 p-5">
            <h3>Hasil Diagnosis</h3>
            <p>Kode: {{ $penyakit->kode }}</p>
            <p>Kriteria: {{ $penyakit->kriteria }}</p>
            <p>Deskripsi: {{ $penyakit->deskripsi_penyakit }}</p>
            <a href="/" type="button" class="btn btn-primary">Kembali</a>
            <a href="/preview?konsultasi_id={{ $konsultasi_id }}" type="button" class="btn btn-primary">Preview Hasil</a>
        </div>
    </div>
</div>
@endsection