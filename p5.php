<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 5</title>
</head>
<body>
    <h2>From</h2>
    <form action="indi.php" method="post">

    <pre>
    Nama           :<input type="text" id="nama" name="nama">
    Email          :<input type="text" id="email" name="email">
    Lokasi         :<select type="lokasi" name="lokasi">
        <option>Jakarta</option>
        <option>Semarang</option>
        <option>Surabaya</option>
        </select>
    Jenis Kelamin  :<input type="radio" name="jenis_kelamin"value="Laki-laki">Laki-laki
                    <input type="radio" name="jenis_kelamin"value="Perempuan">Perempuan
    Skill          :<select type="Skill" name="skill">
        <option>PHP</option>
        <option>MySQL</option>
        <option>Javascrip</option>
        <option>HTML</option>
        <option>CSS</option>
    </select> 
</pre>
    <input type="submit" value="Submit">
    </from>
</body>
</html>