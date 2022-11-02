<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial scale=1.0">
        <title>Wijaya Thrift</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="script.js"></script>
        <script src="jquery.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="img/logo-icon.ico">
    </head> 
<body>
<!--Header-->
  <div class="header">
    <div class="container">
     <div class="navbar">
        <div class="logo">
            <img src="img/wijayanewlogo.png" width="140px">
        </div>
      <nav>
        <ul id="MenuItems">
            <li><a href="">Home</a></li>
            <li><a href="menu.php">Admin</a></li>
            <li><a href="product.php">Product</a></li>
            <li><a href="aboutme.php">About Me</a></li>
            <li><a href="form.php">Contact</a></li>
            <li id="kontak" onclick="myFunction()"><a href="">Account</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
      <img src="img/cart.png" class="cart" width="30px" height="30px">
      <img src="img/moon.png" class="moon" id="icon" width="30px" height="30px">
      <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
     </div>
     <div class="row">
        <div class="col-2">
            <h1>Berikan Fashion Terbaikmu <br> Di Era Sekarang</h1>
         <div class="content-box">
            <p class="tombol" id="btn">Explore Sekarang! &#8594; </p> <br>
            <p class="after">Whoever said that money can't buy happiness<br>simply didn't know where to go shopping." —Bo Derek</p>
         </div>
            <!-- <a href="" class="tombol" id="btn">Explore Sekarang! &#8594; </a> <br>
            <p class="after">Whoever said that money can't buy happiness<br>simply didn't know where to go shopping." —Bo Derek</p> -->
        
            <button class="button-1" id="a1">Pink</button>
            <button class="button-2" id="a2">Purple</button>
            <P>Pilih warna kesukaan anda !!!</P>
        </div> 
        <div class="col-2">
            <img src="img/rosenew.png" >
        </div>
     </div>
    </div>
 </div>


<!-------Main Body----------->


     <!---- Fitur Kategori----->
 <div class="kategori">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="img/category-1.jpg">
            </div>
            <div class="col-3">
                <img src="img/category-2.jpg">
            </div>
            <div class="col-3">
                <img src="img/category-4.jpg">
            </div>
        </div>
    </div>
 </div>
    

     <!---- Fitur Product----->
     <div class="small-container">
        <h2 class="title">Product Unggulan</h2>
        <div class="row">
            <div class="col-4">
                <img src="img/product-1.jpg">
                <h4>Baju Merah Merona</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 50.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-2.jpg">
                <h4>Sepatu Hitam</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rp 250.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-3.jpg">
                <h4>Sepatu Abu-Abu</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 450.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-4.jpg">
                <h4>Baju Navy</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rp 50.000</p>
            </div>
        </div>
        <h2 class="title">Product Terbaru</h2>
        <div class="row">
            <div class="col-4">
                <img src="img/product-5.jpg">
                <h4>Sepatu silver</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 500.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-6.jpg">
                <h4>Baju Puma</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rp 200.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-7.jpg">
                <h4>Kaos Kaki</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 70.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-8.jpg">
                <h4>Jam Tangan Hitam</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rp 800.000</p>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="img/product-9.jpg">
                <h4>Jam Tangan Silver</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 750.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-10.jpg">
                <h4>Sepatu Sports Hitam</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rp 550.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-11.jpg">
                <h4>Sketchers</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rp 600.000</p>
            </div>
            <div class="col-4">
                <img src="img/product-12.jpg">
                <h4>Celana Joger</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Rp 350.000</p>
            </div>
        </div>
     </div>

<!--Spesial Menu-->

<div class="special">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="img/apple-watch.png" class="special=img">
            </div>
            <div class="col-2">
                <p>Hanya ada di Wijaya Thrift</p>
                <h1>Apple Watch</h1>
                <small class="paragraf">WATCH adalah jam tangan pintar yang dibuat oleh Apple Inc. Alat ini tersedia dalam empat varian, yaitu <br>
                    Apple Watch Sport, Apple Watch, Apple Watch Hermès, and Apple Edition</small>
                <a href="" class="tombol" id="test">Beli Kuy! &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!--Testimonial-->

<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>Wijaya thrift store adalah thrift store terbaik yang pernah saya temukan, harga di store ini
                    juga sangat bersahabat dengan kantong dompet saya. Top deh MANYALA!
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <img src="img/useraweng.png">
                <h3>Aweng Parker </h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>WOW AMAZING barang-barang dari brand terkenal sangat lengkap disini bahkan harganya juga termasuk murah
                    dari brand aslinya, dan untuk owner wijaya thrift terima kasih pasti kamu ganteng!
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <img src="img/userwijaya.png">
                <h3>Wijaya Parker </h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p> Sesuai dengan slogan store ini MANYALA, saya adalah pengkoleksi brand-brand jam terkenal. Beruntung saya 
                    menemukan thrift store ini jam tanganya lengkap sekali, THANKS!
                </p>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <img src="img/userabi.png">
                <h3>Abi Parker </h3>
            </div>
        </div>
    </div>
</div>

<!--Brand-->
<div class="brand">
     <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="img/logo-godrej.png">
            </div>
            <div class="col-5">
                <img src="img/logo-coca-cola.png">
            </div>
            <div class="col-5">
                <img src="img/logo-gopay.png">
            </div>
            <div class="col-5">
                <img src="img/logo-oppo.png">
            </div>
            <div class="col-5">
                <img src="img/logo-paypal.png">
            </div>
        </div>
     </div>
</div>

<!--Footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Wijaya App</h3>
                <p>Download aplikasi untuk android dan ios di Handphone anda</p>
                <div class="app-logo">
                    <img src="img/play-store.png">
                    <img src="img/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="img/logowijaya-white.png">
                <p>tujuan kami adalah untuk membuat kesenangan dan 
                 manfaat anda dalam berpakaian dengan harga yang murah</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                <ul>
                    <li>Instagram</li>
                    <li>Youtube</li>
                    <li>Facebook</li>
                    <li>Twitter</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright"> Copyright 2022 - Rangga Wijaya</p>
    </div>
</div>
<script src="script.js"></script>
<script src="jquery.js"></script>
<!-- 
--Menu JS untuk button menu referensi dari youtube dan website js stackoverflow

<script>
    var MenuItems= document.getElementById("MenuItems");

    MenuItems.style.maxHeight ="0px";
    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
         { 
             MenuItems.style.maxHeight= "200px";
         }
        else
         {
             MenuItems.style.maxHeight="0px";
         }
    }
</script> -->

</body>
</html>