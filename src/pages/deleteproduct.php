<?php
	if(isset($_GET['serial_number'])) {
		require_once('./class/class.barang.php');
		$objBarang = new Barang(); 
		$objBarang->serial_number = $_GET['serial_number'];
		
		$objBarang->DeleteBarang();
		echo "<script> alert('$objBarang->message'); </script>";
		echo "<script>window.location = 'dashboardadmin.php?p=productlist'</script>";			
			
	}
	else{		
		echo '<script>window.history.back()</script>';	
	}
?>