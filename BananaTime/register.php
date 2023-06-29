<?php
    require 'Koneksi.php';
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
                    <h1>BUAT AKUN BARU</h1>

                    <br>

                    <label for="uname"><b></b></label>
                    <input type="text" placeholder="User name" name="uname" id="uname" required="yes">

                    <br>

                    <label for="email"><b></b></label>
                    <input type="text" placeholder="Email" name="email" id="email" required="yes">

                    <br>

                    <label for="telephone"><b></b></label>
                    <input type="number" placeholder="Nomor Telepon" name="telephone" id="telephone" required="">

                    <br>

                    <label for="pw"><b></b></label>
                    <input type="password" placeholder="Password" name="pw" id="pw" required="">

                    <br>

                    <label for="pw-repeat"><b></b></label>
                    <input type="password" placeholder="Reenter Password" name="pw-repeat" id="pw-repeat" required="">

                    <button type="submit" class="register-btn" name="submit">Buat Akun</button>

                    <div class="login_link">
                        <p>Sudah memiliki akun? <a href="login.php">Masuk</a>.</p>
                    </div>
            </form>
            </div>
        </div>
    </div>

    <?php
	if(isset($_POST['submit'])){
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$password = $_POST['pw'];
	$repassword = $_POST['pw-repeat'];

	$cekUser = mysqli_query($koneksi, "SELECT * FROM regis_login WHERE Username = '$uname'");
	$cekLogin = mysqli_num_rows($cekUser);

	if ($cekLogin > 0 ){
		echo "<script>
			alert('Username telah terdaftar');
			window.location = 'Register.php';
		</script>";
	} else{
            mysqli_query($koneksi, "INSERT INTO regis_login VALUES('','$uname', '$email', '$telephone', '$password', '$repassword')");
		echo "<script>
			alert('Data berhasil dikirim');
			window.location = 'Register.php';
		</script>";
        }
}
?>
</body>

</html>
