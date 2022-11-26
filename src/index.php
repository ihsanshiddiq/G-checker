<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | G-CHECKER</title>

    <!--CDN-->
    <?php
        require 'head-conf.html';
    ?>

    <!--CSS REFERENCE-->
    <link rel="stylesheet" href="../lib/style.css">
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
                    <form action="">

                    </form>
                    <div class="form-group px-3" style="text-align: left;">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control textinput" id="username" placeholder=""
                            require>
                    </div>
                    <div class="form-group px-3 py-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control textinput" id="password"
                            placeholder="" require>
                    </div>
                    <button type="submit" name="submit" href="" class="btn primary-button"><b>Login</b></button>
                </div>

            </div>


        </div>

        </div>

    </section>

</body>

</html>