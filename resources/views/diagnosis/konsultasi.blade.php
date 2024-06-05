@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5">
                <h5>Hallo {{ \App\Models\Konsultasi::orderBy('id', 'DESC')->first()->name }}, silahkan jawab pertanyaan</h5>
                <h3>Pertanyaan</h3>
                <form action="{{ route('diagnosis.process') }}" method="POST">
                    @csrf
                    <input type="hidden" name="konsultasi_id" value="{{ \App\Models\Konsultasi::orderBy('id', 'DESC')->first()->id }}">
                    <input type="hidden" name="gejala_id" value="{{ $gejala->id }}">
                    <p>{{ $gejala->deskripsi }}</p>
                    <button type="submit" name="jawaban" value="1" class="btn btn-primary">Ya</button>
                    <button type="submit" name="jawaban" value="0" class="btn btn-danger">Tidak</button>
                </form>
                
                <!-- resources/views/diagnosis/hasil.blade.php -->
                {{-- @if ($penyakit)
                <p>Hasil Diagnosis: {{ $penyakit->nama_penyakit }}</p>
                @endif --}}
            </div>
        </div>
    </div>
@endsection