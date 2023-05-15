<?php 
include 'dbkoneksi.php';
    if (isset($_POST['submit'])) {
    $namalengkap = $_POST['namalengkap'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $NISN = $_POST['NISN'];
    $NIK = $_POST['NIK'];
    $tempatlahir = $_POST['tempatlahir'];
    $tgllahir = $_POST['tgllahir'];
    $agama = $_POST['agama'];
    $berkebutuhankhusus = $_POST['berkebutuhankhusus'];
    $alamat = $_POST['alamat'];
    $RT = $_POST['RT'];
    $RW = $_POST['RW'];
    $namadusun = $_POST['namadusun'];
    $namakelurahan = $_POST['namakelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kodepos = $_POST['kodepos'];
    $tempattinggal = $_POST['tempattinggal'];
    $transportasi = $_POST['transportasi'];
    $noHP = $_POST['noHP'];
    $notelp = $_POST['notelp'];
    $email = $_POST['email'];
    $penerimaKIP = $_POST['penerimaKIP'];
    $noKIP = $_POST['noKIP'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $namanegara = $_POST['namanegara'];

      // Menyimpan ke database
      $sql = mysqli_query($koneksi, "INSERT INTO datapribadi (namalengkap, jeniskelamin, NISN, NIK, tempatlahir, tgllahir, agama, berkebutuhankhusus, alamat, RT, RW, namadusun, namakelurahan, kecamatan, kodepos, tempattinggal, transportasi, noHP, notelp, email, penerimaKIP, noKIP, kewarganegaraan, namanegara) VALUES ('$namalengkap', '$jeniskelamin', '$NISN', '$NIK', '$tempatlahir', '$tgllahir', '$agama', '$berkebutuhankhusus', '$alamat', '$RT', '$RW', '$namadusun', '$namakelurahan', '$kecamatan', '$kodepos', '$tempattinggal', '$transportasi', '$noHP', '$notelp', '$email', '$penerimaKIP', '$noKIP', '$kewarganegaraan', '$namanegara')");
      if ($sql) {
          // pesan jika data tersimpan
          echo "<script>alert('Selanjutnya Mengisi Form Data Ayah!'); window.location.href='dataayah.php'</script>"; 
        } else {
          // pesan jika data gagal disimpan
            echo "alert('Data Diri Gagal Ditambahkan!!');";
        }
      }
?>