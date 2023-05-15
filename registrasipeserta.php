<?php
include 'dbkoneksi.php';
?>
<html>
    <head>
        <title>FORMULIR PESERTA DIDIK</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <style>
            .warning {
                color: #FF0000;
            }
        </style>
    </head>
    <body>
        <?php
        $error_jenispendaftaran = "";
        $error_tglmasuksekolah = "";
        $error_NIS = "";
        $error_nopesertaujian = "";
        $error_pernahPAUD = "";
        $error_pernahTK = "";
        $error_noseriskhun = "";
        $error_noseriijazah = "";
        $error_hobi = "";
        $error_cita_cita = "";
        $error_tanggalpengisian = "";
    
        $jenispendaftaran = "";
        $tglmasuksekolah = "";
        $NIS = "";
        $nopesertaujian = "";
        $pernahPAUD = "";
        $pernahTK = "";
        $noseriskhun = "";
        $noseriijazah = "";
        $hobi = "";
        $cita_cita = "";
        $tanggalpengisian = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["NIS"])) { 
                $error_NIS = "NIS Tidak Boleh Kosong";
            } else {
                $NIS = cekinput($_POST["NIS"]);
                if (!is_numeric($NIS)) {
                    $error_NIS = "NIS Hanya Boleh menggunakan Angka";
                }
            }

            if (empty($_POST["nopesertaujian"])) { 
                $error_nopesertaujian = "Nomor Peserta Ujian Tidak Boleh Kosong";
            } else {
                $nopesertaujian = cekinput($_POST["nopesertaujian"]);
                if (!is_numeric($nopesertaujian)) {
                    $error_nopesertaujian = "Nomor Peserta Ujian Hanya Boleh menggunakan Angka";
                }
            }

            if (empty($_POST["noseriskhun"])) { 
                $error_noseriskhun = "Nomor Seri SKHUN Tidak Boleh Kosong";
            } else {
                $noseriskhun = cekinput($_POST["noseriskhun"]);
                if (!is_numeric($noseriskhun)) {
                    $error_noseriskhun = "Nomor Seri SKHUN Hanya Boleh menggunakan Angka";
                }
            }

            if (empty($_POST["noseriijazah"])) { 
                $error_noseriijazah = "Nomor Seri Ijazah Tidak Boleh Kosong";
            } else {
                $noseriijazah = cekinput($_POST["noseriijazah"]);
                if (!is_numeric($noseriijazah)) {
                    $error_noseriijazah = "Nomor Seri Ijazah Hanya Boleh menggunakan Angka";
                }
            }
        }

        function cekinput($data) {
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <center>
                        <h2>FORMULIR PESERTA DIDIK</h2>
                        </center>
                        <p>  Tanggal: <?php echo $tanggalpengisian = date("Y-m-d"); ?> </p>                    
                    </div>
                    <div class="card-footer bg-dark text-white">
                        REGISTRASI PESERTA DIDIK
                    </div>
                    <div class="card-body">
                        <form method="post" action="prosesregistrasi.php">

                        <div class="form-group row">
                            <label for="jenispendaftaran" class="col-sm-2 col-form-label">Jenis Pendaftaran</label>
                            <div class="col-sm-10">
                                <input type="radio" name="jenispendaftaran" value="Siswa Baru">Siswa Baru</label>
                                <input type="radio" name="jenispendaftaran" value="Pindahan">Pindahan</label> 
                                <span class="warning" ><?php echo $error_jenispendaftaran; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tglmasuksekolah" class="col-sm-2 col-form-label">Tanggal Masuk Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" name="tglmasuksekolah" id="tglmasuksekolah" class="form-control <?php echo ($error_tglmasuksekolah !="" ? "is-invalid" : ""); ?>" placeholder="XX - XX - XXXX" value="<?php echo $tglmasuksekolah; ?>"> <span class="warning"><?php echo $error_tglmasuksekolah ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NIS" class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-10">
                                <input type="text" name="NIS" id="NIS" class="form-control <?php echo ($error_NIS !="" ? "is-invalid" : ""); ?>" placeholder="Nomor Induk Siswa" value="<?php echo $NIS; ?>"> <span class="warning"><?php echo $error_NIS ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="nopesertaujian" class="col-sm-2 col-form-label">Nomor Peserta Ujian</label>
                            <div class="col-sm-10">
                                <input type="text" name="nopesertaujian" id="nopesertaujian" class="form-control <?php echo ($error_nopesertaujian !="" ? "is-invalid" : ""); ?>" placeholder="No Peserta Ujian" value="<?php echo $nopesertaujian; ?>"> <span class="warning"><?php echo $error_nopesertaujian ?></span>
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-group row">
                            <label for="pernahPAUD" class="col-sm-2 col-form-label">Apakah Pernah Paud</label>
                            <div class="col-sm-10">
                                <input type="radio" name="pernahPAUD" value="Ya">Ya</label>
                                <input type="radio" name="pernahPAUD" value="Tidak">Tidak</label> 
                                <span class="warning" ><?php echo $error_pernahPAUD; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pernahTK" class="col-sm-2 col-form-label">Apakah Pernah TK</label>
                            <div class="col-sm-10">
                                <input type="radio" name="pernahTK" value="Ya">Ya</label>
                                <input type="radio" name="pernahTK" value="Tidak">Tidak</label> 
                                <span class="warning" ><?php echo $error_pernahTK; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noseriskhun" class="col-sm-2 col-form-label">No. Seri SKHUN Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="noseriskhun" id="noseriskhun" class="form-control <?php echo ($error_noseriskhun !="" ? "is-invalid" : ""); ?>" placeholder="SKHUN Sebelumnya" value="<?php echo $noseriskhun; ?>"> <span class="warning"><?php echo $error_noseriskhun ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="noseriijazah" class="col-sm-2 col-form-label">No. Seri Ijazah Sebelumnya</label>
                            <div class="col-sm-10">
                                <input type="text" name="noseriijazah" id="noseriijazah" class="form-control <?php echo ($error_noseriijazah !="" ? "is-invalid" : ""); ?>" placeholder="Seri Ijazah Sebelumnya" value="<?php echo $noseriijazah; ?>"> <span class="warning"><?php echo $error_noseriijazah ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hobi" class="col-sm-2 col-form-label "> Hobi </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="hobi">
                                <option value=""></option>
                                <option value="Olahraga"> Olahraga </option>
                                <option value="Kesenian"> Kesenian</option>
                                <option value="Membaca"> Membaca</option>
                                <option value="Menulis"> Menulis </option>
                                <option value="Traveling"> Traveling </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_hobi; ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="cita_cita" class="col-sm-2 col-form-label "> Cita-Cita </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="cita_cita">
                                <option value=""></option>
                                <option value="PNS"> PNS </option>
                                <option value="TNI/POLRI"> TNI/POLRI</option>
                                <option value="Guru/Dosen"> Guru/Dosen</option>
                                <option value="Dokter"> Dokter </option>
                                <option value="Politikus"> Politikus </option>
                                <option value="Wiraswasta"> Wiraswasta </option>
                                <option value="Seni/Lukis/Artis/Sejenis"> Seni/Lukis/Artis/Sejenis </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_cita_cita; ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-success">Next</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
