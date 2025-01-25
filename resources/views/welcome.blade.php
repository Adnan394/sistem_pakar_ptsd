@extends('layouts.home')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-7 d-flex align-items-center">
        <div class="">
            <h1>Membangun Masa Depan: Mengatasi PTSD dengan Bantuan Ahli</h1>
            <button type="button" class="btn text-white btn-lg rounded-1 px-5 mt-3" style="background: #555798" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Mulai
            </button>
        </div>
    </div>
    <div class="col p-5">
        <img src="{{ asset('images/hero2.jpg') }}" class="img-fluid d-block my-auto"  alt="">
    </div>
</div>
</div>

<div class="container my-5">
  <h2 class="text-center mb-5">Tentang PTSD (Post Traumatic Stress Disorder)</h2>
  <div class="d-flex gap-3 justify-content-center flex-wrap">
    <div class="card shadow" style="width:24rem">
      <img src="{{ asset('images/article1.jpg') }}" style="height: 200px; width: 100%; object-fit: cover" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="">Apa itu PTSD?</h5>
        <p>PTSD merupakan gangguan kecemasan yang diakibatkan seseorang telah mengalami suatu kejadian yang sangat menakutkan bahkan sampai mengancam jiwa yang dapat meninggalkan memori kelam bahkan gejala kejiwaan yang serius.
          Kenali gejala dan kategori kriteria trauma yang dialami.</p>
      </div>
    </div>
    <div class="card shadow" style="width:24rem">
      <img src="{{ asset('images/article2.jpg') }}" style="height: 200px; width: 100%; object-fit: cover" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="">Apa saja penyebab PTSD?</h5>
        <p>Ketika seseorang mengalami suatu kejadian yang tidak mengenakkan atau bahkan mengancam jiwa, seperti kekerasan fisik, pembullyan, pelecehan seksual, kecelakaan serius atau bencana alam. Namun belum tentu penyebab berikut membuat seseorang menjadi trauma atau mengalami kecemasan.
        </p>
      </div>
    </div>
    <div class="card shadow" style="width:24rem">
      <img src="{{ asset('images/article3.jpg') }}" style="height: 200px; width: 100%; object-fit: cover" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="">Apa saja gejala yang dialami?
        </h5>
        <ul>
          <li>Penghindaran terhadap sesuatu.</li>
          <li>Mengalami kilas balik.</li>
          <li>Gangguan aktivitas seperti gangguan tidur.</li>
          <li>perubahan pola pikir dan suasana hati yang negatif.</li>
        </ul>
        </p>
      </div>
    </div>
    <div class="card shadow" style="width:24rem">
      <img src="{{ asset('images/article4.jpg') }}" style="height: 200px; width: 100%; object-fit: cover" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="">Langkah pertama menangani PTSD</h5>
        <p>Melakukan konsultasi terhadap ahli atau mengkonfirmasi gejala yang dialami
          Melakukan prosedur pengobatan sesuai yang dianjurkan.
          Support dari keluarga, teman dan lingkungan sekitar.
          </p>
      </div>
    </div>
    <div class="card shadow" style="width:24rem">
      <img src="{{ asset('images/article5.jpg') }}" style="height: 200px; width: 100%; object-fit: cover" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="">Potensi pemulihan dan pertumbuhan pasca trauma
        </h5>
        <p>Seseorang yang telah pulih dari trauma akan mengalami mas post traumatic growth.
          Mencari dukungan atau pelajari cara penyembuhan dari mantan pengidap.
          </p>
      </div>
    </div>
    <div class="card shadow" style="width:24rem">
      <img src="{{ asset('images/article6.jpg') }}" style="height: 200px; width: 100%; object-fit: cover" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="">Pencegahan PTSD 
        </h5>
        <ul>
          <li>Dengan melakukan aktivitas positif</li>
          <li>Edukasi</li>
          <li>Mengelola strees dengan merileksasi pikiran.</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<footer class="d-flex justify-content-center align-items-center" style="background: #555798; width:100%; height: 100px">
  <p class="text-white">Copyright &copy; 2023</p>
</footer>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Diagnosis</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('konsultasi_store') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="name">Masukan Nama</label>
              <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label for="name">Umur</label>
                <input type="number" class="form-control" name="umur" required>
            </div>
            <div class="mb-3">
              <button type="submit" class="btn px-5 rounded-1 text-white" style="background: #555798">Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection