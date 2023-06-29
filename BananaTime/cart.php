<?php
session_start();
require 'Koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <link rel="stylesheet" href="style-cart.css">
</head>

<body>
    <header>
        <a href="home.php"><img src="resources/logo.png" style="height: 64px;"></a>
    </header>

    <section class="container-pembayaran">
    <form action="" method="POST">
        <h1>Checkout</h1>
        <section class="tabel">

            <div class="box-1">
                <div class="order-label">Nama Lengkap</div>
                <input type="text" name="full-name" placeholder="Aura Lintang" class="input-responsive" required>

                <div class="order-label">Nomor Telepon</div>
                <input type="tel" name="contact" placeholder="081234567890" class="input-responsive" required>

                <div class="order-label">Email</div>
                <input type="email" name="email" placeholder="aura.lintang@student.umn.ac.id" class="input-responsive" required>

                <div class="order-label">Alamat Pengiriman</div>
                <textarea name="address" rows="10" placeholder="Jalan, No., Komplek" class="input-responsive" required></textarea>
            </div>

            <table>
                <tr>
                    <td><input type="radio" name="Bank Transfer" id=""></td>
                    <td><img src="resources/bank/bca.png" alt="BCI" style="width: 80px;"></td>
                    <td>BCA Virtual Account</td>
                </tr>
                <tr>
                    <td><input type="radio" name="Bank Transfer" id=""></td>
                    <td><img src="resources/bank/mandiri.png" alt="Mandiri" style="width: 80px;"></td>
                    <td>Mandiri Virtual Account</td>
                </tr>
                <tr>
                    <td><input type="radio" name="Bank Transfer" id=""></td>
                    <td><img src="resources/bank/bni.png" alt="BNI" style="width: 80px;"></td>
                    <td>BNI Virtual Account</td>
                </tr>
                <tr>
                    <td><input type="radio" name="Bank Transfer" id=""></td>
                    <td><img src="resources/bank/bri.png" alt="BRI" style="width: 80px;"></td>
                    <td>BRI Virtual Account</td>
                </tr>
            </table>

        </section>
        <button type="submit" name="checkout">Bayar</button>
        </form>
    </section>
    <?php
    if(isset($_POST['checkout'])){
        $fullname = $_POST['full-name'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $address = $_POST['address'];
    $checkout = mysqli_query($koneksi, "INSERT INTO checkout VALUES('','$fullname', '$contact', '$email', '$address')");
    echo "<script>
			alert('Pembayaran berhasil!');
			window.location = 'thank-you.html';
		</script>";
    }
    ?>
</body>

</html>