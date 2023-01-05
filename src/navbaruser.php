<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
        <!--CDN-->
        <?php
        require 'head-conf.html';
    ?>
</head>

<body>
    <nav>
        <div class="atas">
            <div class="container">
                <div class="row">
                    <ul class="nav justify-content-end">
                        <img src="../assets/logo.png" class="ftdash">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Generate.php">Generate Serial Number</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ProductLits.php">Product List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><button type="button" class="btn1">Logout</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

</body>

</html>