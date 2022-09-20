<?php
    include'koneksi.php'
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
            <p class="tab">Data Barang</p>
        </div>

        <a href="createdatbar.html" class="new">CREATE NEW</a>

        <table>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Jumlah Total</th>
                <th>Jumlah Tersedia</th>
                <th>Kondisi</th>
                <th>Action</th>
            </tr>

         

            <?php
                $sql = "SELECT * FROM databarang";
                $query = mysqli_query($connect,$sql);

                while ($datbar = mysqli_fetch_array($query)){
                    echo "
                    <tr>
                        <td>$datbar[Kode_Barang]</td>
                        <td>$datbar[Nama_Barang]</td>
                        <td>$datbar[Jenis]</td>
                        <td>$datbar[Jumlah_Total]</td>
                        <td>$datbar[Jumlah_Tersedia]</td>
                        <td>$datbar[Kondisi]</td>
                        <td>
                            <a href='formedit.php?Kode_Barang=".$datbar['Kode_Barang']."'>Edit</a>
                            /
                            <a href='hapus.php?Kode_Barang=".$datbar['Kode_Barang']."'>Hapus</a>
                        </td>
                    </tr>
                    ";
                }
            ?>
        </table>
    </div>
</body>
</html>