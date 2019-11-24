<?php

    $beasiswaid = $_POST["id_beasiswa"];
    // echo $beasiswaid;die();
?>
<html>
<head>
    <title>Form Register</title>
        <link rel="stylesheet" href="css/datepicker.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="js/datepicker.min.js"></script>
        <link rel="stylesheet" href="css/form.css">
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-sm fixed-top pl-5 navigasi shadow"                   style="opacity:0.75">
            <div class="container-fluid">
                <a class="navbar-brand text-uppercase body"  href="index.php"><h3>BeasiswaKu</h3></a>
                    <nav class="navbar navbar-expand-sm header">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="smooth-scroll navbar-nav ml-auto">
                            <li class="nav-item border-right">
                                <a class=" nav-link js-scroll-trigger text" href="index.php">Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class=" nav-link js-scroll-trigger text" href="logOut.php">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </nav>
        <div class="container mt-5">
            <br>
            <h2 class="mt-3 text-center">Form Pendaftaran</h2>
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <!-- form handling in process/actionAddBarang -->
                    <form action="process/daftarproses.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_beasiswa" value="<?php echo $beasiswaid ?>">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Nama</label>
                            <div class="col-md-9">
                                <input type="text" name="nama" id="namaSiswa" class="form-control" placeholder="Nama" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Tempat Lahir</label>
                            <div class="col-md-9">
                                <input type="text" name="tempatlahir" id="tempatLahir" class="form-control" placeholder="Tempat Lahir" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-md-9">
                            <input type="text" data-toggle="datepicker" name="tanggallahir"id="tanggalLahir" placeholder="Tanggal Lahir" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Asal Sekolah</label>
                            <div class="col-md-9">
                                <input type="text" name="asalsekolah" id="asalSekolah" class="form-control" placeholder="Asal Sekolah" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-md-9">
                                <label class="radio-inline">
                                    <input type="radio" name="jenisKelamin" id="jenisKelamin" >Laki Laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jenisKelamin" id="jenisKelamin">Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Nomor Induk</label>
                            <div class="col-md-9">
                                <input type="number" name="NIM" id="NIM" class="form-control" placeholder="NIM" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Rata rata Nilai IP</label>
                            <div class="col-md-9">
                                <input type="number" name="nilai" id="nilai" class="form-control" placeholder="Rata-Rata Nilai IP" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Anak Ke-</label>
                            <div class="col-md-9">
                                <input type="number" name="anak" id="anakKe" class="form-control" placeholder="Anak Ke-" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Jumlah Saudara</label>
                            <div class="col-md-9">
                                <input type="number" name="jumlahSaudara" id="jumlahSaudara" class="form-control" placeholder="Jumlah Saudara" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Ayah</label>
                            <div class="col-md-9">
                                <input type="text" name="namaAyah" id="namaAyah" class="form-control" placeholder="Nama Ayah" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Ibu</label>
                            <div class="col-md-9">
                                <input type="text" name="namaIbu" id="namaIbu" class="form-control" placeholder="Nama Ibu" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pekerjaan Ayah</label>
                            <div class="col-md-9">
                                <input type="text" name="pekerjaanAyah" id="pekerjaanAyah" class="form-control" placeholder="Pekerjaan Ayah" required>
                            </div>
                        </div> 
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Pekerjaan Ibu</label>
                            <div class="col-md-9">
                                <input type="text" name="pekerjaanIbu" id="pekerjaanIbu" class="form-control" placeholder="Pekerjaan Ibu" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Telepon</label>
                            <div class="col-md-9">
                                <input type="number" name="telepon" id="telepon" class="form-control" placeholder="Telepon" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Alamat</label>
                            <div class="col-md-9">
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" cols="5" rows="5"></textarea>
                            </div>
                        </div> 
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Provinsi</label>
                            <div class="col-md-9">
                                <input type="text" name="provinsi" id="provinsi" class="form-control" placeholder="Provinsi" required>
                            </div>
                        </div> 
                        <div class="form-group row mt-5">
                            <div class="col-md-4">
                                <!-- Back to home -->
                                <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="index.php" role="button">Kembali</a>
                            </div>
                            <div class="col-md-4">
                                <!-- Clear form value using JS. Please check clearForm function -->
                                <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button>
                            </div>
                            <div class="col-md-4">
                                <!-- Input button to submit form. Please check href attribute -->
                                <input type="submit" name="daftar" class="btn btn-success btn-block" value="Daftar"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
        <script>
            $(function() {
            $('[data-toggle="datepicker"]').datepicker({
                format: 'yyyy-mm-dd',
                autoHide: true,
                zIndex: 2048,
            })
        })
        
        // clear form input
        function clearForm() {
            $('#namaSiswa').val('');
            $('#tempatLahir').val('');
            $('#tanggalLahir').val('');
            $('#asalSekolah').val('');
            $('#jenisKelamin').val('');
            $('#nilai').val('');
            $('#anakKe').val('');
            $('#jumlahSaudara').val('');
            $('#namaAyah').val('');
            $('#namaIbu').val('');
            $('#pekerjaanAyah').val('');
            $('#pekerjaanIbu').val('');
            $('#telepon').val('');
            $('#alamat').val('');
            $('#provinsi').val('');

        }
    </script>
    </body>
</html>