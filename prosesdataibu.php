<?php 
include 'dbkoneksi.php';
    if (isset($_POST['submit'])) {
        $namaibu = $_POST['namaibu'];
        $tahunlahiribu = $_POST['tahunlahiribu'];
        $pendidikanibu = $_POST['pendidikanibu'];
        $pekerjaanibu = $_POST['pekerjaanibu'];
        $penghasilanibu = $_POST['penghasilanibu'];
        $berkebutuhankhususibu = $_POST['berkebutuhankhususibu'];

      // Menyimpan ke database
      $sql = mysqli_query($koneksi, "INSERT INTO dataibu (namaibu, tahunlahiribu, pendidikanibu, pekerjaanibu, penghasilanibu, berkebutuhankhususibu) VALUES ('$namaibu', '$tahunlahiribu', '$pendidikanibu', '$pekerjaanibu', '$penghasilanibu', '$berkebutuhankhususibu')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Data Keseluruhan Berhasil Disimpan!'); window.location.href='cetak.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Ibu Kandung Gagal Ditambahkan!!');";
        }
      }
?>