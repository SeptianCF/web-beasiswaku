<?php

include '../connection/connection.php';

session_start();
    
$user = $_SESSION["username"];

$query = mysqli_query($con, "SELECT * FROM user WHERE username = '$user'");
$res = mysqli_fetch_assoc($query);

if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $lahir = $_POST['tempatlahir'];
    $tglLahir = $_POST['tanggallahir'];
    $asal = $_POST['asalsekolah'];
    $kelamin = $_POST['jenisKelamin'];
    $NIM = $_POST['NIM'];
    $nilai = $_POST['nilai'];
    $anak = $_POST['anak'];
    $saudara = $_POST['jumlahSaudara'];
    $nama_ayah = $_POST['namaAyah'];
    $nama_ibu = $_POST['namaIbu'];
    $pk_ayah = $_POST['pekerjaanAyah'];
    $pk_ibu = $_POST['pekerjaanIbu'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    $provinsi = $_POST['provinsi'];
    $id_user = $res["user_id"];
    $beasiswaid =$_POST["id_beasiswa"];


    
                    
    
    $queryCheckNim = "SELECT * FROM siswa WHERE nomor_induk = '$NIM' ";
    $checkResultNim = mysqli_query($con, $queryCheckNim);

    if (mysqli_num_rows($checkResultNim) == 0) {
        $query = "INSERT INTO `siswa`(`nama`,`tempat_lahir`,`tanggal_lahir`,`asal_sekolah`,`jenis_kelamin`,`nomor_induk`,`nilai`,`anak_ke`,`jumlah_saudara`,`nama_ayah`,`nama_ibu`,`pekerjaan_ayah`,`pekerjaan_ibu`,`telepon`,`alamat`,`provinsi`,`user_user_id`) VALUES ('$nama','$lahir','$tglLahir','$asal','$kelamin','$NIM','$nilai','$anak','$saudara','$nama_ayah','$nama_ibu','$pk_ayah','$pk_ibu','$telepon','$alamat','$provinsi','$id_user')";
        mysqli_query($con, $query);
        $idsiswa = mysqli_insert_id($con);

        $query2 = "INSERT INTO registrasi(`beasiswa_beasiswa_id`,`siswa_siswa_id`) VALUES ('$beasiswaid','$idsiswa')";
        mysqli_query($con, $query2);

        header("Location: ../tampilregister.php");
    } else {
        echo "<script>alert('NIM sudah digunakan!'); window.location = '../listbeasiswa.php';</script>";
    }
    // $queryCheckEmail = "SELECT email FROM user WHERE email = '$email'";
    // $checkResultEmail = mysqli_query($con, $queryCheckEmail);

    // if (mysqli_num_rows($checkResultUsername) == 0) {
    //     if (mysqli_num_rows($checkResultEmail) == 0) {
    //         if (strlen($username) >= 6) {
    //             if (strlen($password) >= 6) {
    //                 $query = "INSERT INTO `user`(`name`,`email`,`username`,`password`,`phone`,`level`) VALUES ('$nama', '$email', '$username', '$password', '$telepon', '3')";
    //                 mysqli_query($con, $query);
    //                 header("Location: ../login.php");
    //             }
    //             else {
    //                 echo "<script>alert('Password minimal 6 karakter!'); window.location = '../register-freelancer.php';</script>";
    //             }
    //         }
    //         else {
    //             echo "<script>alert('Username minimal 6 karakter!'); window.location = '../register-freelancer.php';</script>";
    //         }
    //     }
    //     else {
    //         echo "<script>alert('Email sudah digunakan!'); window.location = '../register-freelancer.php';</script>";
    //     }
    // }
    // else {
        // echo "<script>alert('Username sudah digunakan!'); window.location = '../register-freelancer.php';</script>";
    // }
}

mysqli_close($con);
?>