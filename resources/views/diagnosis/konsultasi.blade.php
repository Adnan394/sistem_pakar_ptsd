@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 p-5">
                <h5>Hallo {{ \App\Models\Konsultasi::orderBy('id', 'DESC')->first()->name }}, silahkan jawab pertanyaan</h5>
                <h3>Pertanyaan</h3>
                <form action="{{ route('diagnosis.process') }}" method="POST">
                    @csrf
                    <table class="table table-stripped">
                        <thead>
                          <tr>
                            <th scope="col" style="width: 40px">No</th>
                            <th scope="col" style="width: 40px">Kode</th>
                            <th scope="col">Gejala</th>
                            <th scope="col" style="width: 40px">Check</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($gejala as $item)
                            <tr>
                              <th scope="row" style="width: 40px">{{ $loop->iteration }}</th>
                              <td>{{ $item->kode }}</td>
                              <td>{{ $item->deskripsi }}</td>
                              <td style="width: 40px">
                                <input type="checkbox" name="gejala_id[]" class="form-check" value="{{ $item->id }}" id="">
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <input type="hidden" value="{{ \App\Models\Konsultasi::orderBy('id', 'DESC')->first()->id }}" name="konsultasi_id" id="">
                      
                      <button type="submit" class="btn btn-primary w-100 py-2">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection