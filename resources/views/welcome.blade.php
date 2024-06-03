@extends('layouts.home')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide carousel-dark">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <div class="">
                        <h4>Langkah Awal Menuju Pemulihan: Memahami PTSD dan Cara Mengatasinya</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                </div>
                <div class="col p-5">
                    <img src="{{ asset('images/hero1.jpg') }}" class="img-fluid d-block my-auto"  alt="">
                </div>
            </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center">
                    <div class="">
                        <h4>Membangun Masa Depan: Mengatasi PTSD dengan Bantuan Ahli</h4>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Launch demo modal
                        </button>
                    </div>
                </div>
                <div class="col p-5">
                    <img src="{{ asset('images/hero2.jpg') }}" class="img-fluid d-block my-auto"  alt="">
                </div>
            </div>
        </div>
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

</div>

<div class="container mt-5">
  <h2 class="text-center mb-5">Tentang PTSD (Post Traumatic Stress Disorder)</h2>
  <div class="d-flex gap-3 justify-content-center flex-wrap">
    <div class="card p-3" style="width:24rem">
      <h5 class="text-center">Apa itu PTSD?</h5>
      <p>PTSD merupakan gangguan kecemasan yang diakibatkan seseorang telah mengalami suatu kejadian yang sangat menakutkan bahkan sampai mengancam jiwa yang dapat meninggalkan memori kelam bahkan gejala kejiwaan yang serius.
        Kenali gejala dan kategori kriteria trauma yang dialami.</p>
    </div>
    <div class="card p-3" style="width:24rem">
      <h5 class="text-center">Apa saja penyebab PTSD?</h5>
      <p>Ketika seseorang mengalami suatu kejadian yang tidak mengenakkan atau bahkan mengancam jiwa, seperti kekerasan fisik, pembullyan, pelecehan seksual, kecelakaan serius atau bencana alam. Namun belum tentu penyebab berikut membuat seseorang menjadi trauma atau mengalami kecemasan.
      </p>
    </div>
    <div class="card p-3" style="width:24rem">
      <h5 class="text-center">Apa saja gejala yang dialami?
      </h5>
      <ul>
        <li>Penghindaran terhadap sesuatu.</li>
        <li>Mengalami kilas balik.</li>
        <li>Gangguan aktivitas seperti gangguan tidur.</li>
        <li>perubahan pola pikir dan suasana hati yang negatif.</li>
      </ul>
      </p>
    </div>
    <div class="card p-3" style="width:24rem">
      <h5 class="text-center">Langkah pertama menangani PTSD</h5>
      <p>Melakukan konsultasi terhadap ahli atau mengkonfirmasi gejala yang dialami
        Melakukan prosedur pengobatan sesuai yang dianjurkan.
        Support dari keluarga, teman dan lingkungan sekitar.
        </p>
    </div>
    <div class="card p-3" style="width:24rem">
      <h5 class="text-center">Potensi pemulihan dan pertumbuhan pasca trauma
      </h5>
      <p>Seseorang yang telah pulih dari trauma akan mengalami mas post traumatic growth.
        Mencari dukungan atau pelajari cara penyembuhan dari mantan pengidap.
        </p>
    </div>
    <div class="card p-3" style="width:24rem">
      <h5 class="text-center">Pencegahan PTSD 
      </h5>
      <ul>
        <li>Dengan melakukan aktivitas positif</li>
        <li>Edukasi</li>
        <li>Mengelola strees dengan merileksasi pikiran.</li>
      </ul>
    </div>
  </div>
</div>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>
@endsection