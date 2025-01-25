<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Traumacode</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: #555798 !important">
        <div class="container py-3">
          <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" width="150px" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
              <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Article</a>
              </li>
              <li class="nav-item">
                <button  data-bs-toggle="modal" data-bs-target="#exampleModal" class="px-3 py-2 btn btn-outline-light rounded-0">Tes Kesehatan Mental</button>
              </li>
              <li class="nav-item">
                <a href="/login" class="px-3 py-2 btn btn-outline-light rounded-0">Login Pakar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     @yield('content')

     
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>