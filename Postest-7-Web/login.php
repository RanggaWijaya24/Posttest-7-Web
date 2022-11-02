<?php 
    session_start();
    require 'koneksi.php';

    if(isset($_SESSION['login'])){
        header("Location: index.php");
        exit;
    }

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $result = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username'");

        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])){
                $_SESSION['login'] = $row["username"];
                $_SESSION['priv'] = $row["priv"];
                if($_SESSION['priv'] == "admin"){
                    header("Location: admin.php");
                }
                else{header("Location: index.php");}
                exit;
            }
        }
        $error = true;
    }
?>

<script>if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
}

</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <?php
        if(isset($error)){
            echo "
                <p style='color: red;'>
                    Username atau password salah!
                </p>
            ";
        }
    ?>
    <div class="wrapper">
        <form action="" method="post" class="login-email">
        <p class="title">Login</p>
        <div class="field">
            <p class = "mail">Masukkan Username : </p>
            <input type="text" placeholder="Username" name="username" value="" required class="mailed">
        </div>
        <div class="field">
            <p class = "pass">Masukkan password : </p>
            <input type="password" placeholder="Password" name="password" value="" required class="passed">
        </div> 
        <div class="field" align ="center"> 
            <button name="login" class="button">Login</button><br><br>
        </div> 
        <div class="field" align = "center">
            <p>Belum punya akun ? <a href="register.php">Register dulu!</a></p>
        </div>
    </div>
</body>
</html>