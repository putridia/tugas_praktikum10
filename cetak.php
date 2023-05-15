<!DOCTYPE html>
<html>
    <head>
        <title>Data Pendaftaran</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
    </style>
    </head>
    <body>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center>
                        <h2>DATA PENDAFTARAN PESERTA DIDIK</h2>
                        </center><br>
                        <?php
                        include 'dbkoneksi.php';
                        $registrasipeserta = mysqli_query($koneksi, "SELECT * from registrasipeserta");
                        ?>
                        <?php foreach ($registrasipeserta as $data): ?>
                            Tanggal : <?= $data['tanggalpengisian'] ?></li>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        <h5>Data Registrasi</h5>
                    </div>
                    <div class="card-body">
                        <?php
                            include 'dbkoneksi.php';
                            $registrasipeserta = mysqli_query($koneksi, "SELECT * from registrasipeserta");
                        ?>

                        <?php foreach ($registrasipeserta as $data): ?>
                            <ul>
                                <li>Jenis Pendaftaran : <?= $data['jenispendaftaran'] ?></li>
                                <li>Tanggal Masuk Sekolah : <?= $data['tglmasuksekolah'] ?></li>
                                <li>NIS : <?= $data['NIS'] ?></li>
                                <li>Nomor Peserta Ujian : <?= $data['nopesertaujian'] ?></li>
                                <li>Apakah Pernah PAUD? : <?= $data['pernahPAUD'] ?></li>
                                <li>Apakah Pernah TK? : <?= $data['pernahTK'] ?></li>
                                <li>No. Seri SKHUN Sebelumnya : <?= $data['noseriskhun'] ?></li>
                                <li>No. Seri Ijazah Sebelumnya : <?= $data['noseriijazah'] ?></li>
                                <li>Hobi : <?= $data['hobi'] ?></li>
                                <li>Cita-cita : <?= $data['cita_cita'] ?></li>
                            </ul>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        <h5>Data Pribadi</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'dbkoneksi.php';
                        $datapribadi = mysqli_query($koneksi, "SELECT * from datapribadi");
                        ?>

                        <?php foreach ($datapribadi as $data): ?>
                        <ul>
                            <li>Nama Lengkap : <?= $data['namalengkap'] ?></li>
                            <li>Jenis Kelamin : <?= $data['jeniskelamin'] ?></li>
                            <li>NISN : <?= $data['NISN'] ?></li>
                            <li>NIK : <?= $data['NIK'] ?></li>
                            <li>Tempat Lahir : <?= $data['tempatlahir'] ?></li>
                            <li>Tanggal Lahir : <?= $data['tgllahir'] ?></li>
                            <li>Agama : <?= $data['agama'] ?></li>
                            <li>Berkebutuhan Khusus : <?= $data['berkebutuhankhusus'] ?></li>
                            <li>Alamat Jalan : <?= $data['alamat'] ?></li>
                            <li>RT : <?= $data['RT'] ?></li>
                            <li>RW : <?= $data['RW'] ?></li>
                            <li>Nama Dusun : <?= $data['namadusun'] ?></li>
                            <li>Nama Kelurahan/Desa : <?= $data['namakelurahan'] ?></li>
                            <li>Kecamatan : <?= $data['kecamatan'] ?></li>
                            <li>Kode Pos : <?= $data['kodepos'] ?></li>
                            <li>Tempat Tinggal : <?= $data['tempattinggal'] ?></li>
                            <li>Moda Transportasi : <?= $data['transportasi'] ?></li>
                            <li>Nomor HP : <?= $data['noHP'] ?></li>
                            <li>Nomor Telepon : <?= $data['notelp'] ?></li>
                            <li>Email Pribadi : <?= $data['email'] ?></li>
                            <li>Penerima KPS/PKH/KIP : <?= $data['penerimaKIP'] ?></li>
                            <li>No. KPS/KKS/PKH/KIP : <?= $data['noKIP'] ?></li>
                            <li>Kewarganegaraan : <?= $data['kewarganegaraan'] ?></li>
                            <li>Nama Negara : <?= $data['namanegara'] ?></li>

                        </ul>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        <h5>Data Ayah Kandung</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'dbkoneksi.php';
                        $dataayah = mysqli_query($koneksi, "SELECT * from dataayah");
                        ?>

                        <?php foreach ($dataayah as $data): ?>
                        <ul>
                            <li>Nama Ayah Kandung : <?= $data['namaayah'] ?></li>
                            <li>Tahun Lahir : <?= $data['tahunlahirayah'] ?></li>
                            <li>Pendidikan : <?= $data['pendidikanayah'] ?></li>
                            <li>Pekerjaan : <?= $data['pekerjaanayah'] ?></li>
                            <li>Penghasilan Bulanan : <?= $data['penghasilanayah'] ?></li>
                            <li>Berkebutuhan Khusus : <?= $data['berkebutuhankhususayah'] ?></li>
                            
                        </ul>
                        <?php endforeach; ?>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        <h5>Data Ibu Kandung</h5>
                    </div>
                    <div class="card-body">
                        <?php
                        include 'dbkoneksi.php';
                        $dataibu = mysqli_query($koneksi, "SELECT * from dataibu");
                        ?>

                        <?php foreach ($dataibu as $data): ?>
                        <ul>
                            <li>Nama Ibu Kandung : <?= $data['namaibu'] ?></li>
                            <li>Tahun Lahir : <?= $data['tahunlahiribu'] ?></li>
                            <li>Pendidikan : <?= $data['pendidikanibu'] ?></li>
                            <li>Pekerjaan : <?= $data['pekerjaanibu'] ?></li>
                            <li>Penghasilan Bulanan : <?= $data['penghasilanibu'] ?></li>
                            <li>Berkebutuhan Khusus : <?= $data['berkebutuhankhususibu'] ?></li>
                        
                        </ul>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>