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
      <a class="navbar-brand" href="home.html">Portal Berita</a>
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


  <a href="tambahberita.php" class="btn btn-success mt-3 mx-3">Tambah Berita</a>

  <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 mx-3">
  <?php while ($row = mysqli_fetch_assoc($hasil)) { ?>
    <div class="col">
      <div class="card bg-dark text-white">
        <div class="container">
          <div class="d-flex justify-content-center">
            <img src="<?php echo $row['gambar_berita']; ?>" class="card-img-top" alt="..." style="width: 10cm;">
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title text-white" style="text-align: center;"><?php echo $row['judul_berita']; ?></h5>
          <p class="card-text text-white"><?php echo $row['deskripsi_berita']; ?></p>
          <div class="container">
            <div class="d-flex justify-content-center">
              <a href="berita.php" type="button" class="btn btn-primary">Lihat Lebih</a>
              <a href="edit.php?id_berita=<?= $row['id_berita'] ?>" type="button" class="btn btn-warning mx-2">Update</a>
              <a href="delete.php?id_berita=<?= $row['id_berita'] ?>" type="button" class="btn btn-danger mx-2">Delete</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</div>


</body>

</html>