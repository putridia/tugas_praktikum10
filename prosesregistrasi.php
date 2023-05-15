<?php 
include 'dbkoneksi.php';
    if (isset($_POST['submit'])) {
      $jenispendaftaran = $_POST['jenispendaftaran'];
      $tglmasuksekolah = $_POST['tglmasuksekolah'];
      $NIS = $_POST['NIS'];
      $nopesertaujian= $_POST['nopesertaujian'];
      $pernahPAUD = $_POST['pernahPAUD'];
      $pernahTK = $_POST['pernahTK'];
      $noseriskhun = $_POST['noseriskhun'];
      $noseriijazah = $_POST['noseriijazah'];
      $hobi = $_POST['hobi'];
      $cita_cita = $_POST['cita_cita'];

      // Menyimpan ke database
      $sql = mysqli_query($koneksi, "INSERT INTO registrasipeserta (jenispendaftaran, tglmasuksekolah, NIS, nopesertaujian, pernahPAUD, pernahTK, noseriskhun, noseriijazah, hobi, cita_cita) VALUES ('$jenispendaftaran', '$tglmasuksekolah', '$NIS', '$nopesertaujian', '$pernahPAUD', '$pernahTK', '$noseriskhun', '$noseriijazah', '$hobi', '$cita_cita')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Pribadi!'); window.location.href='datapribadi.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Registrasi Gagal Ditambahkan!!');";
        }
      }
?>