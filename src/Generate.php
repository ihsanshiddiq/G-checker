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
            <a class="nav-link" href="ProductLits.html">Product List</a>
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
    <h1>Generate Serial Number</h1>
    <br><br>
  </div>

  <div class="container">
    <div class="row">
      <form>
        <div class="class mb-3 row">
          <label>Role</label>
          <div class="col-sm-6">
            <select class="form-select" aria-label="Default select example">
              <option>--- Pilih Role ---</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="class mb-3 row">
          <label>Role</label>
          <div class="col-sm-6">
            <select class="form-select" aria-label="Default select example">
              <option>--- Pilih Role ---</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
        <div class="class mb-3 row">
          <label>Role</label>
          <div class="col-sm-6">
            <select class="form-select" aria-label="Default select date">
              <option>--- Pilih Role ---</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </form>
    </div>
  </div>
  <br><br><br>
  <button type="submit" class="btn30">Generate</button>
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