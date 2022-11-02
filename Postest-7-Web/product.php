<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial scale=1.0">
        <title>All Product | Wijaya Thrift</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="icon" href="img/logo-icon.ico">
    </head> 
<body>
<!--Header-->
 
    <div class="container">
     <div class="navbar">
        <div class="logo">
            <img src="img/wijayanewlogo.png" width="140px">
        </div>
      <nav>
        <ul id="MenuItems">
            <li><a href="index.php">Home</a></li>
            <li><a href="">Product</a></li>
            <li><a href="aboutme.php">About Me</a></li>
            <li><a href="form.php">Contact</a></li>
            <li><a href="">Account</a></li>
        </ul>
      </nav>
      <img src="img/cart.png" width="30px" height="30px">
      <img src="img/moon.png" class="moon" id="icon" width="30px" height="30px">
      <img src="img/menu.png" class="menu-icon" onclick="menutoggle()">
     </div>
    </div>


  
    

     <!---- Fitur Product----->
     <div class="small-container">
        <div class="row row-2">
            <h2>All Product</h2>
            <select>
                <option>Default Sorting</option>
                <option>Sort by Price</option>
                <option>Sort by Popularity</option>
                <option>Sort by Rating</option>
                <option>sort by Sales</option>
            </select>
        </div>

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
        <div class="row">
            <div class="col-4">
                <img src="img/product-5.jpg">
                <h4>Sepatu Silver</h4>
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

        <div class="page-btn">
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>&#8594;</span>
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
<!-- Menu JS untuk button menu referensi dari youtube

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