<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "crud_gc"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$nama_db); 

  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }

?>