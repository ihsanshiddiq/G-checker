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
  <!-- <link rel="stylesheet" href="../../libr/style.css"> -->
</head>

<body>
  <!--dashboard-->
  <div class="atas">
    <div class="container">
      <div class="row">
        <ul class="nav justify-content-end">
          <img src="../../assets/logo.png" class="ftdash">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="dashboard.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="userlist.html">Generate Serial Number</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Product List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><button type="button" class="btn1">Logout</button></a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <br><br>


  <div class="container">
    <h1>Product List</h1>
    <br>
  </div>
  <br><br>

  <div class="card-group">
    <table id="customers">
      <tr>
        <th>No</th>
        <th>Serial Number</th>
        <th>Jenis</th>
        <th>Tanggal Keluar</th>
        <th>Tanggal Garansi</th>
        <th>Status Garansi</th>
      </tr>
      <tr>
        <td>1</td>
        <td>S-198202932</td>
        <td>Silver</td>
        <td>26 November 2022</td>
        <td>26 November 2022</td>
        <td>Admin</td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td>S-198202932</td>
        <td>Silver</td>
        <td>26 November 2022</td>
        <td>26 November 2022</td>
        <td>User</td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td>S-198202932</td>
        <td>Silver</td>
        <td>26 November 2022</td>
        <td>26 November 2022</td>
        <td>User</td>
        <td></td>
      </tr>
      <tr>
        <td>4</td>
        <td>S-198202932</td>
        <td>Silver</td>
        <td>26 November 2022</td>
        <td>26 November 2022</td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>5</td>
        <td>S-198202932</td>
        <td>Silver</td>
        <td>26 November 2022</td>
        <td>26 November 2022</td>
        <td></td>
        <td></td>
      </tr>
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