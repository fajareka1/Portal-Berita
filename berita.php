<?php
// buat koneksi database dengan connect file
include("connect.php");
// fetch semua data motor dari database
$hasil = mysqli_query($connection, "SELECT * FROM  master_berita ORDER by id_berita DESC");
?>

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
      <a class="navbar-brand" href="home.php">Portal Berita</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="master-berita.php">Master Berita</a>
        </div>
      </div>
    </div>
  </nav>


<!-- berita -->
<div class="container">
  <?php
    // Loop through the query results
    while ($row = mysqli_fetch_assoc($hasil)) {
      
      $judulBerita = $row['judul_berita'];
      $isiBerita = $row['deskripsi_berita'];
      $gambarBerita = $row['gambar_berita'];
  ?>
    <div class="news-item">
      <h2 class="text-center mt-3"><?php echo $judulBerita; ?></h2>
      <div class="text-center">
        <img src="<?php echo $gambarBerita; ?>" alt="Gambar Berita">
      </div>
      <p class="mt-3"><?php echo $isiBerita; ?></p>
      <hr> <!-- Optional: Add a horizontal line between news items -->
    </div>
  <?php
    }
  ?>
</div>
</body>

</html>