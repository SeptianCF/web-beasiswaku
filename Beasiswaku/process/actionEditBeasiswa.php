<?php
// Include DB connection file
include '../connection/connection.php';

// Get the form update value
$beasiswaId = $_POST["idBeasiswa"];
$namaBeasiswa= $_POST["namaBeasiswa"];
$asalBeasiswa = $_POST["asalBeasiswa"];
$waktu = $_POST["waktu"];
$deskripsi = $_POST["deskripsi"];

// echo $beasiswaId.$namaBeasiswa.$asalBeasiswa.$waktu.$deskripsi;die();

// if(!$_FILES["gambar"]["name"]=="")
// { 
    $code=$_FILES["gambar"]["error"];
    if($code===0)
    {
        $nama_folder="../gambar";
        $tmp=$_FILES["gambar"]["tmp_name"];
        $nama_file=$_FILES["gambar"]["name"];
        $path="$nama_folder/$nama_file";
        $upload_check=false;
        $tipe_file=array("image/jpeg","image/jpg","image/png");
    
        if(!in_array($_FILES["gambar"]["type"],$tipe_file))
        {
            $error.="Cek kembali ekstensi file anda (.jpeg,.jpg,*.png)<br>";
            $upload_check=true;
        }
        if($upload_check==false)
        {
            unlink($_POST["gambar_lama"]);
        }
        if(!$upload_check and move_uploaded_file($tmp,$path))
        {
            $query = "update beasiswa set nama_beasiswa='$namaBeasiswa', asal_beasiswa='$asalBeasiswa', waktu='$waktu', deskripsi='$deskripsi', gambar='$path' WHERE beasiswa_id = '$beasiswaId'";
            mysqli_query($con, $query);
            header("Location:../tampilBeasiswa.php");
        }
        else
        {
            $error="Upload gambar gagal";
            header("Location: ../tampilBeasiswa.php?error=$error");
        }
    }

    else if($code === 4) {
        $query = "update beasiswa set nama_beasiswa='$namaBeasiswa', asal_beasiswa='$asalBeasiswa', waktu='$waktu', deskripsi='$deskripsi' WHERE beasiswa_id = '$beasiswaId'";
        mysqli_query($con, $query);
        header("Location:../tampilBeasiswa.php");
    }
    else {
        print_r($_FILES);die();
    }
// }
// else
// {
//     $query = "update beasiswa set nama_beasiswa='$namaBeasiswa', asal_beasiswa='$asalBeasiswa', waktu='$waktu', deskripsi='$deskripsi' WHERE beasiswa_id = '$beasiswa_id'";
//     mysqli_query($con, $query);
//     header("Location:../tampilBeasiswa.php");
//     // print_r($_FILES);
//     // $error="Gagal";
//     // header("Location: ../tampilBeasiswa.php?error=$error");
// }


// close mysql connection
mysqli_close($con); 