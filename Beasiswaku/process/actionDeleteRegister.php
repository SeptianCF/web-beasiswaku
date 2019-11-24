<?php
// Include DB connection file
include '../connection/connection.php';

// Get id from form
$register_id = $_GET["id"];
// Delete query command
// This is not a gud way to delete data. We have a better choice to handle this
// This method called hard delete
// The better one is soft delete. We just need a "flag" for each data
$query = "update registrasi set flag=0 where id_registrasi = $register_id";

// Do delete query
if (mysqli_query($con, $query)) {
    header("Location:../tampilRegister.php");
} else {
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../tampilRegister.php?error=$error");
}

// close mysql connection
mysqli_close($con); 

?>