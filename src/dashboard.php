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
  

  <!--list nama-->

  <section class="list">
    <div class="container">
      <br><br><br><br><br>
      <div class="row">
        <div class="card" style="width: 30rem">
          <h6>First Name</h6>
          <input type="name" class="form-control" id="exampleInputName" aria-describedby="inputName">
          <h6>Last Name</h6>
          <input type="name" class="form-control" id="exampleInputName" aria-describedby="inputName">
          <h6>Email</h6>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <h6>Password</h6>
          <input type="password" class="form-control" id="exampleInputPassword1">
          <h6>Confirm Password</h6>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
      </div>
      <br>
    </div>
    <p><button type="button" class="button"> Save </button></p>
  </section>
  <br><br>
  <!--list nama -->

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