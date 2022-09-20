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

        <a href="" class="dasbor">
            <i class="uil uil-dashboard" id="db"></i>
            Dashboard
        </a>

        <a href="databarang.php" class="dasbor2">
            <i class="uil uil-box" id="db2"></i>
            Data Barang
        </a>

        <a href="" class="dasbor3">
            <i class="uil uil-server-alt" id="db3"></i>
            Data Siswa
        </a>
    </div>

    <div class="divdua">
        <div class="tabs">
            <p class="tab">Edit/Data Barang</p>
        </div>

        <form action="simpan.php" method="post">
                <div class="inp"><p class="inplist">Kode Barang : <input type="varchar" name="Kode_Barang" required="required"></p>
                <p class="inplist">Nama Barang : <input type="text" name="Nama_Barang" required="required"></p>
                <p class="inplist">Jenis : <input type="text" name="Jenis" required="required"></p>
                <p class="inplist">Jumlah Total : <input type="number" name="Jumlah_Total" required="required"></p>
                <p class="inplist">Jumlah Tersedia : <input type="number" name="Jumlah_Tersedia" required="required"></p>
                <p class="inplist">Kondisi : <input type="text" name="Kondisi" required="required"></p></div>
            <a href="databarang.php" class="cancel">CANCEL</a>
            <input type="submit" name="simpan" value="CREATE" class="create">
        </form>
    </div>

</body>
</html>