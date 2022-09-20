<?php
    include 'koneksi.php';
    
    if(isset($_POST['simpan'])){
        $Kode_Barang = $_POST['Kode_Barang'];
        $Nama_Barang = $_POST['Nama_Barang'];
        $Jenis = $_POST['Jenis'];
        $Jumlah_Total = $_POST['Jumlah_Total'];
        $Jumlah_Tersedia = $_POST['Jumlah_Tersedia'];
        $Kondisi = $_POST['Kondisi'];

        $sql = "INSERT INTO databarang (Kode_Barang, Nama_Barang, Jenis, Jumlah_Total, Jumlah_Tersedia, Kondisi) VALUES 
        ('$Kode_Barang','$Nama_Barang','$Jenis','$Jumlah_Total','$Jumlah_Tersedia','$Kondisi')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: databarang.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>