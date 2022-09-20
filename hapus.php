<?php
    include 'koneksi.php';

    if(isset($_GET['Kode_Barang'])){
        header ('Location: databarang.php');
    }

    $Kode_Barang = $_GET['Kode_Barang'];

    $sql = "DELETE FROM databarang WHERE Kode_Barang = '$Kode_Barang'";
    $query = mysqli_query($connect,$sql);

    if($query){
        header ('Location: databarang.php');
    }else {
        header ('Location: hapus.php?status=gagal');
    }
?>