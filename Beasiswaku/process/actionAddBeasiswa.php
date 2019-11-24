<?php
// Include DB connection file
include '../connection/connection.php';

//get the form value
$namaBeasiswa = $_POST["namaBeasiswa"];
$asalBeasiswa= $_POST["asalBeasiswa"];
$waktu = $_POST["waktu"];
$deskripsi = $_POST["deskripsi"];

$code=$_FILES["gambar"]["error"];
    if($code===0){
        $nama_folder="../upload";
        $tmp=$_FILES["gambar"]["tmp_name"];
        $nama_file=$_FILES["gambar"]["name"];
        $path="$nama_folder/$nama_file";
        $upload_check=false;
        $tipe_file=array("image/jpeg","image/jpg","image/png");

        if(!in_array($_FILES["gambar"]["type"],$tipe_file)){
            $error.="Cek kembali ekstensi file anda (.jpeg,.jpg,*.png)<br>";
            $upload_check=true;
            header("Location: ../tambahBeasiswa.php?error=$error");
        }
        
        if(file_exists($path)){
            $error.="File dengan nama yang sama sudah tersimpan, coba lagi<br>";
            $upload_check=true;
            header("Location: ../tambahBeasiswa.php?error=$error");
        }
        if(!$upload_check AND move_uploaded_file($tmp,$path)){ 
            $query="insert into beasiswa (nama_beasiswa, asal_beasiswa, deskripsi, gambar, waktu) values ('$namaBeasiswa','$asalBeasiswa','$deskripsi','$path', '$waktu')";
            
            if(mysqli_query($con, $query)){
                header("Location: ../tampilBeasiswa.php");
            }else{
                $error=urlencode("Data tidak berhasil ditambahkan");
                header("Location: ../tambahBeasiswa.php?error=$error");
            }
            
            mysqli_close($con);      
        }
        else{
            $error="Upload Gambar Gagal! Cek kembali ekstensi file anda (.jpeg,.jpg,*.png)<br>";
            header("Location: ../tambahBeasiswa.php?error=$error");
        }
    }

    ?>