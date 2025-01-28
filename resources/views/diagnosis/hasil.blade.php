@extends('layouts.home')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 p-5">
            <h3>Hasil Diagnosis</h3>
            
            <table class="table table-stripped">
                <thead class="bg-primary text-white">
                  <tr>
                    <th scope="col" style="width: 40px">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $user = \App\Models\Konsultasi::where('id', $konsultasi_id)->first();
                    @endphp
                    <tr>
                      <th scope="row" style="width: 40px">{{ 1 }}</th>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->umur }}</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-stripped mt-3">
                <thead class="bg-primary text-white">
                  <tr>
                    <th scope="col" style="width: 40px">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Gejala</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $gejala = \App\Models\Diagnosa::where('konsultasi_id', $konsultasi_id)->get();
                    @endphp
                    @foreach ($gejala as $item)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $item->gejala->kode }}</td>
                        <td>{{ $item->gejala->deskripsi }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="table table-stripped mt-3">
                <thead class="bg-primary text-white">
                  <tr>
                    <th scope="col" style="width: 40px">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Penyakit</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Persentase</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $hasil = \App\Models\Hasil::where('konsultasi_id', $konsultasi_id)->orderBy('persentase', 'DESC')->first();
                    @endphp
                    <tr>
                        <th scope="row">{{ 1 }}</th>
                        <td>{{ \App\Models\Penyakit::where('id', $hasil->penyakit_id)->first()->kode }}</td>
                        <td>{{ \App\Models\Penyakit::where('id', $hasil->penyakit_id)->first()->kriteria }}</td>
                        <td>{{ \App\Models\Penyakit::where('id', $hasil->penyakit_id)->first()->deskripsi_penyakit }}</td>
                        <td>{{ $hasil->persentase }}</td>
                    </tr>
                </tbody>
            </table>
            <a href="/" type="button" class="btn btn-primary">Kembali</a>
            <a href="/preview?konsultasi_id={{ $konsultasi_id }}" type="button" class="btn btn-primary">Preview Hasil</a>
        </div>
    </div>
</div>
@endsection