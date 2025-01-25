<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Preview Hasil</title>
</head>
<body>
    <div class="my-5">
        <div class="d-flex gap-3 justify-content-center">
            <img src="{{ asset('images/metafora.jpg') }}" class="mt-1" width="60px" height="60px" alt="">
            <div class="">
                <h2>BIRO PSIKOLOGI METAFORA</h2>
                <p>28 Jl. Kh. Agus Salim 53196 Purwokerto Selatan Jawa Tengah</p>
            </div>
        </div>
        <div class="">
            <p>Kepada Yth</p>
            <p>BIRO PSIKOLOGI METAFORA</p>
            <p>Dengan Hormat</p>
            <p>Mohon Konsultasi Psikologi Lebih Lanjut : </p>
            <ul style="list-style: none">
                <li>
                    <p>Nama : {{ \App\Models\Konsultasi::where('id', $konsultasi_id)->first()->name }}</p>
                </li>
                <li><p>Umur : {{ \App\Models\Konsultasi::where('id', $konsultasi_id)->first()->umur }}</p></li>
            </ul>
            @php
                $penyakit_id = \App\Models\Diagnosa::where('konsultasi_id', $konsultasi_id)->orderBy('id', 'DESC')->first()->penyakit_id;
                $penyakit = \App\Models\Penyakit::where('id', $penyakit_id)->first()->kriteria;
            @endphp
            <p>setelah melakukan diagnosis menggunakan platform Traumacode, saya di diagnosis mengalami penyakit traumatis <strong>{{ $penyakit }}</strong>.</p>
            <p>dengan detail diagnosa yang saya dapatkan sebagai berikut :</p>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Diagnosa</th>
                    <th scope="col">jawaban</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach (\App\Models\Diagnosa::where('konsultasi_id', $konsultasi_id)->get() as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ \App\Models\Gejala::where('id', $item->gejala_id)->first()->kode }}</td>
                            <td>{{ \App\Models\Gejala::where('id', $item->gejala_id)->first()->deskripsi }}</td>
                            <td>{{ $item->jawaban == 1 ? 'Ya' : 'Tidak'  }}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    window.print();
</script>
</body>
</html>