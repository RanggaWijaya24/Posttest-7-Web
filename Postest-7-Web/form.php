<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <link rel="icon" href="img/logo-icon.ico">
    <title>Form Keluh Kesan</title>
</head>
<body>
    <div class="container">

    <form action="hasil.php" method="post" class="box">
        <div class="header">
            <h4>Silahkan mengisi form di bawah ini</h4>
            <p>Silahkan Roasting Kamii !!!</p>
        </div>
       
        <p>Nama Lenkap :</p>
        <input type="text" name="nama" maxlength="10" required>
        <p>Tempat Tanggal Lahir :</p>
        <input type="text" name="tempat"  required> <input type="date" name="date"  required>
        <p>Alamat :</p>
        <input type="text" name="alamat">
        <P>Jenis Kelamin :</P>
        <input type="radio" name="jk" value="perempuan"  required> perempuan
        <input type="radio" name="jk" value="laki-laki"  required> laki-laki
        <p>No Handphone :</p>
        <input type="number" name="nohp"  required>
        <p> email :</p>
        <input type="email" name="email" required> <br>
        <p>Keluh Kesan :</p>
        <textarea name="textarea" rows="4" required></textarea> <br>
        <input class="button" type="submit" name="submit" required>
    </form>
</div>
</body>
</html>