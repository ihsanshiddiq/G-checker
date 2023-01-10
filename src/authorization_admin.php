<?php
if(!isset($_SESSION)){
 	session_start();
}

if(!isset($_SESSION["id_role"])){
	echo "<script> alert('Silakan login untuk mengakses halaman ini'); </script>";
	echo '<script> window.location="index.php"; </script>';
} else {
	if($_SESSION["id_role"]!='1') {
		echo "<script> alert('Hanya admin yang dapat mengakses halaman ini'); </script>";
		echo '<script> window.location="index.php"; </script>';
	}
}
