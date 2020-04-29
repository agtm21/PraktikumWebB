<?php
include 'connect.php';
$nim = $_POST['nim'];

$del = mysqli_query($conn,"DELETE FROM mahasiswa WHERE nim='$nim'");
if(!$del)
{
    echo "Tidak Berhasil Diahpus";
}
header("Location:form_output.php");
?>