<?php
$koneksi = new mysqli('localhost', 'root', '', 'pasien') or die(mysqli_error($koneksi));


if(isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $Program_Jaminan = $_POST['Program_Jaminan'];
    $koneksi->query("INSERT INTO pasien values('$idPasien', '$nmPasien', '$jk', '$alamat', '$Program_Jaminan')");

    header('location:pasien.php');
}


if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien = '$idPasien'");
    header("location:pasien.php");
} 

if(isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $Program_Jaminan = $_POST['Program_Jaminan'];

    $koneksi->query("UPDATE pasien SET idPasien='$idPasien',nmPasien='$nmPasien',jk='$jk',alamat='$alamat',Program_Jaminan='$Program_Jaminan' WHERE idPasien='$idPasien'");
    header("location:pasien.php");
}
?>