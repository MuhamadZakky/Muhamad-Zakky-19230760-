<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $lokasi = $_POST['lokasi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $skill = $_POST['skill'];
    
}
?>
<h2>From HTML</h2>
<table border=1>
    <tr>
        <td>Nama</td><td><?php echo $nama;?></td>
    </tr>
        <td>Email</td><td><?php echo $email;?></td>
    </tr>
        <td>Lokasi</td><td><?php echo $lokasi;?></td>
    </tr>
        <td>Jenis Kelamin</td><td><?php echo $jenis_kelamin;?></td>
    </tr>
        <td>Skill</td><td><?php echo $skill;?></td>
    </tr>
</table>
<a href="">BACK</a>