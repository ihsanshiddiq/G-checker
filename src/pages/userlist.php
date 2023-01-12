<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
 
  <!--CDN-->
  <?php
  require 'head-conf.html';
  ?>

  <!--CSS REFERENCE-->
  <link rel="stylesheet" href="../lib/style.css">
</head>

<body>
  <br><br>


  <div class="container">
    <h1>User List</h1>
    <br>
    <a href="dashboardadmin.php?p=user" class="link"><button type="button" class="button1">+ Add User</button></a>
  </div>
  <br><br>

  <div class="card-group">
    <table class="table table-bordered" id="customers">
        <thead>
            <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
            require_once('./class/class.akun.php');

            $objAkun = new Akun();
            $arrayResult = $objAkun->SelectAllAkun();

            if (count($arrayResult) == 0) {
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            } else {
                $no = 1;
                foreach ($arrayResult as $dataAkun) {
                    echo '<tr>';
                    echo '<th scope="row" class="text-center">' . $no . '</th>';
                    echo '<td>' . $dataAkun->email . '</td>';
                    echo '<td>' . $dataAkun->nama . '</td>';
                    echo '<td>' . $dataAkun->role . '</td>';
                    echo '<td><a class="btn btn-warning btn-sm"  href="dashboardadmin.php?p=user&email=' . $dataAkun->email . '">Edit</a>
                    <a class="btn btn-danger btn-sm"  href="dashboardadmin.php?p=deleteuser&email=' . $dataAkun->email . '" 
            onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')">Delete</a>
            </td>';
                    echo '</tr>';
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>

</html>