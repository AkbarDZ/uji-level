<?php
    include 'koneksi.php';

    $Kode_Barang = $_GET['Kode_Barang'];
    $sql = "SELECT * FROM databarang WHERE Kode_Barang = '$Kode_Barang'";
    $query = mysqli_query($connect, $sql);
    $datbar = mysqli_fetch_assoc($query);

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
            <p class="tab">Edit/Data Barang</p>
        </div>

        <form action="edit.php" method="post">
                <div class="inp"><p class="inplist">Kode Barang : <input type="varchar" name="Kode_Barang" required="required" 
                value = "<?php echo $datbar['Kode_Barang']?>" ></p>
                <p class="inplist">Nama Barang : <input type="text" name="Nama_Barang" required="required" 
                value = "<?php echo $datbar['Nama_Barang']?>" ></p>
                <p class="inplist">Jenis : <input type="text" name="Jenis" required="required" 
                value = "<?php echo $datbar['Jenis']?>" ></p>
                <p class="inplist">Jumlah Total : <input type="number" name="Jumlah_Total" required="required" 
                value = "<?php echo $datbar['Jumlah_Total']?>" ></p>
                <p class="inplist">Jumlah Tersedia : <input type="number" name="Jumlah_Tersedia" required="required" 
                value = "<?php echo $datbar['Jumlah_Tersedia']?>" ></p>
                <p class="inplist">Kondisi : <input type="text" name="Kondisi" required="required"
                value = "<?php echo $datbar['Kondisi']?>" ></p></div>
            <a href="databarang.php" class="cancel">CANCEL</a>
            <input type="submit" name="simpan" value="APPLY" class="create">
        </form>
    </div>

</body>
</html>