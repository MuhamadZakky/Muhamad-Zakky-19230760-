<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Pertemuan 2
        $nim="19230760";
        $nama="Muhamad Zakky";
        $kelas="19.2A.12";

        echo"Nim Saya = $nim<br>";
        echo"Nama Saya = $nama<br>";
        echo"Kelas Saya = $kelas<br>";
        
    ?>

</body>
</html>
<form method="post" action="proses.php">


echo "Data telah diterima:<br>";
    echo "Nama: $nama<br>";
    echo "Tempat Lahir: $tempat_lahir<br>";
    echo "Tanggal Lahir: $tanggal_lahir<br>";
    echo "Jenis Kelamin: $jenis_kelamin<br>";
    echo "Alamat: $alamat<br>";
    echo "Pendidikan: $pendidikan";