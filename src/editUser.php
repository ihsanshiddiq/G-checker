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
  <!-- Header -->
  <nav>
    <?php
    require 'navbar.php';
    ?>
  </nav>

  <br><br>


  <div class="container">
    <h1>Edit User</h1>
    <br>
  </div>
  <br><br>
  <div class="container">
    <div class="row">
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
        :<div class="col-sm-6">
          <input type="text" class="form-control" id="staticEmail">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">First Name</label>
        :<div class="col-sm-6">
          <input type="text" class="form-control" id="staticEmail">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Last Name</label>
        :<div class="col-sm-6">
          <input type="text" class="form-control" id="staticEmail">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
        :<div class="col-sm-6">
          <input type="password" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
        :<div class="col-sm-6">
          <input type="password" class="form-control" id="inputPassword">
        </div>
      </div>
      <div class="class mb-3 row">
        <label class="col-sm-2 col-form-label">Role</label>
        <div class="col-sm-6">
          <select class="form-select" aria-label="Default select example">
            <option>--- Pilih Role ---</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
      </div>
    </div>
  </div>
  <br>
  <button type="button" class="btn10">Batal</button>
  <button type="button" class="btn11" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah</button>

  <br><br><br>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Berhasil di Tambahkan!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <center>Selamat Anda Telah Menambahkan User !</center>
        </div>
        <br><br>
        <button type="button" class="btn12">Done</button>
      </div>
    </div>
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