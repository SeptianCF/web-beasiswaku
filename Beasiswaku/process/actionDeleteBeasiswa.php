<?php
// Include DB connection file
include '../connection/connection.php';

// Get id from form
$beasiswaId = $_GET["id"];

// Delete query command
// This is not a gud way to delete data. We have a better choice to handle this
// This method called hard delete
// The better one is soft delete. We just need a "flag" for each data
$query = "update beasiswa set flag=0 where beasiswa_id = $beasiswaId";

// Do delete query
if (mysqli_query($con, $query)) {
    header("Location:../tampilBeasiswa.php");
} else {
    $error = urldecode("Data tidak berhasil di delete");
    header("Location:../tampilBeasiswa.php?error=$error");
}

// close mysql connection
mysqli_close($con); 

?>