<?php
  session_start();
  if (!isset($_SESSION['login'])) {
      header("Location: login.php");
  }

  // include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include


  require "koneksi.php";
  if(isset($_GET['search'])){
    $keyword = $_GET['keyword'];

    $query = mysqli_query($koneksi, "SELECT * FROM posttest where nama_produk LIKE '%$keyword%' or harga_beli LIKE '%$keyword%'");
   } else {
    $query= mysqli_query($koneksi, "SELECT * FROM  posttest");
   }

    $posttest = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $posttest[] = $row;
}


  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk Wijaya Thrift Store</title>
    <link rel="stylesheet" href="menu.css">
    <link rel="icon" href="img/logo-icon.ico">
  </head>
  <body>
 
    <center><h1>Data Produk</h1><center>
  <form action="" method="GET">
   <input class = "search-txt" type="text" name ="keyword" placeholder="Cari pelayanan">
   <button type ="submit" class="search-btn" name ="search"><i class='bx bx-search'></i></button>
  </form>
    
    
    
      <p class="waktu"><?php
      echo"Today is : ".date("d/m/y");
    ?></p>

    
    <center><a href="tambah.php">+ &nbsp; Tambah Produk</a><center>
    <br/>
    <table>
      <thead>
        <tr>
        <th>No</th>
          <th>Produk</th>
          <th>Dekripsi</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan 
      $query = "SELECT * FROM posttest ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
       // kemudian dicetak dengan perulangan while
       while($row = mysqli_fetch_assoc($result))
       {
       ?>
        <tr>
           <td><?php echo $no; ?></td>
           <td><?php echo $row['nama_produk']; ?></td>
           <!-- //untuk mengisi deskripsi tidak lebih dari 20 kata -->
           <td><?php echo substr($row['deskripsi'], 0, 40); ?>...</td> 
           <td>Rp <?php echo number_format($row['harga_beli'],0,',','.'); ?></td>
           <td>Rp <?php echo $row['harga_jual']; ?></td>
           <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
           <td>
               <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a> |
               <a href="proseshapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
           </td>
       </tr>
          
       <?php
         $no++; //untuk nomor urut terus bertambah 1
       }
       ?>
     </tbody>
     </table>
   </body>
 </html>