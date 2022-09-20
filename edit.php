<?php
    include 'koneksi.php';

    if(isset($_POST['simpan'])){
        $Kode_Barang = $_POST['Kode_Barang'];
        $Nama_Barang = $_POST['Nama_Barang'];
        $Jenis = $_POST['Jenis'];
        $Jumlah_Total = $_POST['Jumlah_Total'];
        $Jumlah_Tersedia = $_POST['Jumlah_Tersedia'];
        $Kondisi = $_POST['Kondisi'];

        $sql = "UPDATE databarang SET 
            Nama_Barang = '$Nama_Barang', Jenis = '$Jenis', Jumlah_Total = '$Jumlah_Total',
            Jumlah_Tersedia = '$Jumlah_Tersedia', Kondisi = '$Kondisi' WHERE Kode_Barang = '$Kode_Barang' ";
        $query = mysqli_query($connect,$sql);

        if ($query) {
            header ('Location: databarang.php');
        }else {
            header ('Location: edit.php?status=gagal');
        }
    }

    if(isset($_POST['simpan2'])){
        $Id_Siswa = $_POST['Id_Siswa'];
        $Nama = $_POST['Nama'];
        $Kelas = $_POST['Kelas'];
        $Alamat = $_POST['Alamat'];
        $No_Telp = $_POST['No_Telp'];

        $sql = "UPDATE datasiswa SET 
            Nama = '$Nama', Kelas = '$Kelas', Alamat = '$Alamat',
            No_Telp = '$No_Telp' WHERE Id_Siswa = '$Id_Siswa' ";
        $query = mysqli_query($connect,$sql);

        if ($query) {
            header ('Location: datasiswa.php');
        }else {
            header ('Location: edit.php?status=gagal');
        }
    }
?>