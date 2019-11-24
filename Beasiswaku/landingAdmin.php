<?php
    session_start();
    
    if(isset($_SESSION['username'])and isset($_SESSION['level'])){
        if($_SESSION['level'] == '2'){
            header("location: landingUser.php");
        }
    } else {
        header("location: index.php");
    }
?>
<html>
    <head>
        <title>System - Admin Landing</title>
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
        <section style="height: 100vh; background-image : url(gambar/backgroundUser3.jpg);" class="w-100 d-flex flex-column justify-content-center align-items-center">
        <img src="gambar/logoweb.png" width="15%" alt="logo" class="mb-3"/>
        <h1>Selamat Datang Admin!</h1>
        <h5>Apa yang ingin Anda Lakukan?</h5>
        <div>
            <a class="js-scroll-trigger btn btn-lg btn-outline-dark " href="tampilBeasiswa.php">Check Daftar Beasiswa</a>
            <a class="js-scroll-trigger btn btn-lg btn-outline-dark " href="tambahBeasiswa.php">Update Daftar Beasiswa</a>
            <a class="js-scroll-trigger btn btn-lg btn-outline-dark " href="daftarPendaftar.php">Daftar Pendaftar Beasiswa</a>
        </div>
    </section>
        </body>
</html>