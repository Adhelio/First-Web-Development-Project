<?php
    session_start();
    include "Koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana</title>
    <link rel="stylesheet" href="style-2.css">
</head>

<body class="bg">

    <div class="logo">
        <a href="#"><img src="resources/logo.png"></a>
    </div>

    <div class="bg-cont">
        <img src="resources/product/banana_register.png">

        <div class="register">
            <form action="" method="post">
                <div class="reg-container">
                    <h1>MASUK</h1>

                    <br>

                    <label for="uname"><b></b></label>
                    <input type="text" placeholder="User name" name="uname" id="uname" required="yes">

                    <br>

                    <label for="pw"><b></b></label>
                    <input type="password" placeholder="Password" name="pw" id="pw" required="">

                    <button type="submit" class="register-btn" name="login">Masuk</button>

                    <div class="login_link">
                        <p>Belum memiliki akun? <a href="register.php">Daftar</a>.</p>
                    </div>
            </form>
            </div>
        </div>
    </div>
    
    <?php
            if(isset($_POST['login'])){
                $uname = $_POST['uname'];
                $password = $_POST['pw'];
                $cekUser = mysqli_query($koneksi, "SELECT * FROM regis_login WHERE Username = '$uname' AND Password = '$password'");
                $cekLogin = mysqli_num_rows($cekUser);
                if($cekLogin==1){
                    $_SESSION['uname'] = $uname;
                    header("location:home.php");
                    exit;
                } else {
                    echo "<script>
                    alert('Harap daftar terlebih dahulu');
                    </script>";
                }
                        }            
?>
</body>
</html>