<?php
require_once('./class/class.akun.php');
	
$objAkun = new Akun();
if(isset($_POST['btnUpdate'])){
        $objAkun->email = $_POST['email'];	 
		$objAkun->nama = $_POST['nama'];
        $password = $_POST['password'];
        $objAkun->password = password_hash($password, PASSWORD_DEFAULT);		 
		//$isSuccessUpload = false;
		$isSuccessUpload = true;		
		
		if($isSuccessUpload){	
			$objAkun->email=$_SESSION["email"];			
			$objAkun->nama = $_POST['nama'];	
            $password = $_POST['password'];
            $objAkun->password = password_hash($password, PASSWORD_DEFAULT);	
			
			$objAkun->UpdateAkun();		
	
			echo "<script> alert('$objAkun->message'); </script>";	
			echo '<script> window.location = "'.$_SERVER['REQUEST_URI'].'";</script>';
		}
}
else if(isset($_SESSION['email'])){	
	$objAkun->email = $_SESSION['email'];
	$objAkun->SelectOneAkun();
}	
?>
<div class="container">  
<h4 class="title"><span class="text"><strong>Profile</strong></span></h4>  
    <form action="" method="post" enctype="multipart/form-data">
	
	<div class="col-md-5">		
	<table class="table" border="0">
	<tr>
	<td>Email</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="email" readonly value="<?php echo $objAkun->email; ?>"></td>
	</tr>	
	<tr>
	<td>Nama</td>
	<td>:</td>
	<td><input type="text" class="form-control" name="nama" value="<?php echo $objAkun->nama; ?>"></td>
	</tr>
    <tr>
	<td>Change Password</td>
	<td>:</td>
	<td><input type="password" class="form-control" name="password" value=""></td>
	</tr>	
	</table>
	</div>
	</table>    
	</div>
	
	</div>
	<input type="submit" class="btn btn-success" value="Update Profile" name="btnUpdate">	
</form>	  
</div>
<br>




