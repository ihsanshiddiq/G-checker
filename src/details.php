<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin | G-CHECKER</title>

  <!--CDN-->
  <?php
  require 'head-conf.html';
  ?>

  <!--CSS REFERENCE-->
  <!-- <link rel="stylesheet" href="../lib/style.css"> -->
</head>

<body>
  <!--awalan Navbar-->

  <nav>
    <?php
    require 'navbaruser.php';
    ?>
  </nav>
  <br><br>
  <div class="container">
    <h1>Generate Serial Number</h1>
    <br><br>
  </div>

  <div class="container">
    <div class="row">
      <form>
        <table>
            <tr>
                <td>Jenis Produk</td>
                <td> : </td>
                <td><div class="col-sm-6">
                        <input type="text" id="jenisproduk" name="jenisproduk" value="" readonly>
                        <?php
                            echo $_POST['paket'];
                        ?></input>
                    </div></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td> : </td>
                <td><div class="col-sm-6">
                        <input type="text" id="qty" name="qty" value="" readonly>
                        <?php
                            echo $_POST['qty'];
                        ?></input>
                    </div></td>
            </tr>
            <tr>
                <td>Tanggal Keluar</td>
                <td> : </td>
                <td><div class="col-sm-6">
                        <input type="date" id="tglkeluar" name="tglkeluar" value="" readonly>
                        <?php
                            echo $_POST['tanggal'];
                        ?></input>
                    </div></td>
            </tr>
            <tr>
                <td>Tanggal Berlaku Garansi</td>
                <td> : </td>
                <td><div class="col-sm-6">
                        <input type="text" id="jenisproduk" name="jenisproduk" value="" readonly>
                        <?php
                            echo $_POST['nama'];
                        ?></input>
                    </div></td>
            </tr>
        </table>
      </form>
    </div>
  </div>
  <br><br><br>
  <button type="cancel" class="btn30">Batal</button>
  <button type="submit" class="btn30">Cetak PDF</button>

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