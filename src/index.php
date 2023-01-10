<?php
include ('inc.koneksi.php');
require_once('./class/class.akun.php');

if (isset($_POST['btnLogin'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];

	$objAkun = new Akun();
	$objAkun->ValidateEmail($email);

	if ($objAkun->hasil) {

		$ismatch = password_verify($password, $objAkun->password);

		if ($ismatch) {
			if (!isset($_SESSION)) {
				session_start();
			}

			$_SESSION["email"] = $objAkun->email;
			$_SESSION["nama"] = $objAkun->nama;
            $_SESSION["password"] = $objAkun->password;
			$_SESSION["id_role"] = $objAkun->id_role;

			echo "<script>alert('Login sukses');</script>";

			if ($objAkun->id_role == '1') {
				echo '<script>window.location = "dashboardadmin.php";</script>';
			} else if ($objAkun->id_role == '2') {
				echo '<script>window.location = "dashboarduser.php";</script>';
			}
		} else {
			echo "<script>alert('Password tidak match');</script>";
		}
	} else {
		echo "<script>alert('Email tidak terdaftar');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!--CDN-->
    <?php
        require 'head-conf.html';
    ?>

    <!--CSS REFERENCE-->
    <!-- <link rel="stylesheet" href="../lib/style.css"> -->
    <style>
        body {
            background-color: #1D284B !important;
        }

        .textinput {
            background-color: #D9D9D9 !important;
        }

        .form-group {
            text-align: left !important;
        }
    </style>
</head>

<body>
    <section class="container" style="background-color: #1D284B;">   
        <div class="container">
            <div class="position-absolute top-50 start-50 translate-middle">
                <div class="container py-5" style="height: 500px;
                        width: auto;
                        left: 414px;
                        top: 121px;
                        border-radius: 17px; background-color: #FFFFFF;
                        text-align: center;
                        ">
                    <img src="../assets/logo.png" alt="">
                    <h2 class="my-3">LOGIN</h2>

                    <form action="" method="POST">
                    
                    <div class="form-group px-3" style="text-align: left;">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control textinput" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group px-3 py-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control textinput" id="password" placeholder="Password" required>
                    </div>
                    <button type="submit" name="btnLogin" href="" class="btnLogin"><b>Login</b></button>
                    </form>
                </div>

            </div>


        </div>
   

    </div>

    </section>

</body>

</html>