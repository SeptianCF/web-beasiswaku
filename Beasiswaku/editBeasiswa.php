<?php
/***** Include db connection file *****/
include 'connection/connection.php';

/***** QUERY TO GET SPECIFIC ITEM *****/
$beasiswa_id = $_GET["id"]; // get id_barang from url

$query = "SELECT * FROM beasiswa WHERE beasiswa_id = $beasiswa_id";
$result = mysqli_query($con, $query);

$item = ''; // query result holder variable
if(mysqli_num_rows($result) == 1) {
    $item = mysqli_fetch_assoc($result);
} else {
    echo "Barang tidak ditemukan";
}
?>
<html>
    <head>
        <title>Tambah Beasiswa</title>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
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
        <div class="container" style="margin-top: 100px;">
            <h2 class="mt-3 text-center">Form Tambah Barang</h2>
            <div class="row mt-5">
                <div class="col-md-2"></div>
                <div class="col-md-8">

                    <!-- We add value form query result to inputs -->

                    <form action="process/actionEditBeasiswa.php" method="POST" enctype="multipart/form-data">
                        
                        <!-- 
                            We still need id_barang to inform update query command
                            User doesn't need to know the id_barang, so make it hidden
                        -->
                        <input type="hidden" name="idBeasiswa" value="<?php echo $item["beasiswa_id"] ?>">
                        
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Beasiswa</label>
                            <div class="col-md-9">
                                <input type="text" name="namaBeasiswa" id="namaBeasiswa" class="form-control" placeholder="Nama Beasiswa" required
                                value="<?php echo $item["nama_beasiswa"] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Asal Pemberi Beasiswa</label>
                            <div class="col-md-9">
                                <input type="text" name="asalBeasiswa" id="asalBeasiswa" class="form-control" placeholder="Asal Pemberi Beasiswa" required 
                                value="<?php echo $item["asal_beasiswa"] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Jangka Waktu (Hari)</label>
                            <div class="col-md-9">
                                <input type="number" name="waktu" id="waktu" class="form-control" placeholder="Jangka Waktu" required  value="<?php echo $item["waktu"] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-md-3 col-form-label">Deskripsi</label>
                            <div class="col-md-9">
                                <textarea name="deskripsi" id="deskripsi" placeholder="Deskripsi Beasiswa" class="form-control" cols="5" rows="5"><?php echo $item["deskripsi"] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Gambar</label>
                            <div class="col-md-9">
                                <img src=gambar/<?php echo $item["gambar"] ?> height=25%>
                                <input type="hidden" name="gambar_lama" value="<?php echo $item["gambar"] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-9 offset-3">
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-md-4">
                                <!-- Back to home -->
                                <a name="backBtn" id="backBtn" class="btn btn-dark btn-block" href="tampilBeasiswa.php" role="button">Kembali</a>
                            </div>
                            <div class="col-md-4">
                                <!-- Clear form value using JS. Please check clearForm function -->
                                <button name="clearFormBtn" id="clearFormBtn" class="btn btn-warning btn-block" role="button" onclick="clearForm()">Clear</button>
                            </div>
                            <div class="col-md-4">
                                <!-- Input button to submit form. Please check href attribute -->
                                <input type="submit" name="tambah" class="btn btn-success btn-block" value="Update"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    <script>
        // clear form input
        function clearForm() {
            $('#namaBeasiswa').val('');
            $('#asalBeasiswa').val('');
            $('#waktu').val('');
            $('#deskripsi').val('');
            $('#gambar').val('');
        }
    </script>
    <body>
</html>