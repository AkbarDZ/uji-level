<?php
    include 'koneksi.php';

    if(isset($_POST['simpan2'])){
        $Id_Siswa = $_POST['Id_Siswa'];
        $Nama = $_POST['Nama'];
        $Kelas = $_POST['Kelas'];
        $Alamat = $_POST['Alamat'];
        $No_Telp = $_POST['No_Telp'];

        $sql = "INSERT INTO datasiswa (Id_Siswa, Nama, Kelas, Alamat, No_Telp) VALUES 
        ('$Id_Siswa','$Nama','$Kelas','$Alamat','$No_Telp')";
        $query = mysqli_query($connect, $sql);

        if($query){
            header('Location: datasiswa.php');
        }else{
            header('Location: simpan.php?status=gagal');
        }
    }
?>