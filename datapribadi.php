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
        $error_namalengkap = "";
        $error_jeniskelamin = "";
        $error_NISN = "";
        $error_NIK = "";
        $error_tempatlahir = "";
        $error_tgllahir = "";
        $error_agama = "";
        $error_berkebutuhankhusus = "";
        $error_alamat = "";
        $error_RT = "";
        $error_RW = "";
        $error_namadusun = "";
        $error_namakelurahan = "";
        $error_kecamatan = "";
        $error_kodepos = "";
        $error_tempattinggal = "";
        $error_transportasi = "";
        $error_noHP = "";
        $error_notelp = "";
        $error_email = "";
        $error_penerimaKIP = "";
        $error_noKIP = "";
        $error_kewarganegaraan = "";
        $error_namanegara = "";

        $namalengkap = "";
        $jeniskelamin = "";
        $NISN = "";
        $NIK = "";
        $tempatlahir = "";
        $tgllahir = "";
        $agama = "";
        $berkebutuhankhusus = "";
        $alamat = "";
        $RT = "";
        $RW = "";
        $namadusun = "";
        $namakelurahan = "";
        $kecamatan = "";
        $kodepos = "";
        $tempattinggal = "";
        $transportasi = "";
        $noHP = "";
        $notelp = "";
        $email = "";
        $penerimaKIP = "";
        $noKIP = "";
        $kewarganegaraan = "";
        $namanegara = "";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["NISN"])) { 
                $error_NISN = "NISN Tidak Boleh Kosong";
            } else {
                $NISN = cekinput($_POST["NISN"]);
                if (!is_numeric($NISN)) {
                    $error_NISN = "NISN Hanya Boleh menggunakan Angka";
                }
            }

            if (empty($_POST["NIK"])) { 
                $error_NIK = "NIK Tidak Boleh Kosong";
            } else {
                $NIK = cekinput($_POST["NIK"]);
                if (!is_numeric($NIK)) {
                    $error_NIK = "NIK Hanya Boleh menggunakan Angka";
                }
            }

            if (empty($_POST["noHP"])) { 
                $error_noHP = "Nomor HP Tidak Boleh Kosong";
            } else {
                $noHP = cekinput($_POST["noHP"]);
                if (!is_numeric($noHP)) {
                    $error_noHP = "Nomor HP Hanya Boleh menggunakan Angka";
                }
            }

            if (empty($_POST["email"])) { 
                $error_email = "Email Tidak Boleh Kosong";
            } else {
                $email = cekinput($_POST["email"]);
                if (!is_numeric($email)) {
                    $error_email = "Format Email Invalid";
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
                    <div class="card-header text-center">
                        <h2>FORMULIR PESERTA DIDIK</h2>
                    </div>
                    <div class="card-footer bg-dark text-white">
                        FORM DATA PRIBADI
                    </div>
                    <div class="card-body">
                        <form method="post" action="prosesdatapribadi.php">
                        <div class="form-group row">
                            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" name="namalengkap" id="namalengkap" class="form-control" <?php echo ($error_namalengkap !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namalengkap; ?>"> <span class="warning"><?php echo $error_namalengkap ?></span>
                            </div>
                        </div>
                        
                        <br>
                        <div class="form-group row">
                            <label for="jeniskelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                <input type="radio" name="jeniskelamin" value="Laki Laki">Laki-Laki</label>
                                <input type="radio" name="jeniskelamin" value="Perempuan">Perempuan</label> 
                                <span class="warning" ><?php echo $error_jeniskelamin; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="NISN" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-10">
                                <input type="text" name="NISN" id="NISN" class="form-control" <?php echo ($error_NISN !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $NISN; ?>"> <span class="warning"><?php echo $error_NISN ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="NIK" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                                <input type="text" name="NIK" id="NIK" class="form-control" <?php echo ($error_NIK !="" ? "is-invalid" : ""); ?>" placeholder="3524xxxxxxxx" value="<?php echo $NIK; ?>"> <span class="warning"><?php echo $error_NIK ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempatlahir" id="tempatlahir" class="form-control" <?php echo ($error_tempatlahir !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $tempatlahir; ?>"> <span class="warning"><?php echo $error_tempatlahir ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="tgllahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" name="tgllahir" id="tgllahir" class="form-control" <?php echo ($error_tgllahir !="" ? "is-invalid" : ""); ?>" placeholder="XX-XX-XXXX" value="<?php echo $tgllahir; ?>"> <span class="warning"><?php echo $error_tgllahir ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="agama">
                                <option value=""></option>
                                <option value="Islam"> Islam </option>
                                <option value="Kristen/Protestan"> Kristen/Protestan </option>
                                <option value="Katholik"> Katholik </option>
                                <option value="Hindu"> Hindu </option>
                                <option value="Budha"> Budha </option>
                                <option value="Konghucu"> Konghucu </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_agama; ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="berkebutuhankhusus" class="col-sm-2 col-form-label "> Berkebutuhan Khusus </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="berkebutuhankhusus">
                                <option value=""></option>
                                <option value="Tidak"> Tidak </option>
                                <option value="Netra (A)"> Netra (A) </option>
                                <option value="Rungu (B)"> Rungu (B) </option>
                                <option value="Grahita Ringan (C)"> Grahita Ringan (C) </option>
                                <option value="Grahita Sedang (C1)"> Grahita Sedang (C1) </option>
                                <option value="Daksa Ringan (D)"> Daksa Ringan (D) </option>
                                <option value="Laras (E)"> Laras (E) </option>
                                <option value="Wicara (F)"> Wicara (F) </option>
                                <option value="Tuna Ganda (G)"> Tuna Ganda (G) </option>
                                <option value="Hiper Aktif (H)"> Hiper Aktif (H) </option>
                                <option value="Cerdas Istimewa (I)"> Cerdas Istimewa (I) </option>
                                <option value="Bakat Istimewa (J)"> Bakat Istimewa (J) </option>
                                <option value="Kesulitan Belajar (K)"> Kesulitan Belajar (K) </option>
                                <option value="Narkoba (N)"> Narkoba (N) </option>
                                <option value="Indigo (O)"> Indigo (O) </option>
                                <option value="Down Syndrom (P)"> Down Syndrom (P) </option>
                                <option value="Autis (Q)"> Autis (Q) </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_berkebutuhankhusus; ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" id="alamat" class="form-control" <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $alamat; ?>"> <span class="warning"><?php echo $error_alamat ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="RT" class="col-sm-2 col-form-label">RT</label>
                            <div class="col-sm-10">
                                <input type="text" name="RT" id="RT" class="form-control" <?php echo ($error_RT !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $RT; ?>"> <span class="warning"><?php echo $error_RT ?></span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="RW" class="col-sm-2 col-form-label">RW</label>
                            <div class="col-sm-10">
                                <input type="text" name="RW" id="RW" class="form-control" <?php echo ($error_RW !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $RW; ?>"> <span class="warning"><?php echo $error_RW ?></span>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
                            <label for="namadusun" class="col-sm-2 col-form-label">Nama Dusun</label>
                            <div class="col-sm-10">
                                <input type="text" name="namadusun" id="namadusun" class="form-control" <?php echo ($error_namadusun !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namadusun; ?>"> <span class="warning"><?php echo $error_namadusun ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="namakelurahan" class="col-sm-2 col-form-label">Nama Kelurahan/Desa</label>
                            <div class="col-sm-10">
                                <input type="text" name="namakelurahan" id="namakelurahan" class="form-control" <?php echo ($error_namakelurahan !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namakelurahan; ?>"> <span class="warning"><?php echo $error_namakelurahan ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="kecamatan" class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-10">
                                <input type="text" name="kecamatan" id="kecamatan" class="form-control" <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $kecamatan; ?>"> <span class="warning"><?php echo $error_kecamatan ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="kodepos" class="col-sm-2 col-form-label">Kode Pos</label>
                            <div class="col-sm-10">
                                <input type="text" name="kodepos" id="kodepos" class="form-control" <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" placeholder="xxxxxx" value="<?php echo $kodepos; ?>"> <span class="warning"><?php echo $error_kodepos ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="tempattinggal" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="tempattinggal">
                                <option value=""></option>
                                <option value="Bersama Orang Tua"> Bersama Orang Tua </option>
                                <option value="Wali"> Wali </option>
                                <option value="Kos"> Kos </option>
                                <option value="Asrama"> Asrama </option>
                                <option value="Panti Asuhan"> Panti Asuhan </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_tempattinggal; ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="transportasi" class="col-sm-2 col-form-label "> Moda Transportasi </label>
                            <div class="col-sm-10">
                                <select class="col-sm-2 form-select" name="transportasi">
                                <option value=""></option>
                                <option value="Jalan Kaki"> Jalan Kaki </option>
                                <option value="Kendaraan Pribadi"> Kendaraan Pribadi </option>
                                <option value="Kendaraan Umum/Angkot/Pete-Pete"> Kendaraan Umum/Angkot/Pete-Pete </option>
                                <option value="Jemputan Sekolah"> Jemputan Sekolah </option>
                                <option value="Kereta Api"> Kereta Api </option>
                                <option value="Ojek"> Ojek </option>
                                <option value="Andong/Bedi/Sado/Dokar/Delman/Becak"> Andong/Bedi/Sado/Dokar/Delman/Becak </option>
                                <option value="Perahu Penyebrangan/Rakit/Getek"> Perahu Penyebrangan/Rakit/Getek </option>
                                <option value="Lainnya"> Lainnya </option>
                                </select>
                                <span class="warning" ><?php echo $error_transportasi; ?></span>
                            </div>
                        </div> <br>
                        
                        <div class="form-group row">
                            <label for="noHP" class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" name="noHP" id="noHP" class="form-control" <?php echo ($error_noHP !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $noHP; ?>"> <span class="warning"><?php echo $error_noHP ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="notelp" class="col-sm-2 col-form-label">Nomor Telp</label>
                            <div class="col-sm-10">
                                <input type="text" name="notelp" id="notelp" class="form-control" <?php echo ($error_notelp !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $notelp; ?>"> <span class="warning"><?php echo $error_notelp ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email Pribadi</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control" <?php echo ($error_email !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="penerimaKIP" class="col-sm-2 col-form-label">Penerima KPS/PKH/KIP</label>
                            <div class="col-sm-10">
                                <input type="radio" name="penerimaKIP" value="Ya">Ya</label>
                                <input type="radio" name="penerimaKIP" value="Tidak">Tidak</label> 
                                <span class="warning" ><?php echo $error_penerimaKIP; ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="noKIP" class="col-sm-2 col-form-label">Nomor KPS/PKH/KIP</label>
                            <div class="col-sm-10">
                                <input type="text" name="noKIP" id="noKIP" class="form-control" <?php echo ($error_noKIP !="" ? "is-invalid" : ""); ?>" placeholder="XX" value="<?php echo $noKIP; ?>"> <span class="warning"><?php echo $error_noKIP ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="kewarganegaraan" class="col-sm-2 col-form-label">Kewarganegaraan</label>
                            <div class="col-sm-10">
                                <input type="radio" name="kewarganegaraan" value="Indonesia (WNI)">Indonesia (WNI)</label>
                                <input type="radio" name="kewarganegaraan" value="Asing (WNA)">Asing (WNA)</label> 
                                <span class="warning" ><?php echo $error_kewarganegaraan; ?></span>
                            </div>
                        </div> <br>

                        <div class="form-group row">
                            <label for="namanegara" class="col-sm-2 col-form-label">Nama Negara</label>
                            <div class="col-sm-10">
                                <input type="text" name="namanegara" id="namanegara" class="form-control" <?php echo ($error_namanegara !="" ? "is-invalid" : ""); ?>" placeholder="" value="<?php echo $namanegara; ?>"> <span class="warning"><?php echo $error_namanegara ?></span>
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