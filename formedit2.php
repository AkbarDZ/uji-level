<?php
    include 'koneksi.php';

    $Id_Siswa = $_GET['Id_Siswa'];
    $sql = "SELECT * FROM datasiswa WHERE Id_Siswa = '$Id_Siswa'";
    $query = mysqli_query($connect, $sql);
    $datsis = mysqli_fetch_assoc($query);

    if(mysqli_num_rows($query) < 1){
        die("data tidak ditemukan");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz@8..144&display=swap" rel="stylesheet">
</head>
<body>

<div class="divsatu">
        <div>
            <i class="uil uil-user-circle"></i>
            <p class="merk">INVtek</p>
        </div>

        <a href="inventori.php" class="dasbor">
            <i class="uil uil-dashboard" id="db"></i>
            Dashboard
        </a>

        <a href="databarang.php" class="dasbor2">
            <i class="uil uil-box" id="db2"></i>
            Data Barang
        </a>

        <a href="datasiswa.php" class="dasbor3">
            <i class="uil uil-server-alt" id="db3"></i>
            Data Siswa
        </a>
    </div>

    <div class="divdua">
        <div class="tabs">
            <p class="tab">Edit/Data Siswa</p>
        </div>

        <form action="edit.php" method="post">
                <div class="inp"><p class="inplist">ID Siswa : <input type="varchar" name="Id_Siswa" required="required" 
                value = "<?php echo $datsis['Id_Siswa']?>" ></p>
                <p class="inplist">Nama : <input type="text" name="Nama" required="required" 
                value = "<?php echo $datsis['Nama']?>" ></p>
                <p class="inplist">Kelas : <input type="varchar" name="Kelas" required="required" 
                value = "<?php echo $datsis['Kelas']?>" ></p>
                <p class="inplist">Alamat : <input type="varchar" name="Alamat" required="required" 
                value = "<?php echo $datsis['Alamat']?>" ></p>
                <p class="inplist">No Telp : <input type="number" name="No_Telp" required="required" 
                value = "<?php echo $datsis['No_Telp']?>" ></p>
            <a href="datasiswa.php" class="cancel3">CANCEL</a>
            <input type="submit" name="simpan2" value="APPLY" class="create3">
        </form>
    </div>

</body>
</html>