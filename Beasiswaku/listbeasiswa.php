<?php

include './connection/connection.php';

    session_start();
    
    if(isset($_SESSION['username'])and isset($_SESSION['level'])){
        if($_SESSION['level'] == '1'){
            header("location: landingAdmin.php");
        }
    } else {
        header("location: index.php");
    }

?>
<html>
    <head>
        <title>List Daftar Beasiswa</title>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="css/index.css">
        </head>
        <body class="mt-5">
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

        <div class="row">
            <div class="col-8 pt-5 pl-5 pb-5 pr-4">
            <?php
                $result = mysqli_query($con, "SELECT * FROM beasiswa where flag=1");
                
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $beasiswaid = $row["beasiswa_id"];
                        $namabeasiswa = $row["nama_beasiswa"];
                        $asalbeasiswa = $row["asal_beasiswa"];
                        $deskripsi = $row["deskripsi"];
                        $gambar = $row["gambar"];

            ?>
                <div class="container-fluid shadow bg-white p-4 mb-3">
                    <div class="row">
                    <div class="col-3">
                                <img src="upload/<?=$gambar?>" alt="Gambar Category" class="w-100">
                            </div>
                        <div class="col-9">
                            <a href="formpendaftaran.php" class="link-decoration">
                                <h5><?=$namabeasiswa?></h5>
                            </a>
                            <hr>
                            <span class="text-success"><?=$asalbeasiswa?> </span>
                            -
                            <!-- <span class="text-primary"> Dipost pada:</span> -->
                            <p class="par"><?=$deskripsi?></p>
                            <form action="formpendaftaran.php" method="post">
                            <input type="hidden" name="id_beasiswa" value="<?php echo $beasiswaid ?>">
                            <input type="submit" name="submit" value="Daftar">
                            </form>
                            <!-- <a href="formpendaftaran.php"><button>Daftar</button></a> -->
                            <!-- <i class="fas fa-hand-holding-usd mr-2 text-dark"></i>
                            <span>IDR 24213</span>
                            <i class="far fa-file-alt ml-3 mr-2 text-dark"></i>
                            <span>5 Pelamar</span>
                            <i class="far fa-calendar-alt ml-3 mr-2 text-dark"></i>
                            <span>Pendaftaran ditutup pada: <span class="text-danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod consequuntur non optio voluptatibus amet saepe, provident tenetur minus voluptatum quos autem neque asperiores distinctio quia doloribus obcaecati soluta corporis perferendis.</span></span> -->
                        </div>
                    </div>
                </div>
            <?php
                    }
                }
            ?>
            </div>
            <div class="col-4 pt-5 pl-4 pb-5 pr-5">
                <div class="container-fluid shadow bg-white p-4">
                    <h4>Halaman Daftar Beasiswa</h4>
                    <hr>
                    <p>
                        Halaman ini menampilkan daftar beasiswa yang bisa anda ikuti beserta nama instansi yang memberi beasiswa tersebut.
                    </p>
                    <p>
                        <strong>Time to Start!</strong>
                    </p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        $(document).ready(function () {
            $(".par").each(function(i){
                len=$(this).text().length;
                    if(len>300)
                {
                    $(this).text($(this).text().substr(0,300)+'...')
                }
            })
        })
    </script>
    </body>
</html>