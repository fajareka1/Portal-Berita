<?php
include("connect.php");

$id_berita = null;

// Check if id_berita is set in the URL
if (isset($_GET['id_berita'])) {
  $id_berita = $_GET['id_berita'];

  // Ambil data berita berdasarkan id
  $query = "SELECT * FROM master_berita WHERE id_berita=?";
  $stmt = mysqli_prepare($connection, $query);
  mysqli_stmt_bind_param($stmt, "i", $id_berita);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($result)) {
    $judul_berita = $row['judul_berita'];
    $deskripsi_berita = $row['deskripsi_berita'];
  } else {
    echo "ID Berita tidak ditemukan dalam database.";
    exit; // Anda juga bisa mengarahkan ke halaman error di sini.
  }
} else {
  echo "ID Berita is not provided in the URL.";
  exit; // Anda juga bisa mengarahkan ke halaman error di sini.
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Edit Berita</title>
</head>

<body>
  <h2>Edit Data Berita</h2>
  <form method="post" action="edit.php" name="formedit">
    <input type="hidden" name="id_berita" value="<?php echo $id_berita; ?>">
    <div>
      <div>
        <label>Judul Berita:</label>
      </div>
      <input type="text" style="width: 100%; border: 2px solid black; border-radius: 5px;" name="judul_berita" value="<?php echo $judul_berita; ?>">
    </div>
    <div>
      <div>
        <label>Deskripsi Berita:</label>
      </div>
      <textarea style="width: 100%; border: 2px solid black; border-radius: 5px;" name="deskripsi_berita"><?php echo $deskripsi_berita; ?></textarea>
    </div>
    <div>
      <input type="hidden" name="original_id_berita" value="<?php echo $id_berita; ?>">
      <input type="submit" name="update" style="background: blue; border-radius: 5px; padding: 5px; border: 2px solid blue; color: white;" value="Edit">
      <a href='master_berita.php' style="border: 2px solid red; padding: 5px; border-radius: 5px; color: white; background-color: red; text-decoration: none;">Cancel</a>
    </div>
  </form>
</body>

</html>
