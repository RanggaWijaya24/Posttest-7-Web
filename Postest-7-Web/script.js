// DOM style untuk menu toggle bar jika layar ber ukuran 600px maka akan muncul menu toggle untuk menyimpan navbar
var MenuItems= document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";
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

//Fungsi untuk mengubah tema menjadi dark mode dengan menggunkan id icon gambar sebagai untuk mengubah tema warna
    var icon= document.getElementById("icon");

    icon.onclick = function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
            icon.src="img/sun.png";
            
        }else{
            icon.src="img/moon.png";
        }
    }


//js addeventlistener untuk mengubah button pada menu awal berubah menjadi warna sesuai dengan warna yang di sediakan
var xx= document.getElementById("btn");

var button1=document.getElementById("a1");

var button2=document.getElementById("a2");

button1.addEventListener("click", function (){xx.style.backgroundColor="pink" ;}, false );

button2.addEventListener("click", function (){xx.style.backgroundColor="purple" ;}, false );


//js query untuk meng animasikan button, lalu akan muncul <P> yg telah di sembunyikan/opacity dengan menggunakan efek animasi dari js query
$(document).ready(function() {

    $(".content-box").click(function() {
        $(".content-box").animate({
            width : '550px',
            height :'100px'
        }, 3000);
        $(".after").show().animate({opacity : '1'}, 3000);
    });

});


//DOM style untuk mengubah warna button dengan selector id ="test" warna akan berubah' menajdi pink ke ungu dan sebaliknya
var test=document.getElementById("test");

setInterval(function() {
     test.style.backgroundColor="pink";

     setTimeout(function(){
     test.style.backgroundColor="purple";

    }, 500);
}, 1000);

//Pop Up bxo cinfirm alert
var konfir = confirm("Apakah anda yakin ingin menelusuri web ini lebih lanjut?");

if(konfir==true){
    alert("Enjoy Web Kami!")
} else {
    alert("See u!")
}



// function showAlert(){
//     var Kontak="Belum ada cuyyyyyy";
//     alert(Kontak);
// }

// Alert di kontak
function myFunction() {
    alert("BELUM ADA CUYYYYYYYY HAHAH");
  }