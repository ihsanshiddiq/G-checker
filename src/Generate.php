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
      <form action="details.php" method="POST">
        <div class="class mb-3 row">
          <label>Paket Produk</label>
          <div class="col-sm-6">
            <select class="form-select" aria-label="Default select example" name="paket" required>
              <option>--- Pilih Paket Produk ---</option>
              <option value="1">Silver</option>
              <option value="2">Gold</option>
              <option value="3">Platinum</option>
            </select>
          </div>
        </div>
        <div class="class mb-3 row">
          <label>Quantity</label>
          <div class="col-sm-6">
            <input type="number" id="qty" name="qty" required>
          </div>
        </div>
        <div class="class mb-3 row">
          <label>Tanggal Keluar</label>
          <div class="col-sm-6">
            <input type="date" id="tanggal" name="tanggal" required>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br><br><br>
  <a href="details.php"><button type="submit" class="btn30" action="/details.php">Generate</button></a>
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