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
    require 'navbaradmin.php';
    ?>
  </nav>

  <br><br>


  <div class="container">
    <h1>User List</h1>
    <br>
    <a href="addUser.html" class="link"><button type="button" class="button1">+ Add User</button></a>
  </div>
  <br><br>

  <div class="card-group">
    <table id="customers">
      <tr>
        <th>No</th>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Password</th>
        <th>Role</th>
        <th>Action</th>
      </tr>
      <tr>
        <td>1</td>
        <td>muhammad.aldy.f@students.esqbs.ac.id</td>
        <td>Aldy</td>
        <td>Fadilla</td>
        <td></td>
        <td>Admin</td>
        <td></td>
      </tr>
      <tr>
        <td>2</td>
        <td>khaira.isyara@gmail.com</td>
        <td>Khaira</td>
        <td>Isyara</td>
        <td></td>
        <td>User</td>
        <td></td>
      </tr>
      <tr>
        <td>3</td>
        <td>m.ihsan.shiddiq@gmail.com</td>
        <td>Ihsan</td>
        <td>Siddiq</td>
        <td></td>
        <td>User</td>
        <td></td>
      </tr>
      <tr>
        <td>4</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>5</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td>6</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
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