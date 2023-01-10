<?php
	if(isset($_GET['email'])) {
		require_once('./class/class.akun.php');
		$objAkun = new Akun(); 
		$objAkun->email = $_GET['email'];
		
		$objAkun->DeleteAkun();
		echo "<script> alert('$objAkun->message'); </script>";
		echo "<script>window.location = 'dashboardadmin.php?p=userlist'</script>";			
			
	}
	else{		
		echo '<script>window.history.back()</script>';	
	}
?>