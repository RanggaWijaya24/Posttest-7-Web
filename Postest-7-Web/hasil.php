<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link rel="icon" href="img/logo-icon.ico">
    <title>Input Keluh Kesan</title>
</head>
<body>
<div class="container">
        
    
<?php
       if (isset($_POST['submit'])){
        Echo "Nama lengkap  :".$_POST['nama']."<br>";
        Echo "Ttl           :".$_POST['tempat'].$_POST['date']."<br>";
        Echo "Alamat        :".$_POST['alamat']."<br>";
        Echo "Jenis Kelamin :".$_POST['jk']."<br>";
        Echo "No HP         :".$_POST['nohp']."<br>";
        Echo "Email         :".$_POST['email']."<br>";
        Echo "Kesan Pesan   :".$_POST['textarea'];
       }
     ?>

</div>
</body>
</html>