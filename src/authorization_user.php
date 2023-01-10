<?php
if(!isset($_SESSION)){
 	session_start();
}

if(!isset($_SESSION["id_role"])){
	echo "<script> alert('Silakan Daftar dan Login untuk mengakses halaman ini'); </script>";
	echo '<script> window.location="index.php"; </script>';
} else {
	if($_SESSION["id_role"]!='2') {
		echo "<script> alert('Hanya user yang dapat mengakses halaman ini'); </script>";
		echo '<script> window.location="index.php"; </script>';
	}
}
