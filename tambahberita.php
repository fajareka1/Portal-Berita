<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <title>Portal Berita</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="home.php">Portal Berita</a>
    </div>
  </nav>

  <!-- form -->
  <h2 class="text-center">Tambah Data Berita</h2>
  <div class="container">
    <form action="tambahberita.php" method="post" name="form1" enctype="multipart/form-data">
      <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
        <div style="margin-bottom: 5px;">
          <label>
            Judul :
          </label>
        </div>
        <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="judul_berita">
      </div>
      <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
        <div style="margin-bottom: 5px;">
          <label>
            Deskripsi :
          </label>
        </div>
        <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="deskripsi_berita">
      </div>
      <div style="width: 100%; display: block; margin-top: 10px; margin-bottom: 10px;">
        <div style="margin-bottom: 5px;">
          <label>
            Gambar Berita:
          </label>
        </div>
        <input type="file" name="gambar_berita">
      </div>
      <input type="submit" name="Submit" value="Tambah Berita" class="btn btn-primary">
      <a href="master-berita.php" class="btn btn-danger">Kembali</a>
    </form>
  </div>

  <?php
  if (isset($_POST['Submit'])) {
    $judul_berita = $_POST['judul_berita'];
    $deskripsi_berita = $_POST['deskripsi_berita'];

    if (isset($_FILES['gambar_berita']) && $_FILES['gambar_berita']['error'] === UPLOAD_ERR_OK) {
      $gambar_berita = $_FILES['gambar_berita']['name'];
      $gambar_temp = $_FILES['gambar_berita']['tmp_name'];
      $gambar_path = 'uploads/' . $gambar_berita; // Make sure 'uploads/' matches the correct directory path

      if (move_uploaded_file($gambar_temp, $gambar_path)) {
        include("connect.php");

        $hasil = mysqli_query($connection, "INSERT INTO master_berita (judul_berita, deskripsi_berita, gambar_berita) VALUES ('$judul_berita', '$deskripsi_berita', '$gambar_path')");

        if ($hasil) {
          echo "Data Berita Berhasil Ditambahkan. <a href='master_berita.php'>Data Berita</a>";
        } else {
          echo "Gagal menambahkan data berita: " . mysqli_error($connection);
        }
      } else {
        echo "Gagal mengunggah gambar.";
      }
    } else {
      echo "Tidak ada gambar yang diunggah.";
    }
  }

  ?>

</body>

</html>