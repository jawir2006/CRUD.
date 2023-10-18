<?php
$koneksi = new mysqli('localhost', 'root', '', 'Dimas')
or die(mysqli_eror($koneksi));

if (isset($_POST['simpan'])){
    $idPasien = $_POST['idPasien'];
    $nmPasien = $PPOST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $koneksi->query("INSERT INTO pasien (idPasien, nmPasien, jk, alamat) values('$idPasien', '$nmPasien', '$jk', '$alamat')");

}

if (isset($_GET['simpan'])){
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM pasien where idPasien ='$idPasien')");
    header('location:pasien.php');
}
?>