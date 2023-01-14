<?php
    include('inc.koneksi.php');
    require_once('authorization_admin.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./css/style.css">
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
                        <img src="../assets/logo-putih 1.png" class="w-25 h-5">
                        <li class="nav-item">
                            <a class="nav-link" href="dashboardadmin.php?p=home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboardadmin.php?p=userlist">User List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboardadmin.php?p=productlist">Product List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboardadmin.php?p=logout"><button type="button" class="btn1">Logout</button></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php
    $pages_dir = 'pages';
    if (!empty($_GET['p'])) {
        $pages = scandir($pages_dir, 0);
        unset($pages[0], $pages[1]);

        $p = $_GET['p'];
        if (in_array($p . '.php', $pages)) {
            include($pages_dir . '/' . $p . '.php');
        } else {
            echo 'Halaman tidak ditemukan! :(';
        }
    } else {
        include($pages_dir . '/home.php');
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>