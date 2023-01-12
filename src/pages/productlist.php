<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product List</title>
 
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
    <h1>Product List</h1>
  </div>
  <br><br>

  <div class="card-group">
    <table class="table table-bordered" id="customers">
        <thead>
            <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">Serial Number</th>
                <th scope="col">Jenis</th>
                <th scope="col">Tanggal Keluar</th>
                <th scope="col">Tanggal Garansi</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="">
            <?php
            require_once('./class/class.barang.php');

            $objBarang = new Barang();
            $arrayResult = $objBarang->SelectAllBarang();

            if (count($arrayResult) == 0) {
                echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
            } else {
                $no = 1;
                foreach ($arrayResult as $dataBarang) {
                    echo '<tr>';
                    echo '<th scope="row" class="text-center">' . $no . '</th>';
                    echo '<td>' . $dataBarang->serial_number . '</td>';
                    echo '<td>' . $dataBarang->jenis_barang . '</td>';
                    echo '<td>' . $dataBarang->tanggal_keluar . '</td>';
                    echo '<td>' . $dataBarang->tanggal_garansi . '</td>';
                    if ($dataBarang->id_status == 1) {
                      echo '<td class="p-2 mb-2 bg-success text-white">' . $dataBarang->status . '</td>';
                    } else if ($dataBarang->id_status == 2) {
                      echo '<td class="p-2 mb-2 bg-danger text-white">' . $dataBarang->status . '</td>';
                    } else {
                      echo '<td class="p-2 mb-2 bg-warning text-black">' . $dataBarang->status . '</td>';
                    }
                    //echo '<td class="p-2 mb-2 bg-success text-white">' . $dataBarang->status . '</td>';
                    echo '<td class="text-center">
                    <a class="btn btn-success"  href="dashboardadmin.php?p=updatestatus&serial_number=' . $dataBarang->serial_number . '" 
            onclick="return confirm(\'Apakah anda yakin ingin claim garansi?\')">Claim</a>
                    <a class="btn btn-danger"  href="dashboardadmin.php?p=deleteproduct&serial_number=' . $dataBarang->serial_number . '" 
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