<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  <title>Portal Berita</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.html">Portal Berita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="master-berita.html">Master Berita</a>
        </div>
      </div>
    </div>
  </nav>

<h1 class="text-white mt-5 mx-3" style="font-style: italic;">Sejumlah Berita Yang Kami Paparkan</h1>

<!-- Card -->
<div class="row row-cols-1 row-cols-md-2 g-4 mt-5 mx-3">
  <div class="col">
    <div class="card bg-dark text-white">
      <div class="container">
        <div class="d-flex justify-content-center">
          <img src="lukaku.jpeg" class="card-img-top" alt="..." style="width: 10cm;">
        </div>
      </div>
      <div class="card-body">
        <h5 class="card-title" style="text-align: center;">Judul Berita</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
          content. This content is a little bit longer.</p>
          <div class="container">
            <div class="d-flex justify-content-center">
              <a href="berita.html" type="button" class="btn btn-primary ">Lihat Lebih</a>
            </div>
          </div>
      </div>
    </div>
  </div>

</html>