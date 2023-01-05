<?php
 //include 'inc.koneksi.php';

if (isset($_POST['submit'])) {


 //require_once('../init.class.php');
 //$objAkun = new Akun();

 $email = $_POST['email'];
 $password = $_POST['password'];

 //Register-Controller class. These classes below, including ORDER has to be like this and cannot be mixed up in the urutan.
 //include "inc.koneksi.php";
 include '../inc.koneksi.php';
 include "../class/login-obj.class.php";
 include "../class/login-contr.php";
 $login = new loginContr($email, $password);

 $login->loginUser();

 //Balik ke Index

 if ($_SESSION["id_role"] == 0){

    header("location: ../index.php?error=none-login=admin");
    
 } else if($_SESSION["id_role"] == 1){

   header("location: ../index.php?error=none");

 } else {
   
   header("location: ../index.php?error=none");
   
 }
}

?>