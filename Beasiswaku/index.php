<?php
    session_start();
    
    if(isset($_SESSION['username'])and isset($_SESSION['level'])){
        if($_SESSION['level'] == '1'){
            header("location: landingAdmin.php");
        } else {
            header("location: landingUser.php");
        }
    } 
?>
<html>

<head>
    <title>Beasiswaku</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/index.css">
    <script>
        $(document).ready(function () {
            $("a").on('click', function (event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function () {
                        window.location.hash = hash;
                    });
                } 
            });
        });
    </script>
</head>

<body>
    <nav class="navbar navbar-expand-sm fixed-top pl-5 navigasi" style="opacity:0.75">
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
                            <a class=" nav-link js-scroll-trigger text" href="index.php">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class=" nav-link js-scroll-trigger text" href="loginUser.php">Login</a>
                        </li>
                        <li class="nav-item ">
                            <a class=" nav-link js-scroll-trigger text btn btn-outline-dark " href="formregister.php">Daftar Sekarang!</a>
                        </li>
                </div>
            </nav>
        </div>
    </nav>
    <header class="gambar text-center text-black d-flex" id="about" >
        <div class="container my-auto" >
            <div class="row">
                <div class="col-lg-10 mx-auto">
                <img src="gambar/logoweb.png" width="30%" alt="logo" class="mb-3"/>
                    <h1 class="text-uppercase">
                        <strong>BeasiswaKu</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-10 mx-auto">
                    <h4 class="text-black mb-6">
                        BEASISWAKU adalah sebuah halaman web yang berisikan Daftar beasiswa yang ada di Indonesia maupun Luar Negeri. Beasiswa ini di tujukan untuk Mahsiswa-mahasiswa Indonesia agar dapat mempermudah mendapatkan informasi tentang beasiswa.</h4>
                </div>
            </div>
        </div>
    </header>
    <section  id="interest">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto text-center">
                    <h2 class="section-heading text-white">Bantuan</h2>
                    <hr class="light my-4">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-5 mx-auto text-center d-flex justify-content-center flex-column align-items-center">
                            <div class="post ">
                                <img src="gambar/beasiswa.png">
                                <div>
                                    <h4 class="text-white" >Pendaftaran Beasiswa</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 mx-auto text-center d-flex justify-content-center flex-column align-items-center">
                            <div class="post">
                                <img src="gambar/callcenter.png" alt="">
                                <div>
                                    <h4 class="text-white" >Layanan Informasi dan Bantuan </h4>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="copyright bg-dark text-center text-white">
        <div class="container">
            <small>Email : septian9caesar@gmail.com - Instagram : @septiancf - Contact Me : +62 812-3980-3900</small>
        </div>
    </div>

</body>

</html>