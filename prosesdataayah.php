<?php 
include 'dbkoneksi.php';
    if (isset($_POST['submit'])) {
        $namaayah = $_POST['namaayah'];
        $tahunlahirayah = $_POST['tahunlahirayah'];
        $pendidikanayah = $_POST['pendidikanayah'];
        $pekerjaanayah = $_POST['pekerjaanayah'];
        $penghasilanayah = $_POST['penghasilanayah'];
        $berkebutuhankhususayah = $_POST['berkebutuhankhususayah'];

      // Menyimpan ke database
      $sql = mysqli_query($koneksi, "INSERT INTO dataayah (namaayah, tahunlahirayah, pendidikanayah, pekerjaanayah, penghasilanayah, berkebutuhankhususayah) VALUES ('$namaayah', '$tahunlahirayah', '$pendidikanayah', '$pekerjaanayah', '$penghasilanayah', '$berkebutuhankhususayah')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ibu Kandung!'); window.location.href='dataibu.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ayah Kandung Gagal Ditambahkan!!');";
        }
      }
?>