<?php 
	require_once('./class/class.akun.php'); 
	require_once('./class/class.role.php'); 	

	$objAkun = new Akun(); 
	$objRole = new Role();
	$objRole->SelectAllRole();

if(isset($_POST['btnSubmit'])){	
    $objAkun->nama = $_POST['nama'];
	$objAkun->email = $_POST['email'];	
    $objAkun->id_role = $_POST['role'];
	$password = $_POST['password'];	
	$currentpassword = $_POST['currentpassword'];	
	$passworddefault = '';
	
	if($password == ''){ //jika password dikosongkan
    	if(isset($_GET['email'])) //jika sedang diedit, passwordnya adalah current password
			$password = $currentpassword; 
		else //jika sedang ditambah, password adalah password default
			$password = $passworddefault;		
	}
	$objAkun->password = password_hash($password, PASSWORD_DEFAULT);	
	$objAkun->id_role = $_POST['role'];
	
	if(isset($_GET['email'])){		
		$objAkun->email = $_GET['email'];
		$objAkun->UpdateAkun();
	}
	else{	
		$objAkun->AddAkun();
	}			
	echo "<script> alert('$objAkun->message'); </script>";
}
else if(isset($_GET['email'])){	
	$objAkun->email = $_GET['email'];	
	$objAkun->SelectOneAkun();
	
}
?>

<head>
    <title>Edit Akun</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<div class="container py-5 pb-5">  
<div class="col-md-6">			
  <h2 class="pb-5"><span class="text"><strong>Akun</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">	
	<tr>
	<td>Email</td>
	<td>:</td>
	<td>
	<input type="email" class="form-control" id="email" name="email" value="<?php echo $objAkun->email; ?>"></td>
	</tr>
    <tr>
	<td>Nama</td>
	<td>:</td>
	<td>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $objAkun->nama; ?>">
	</td>
	</tr>	
	<td>Password</td>
	<td>:</td>
	<td>
	<input type="password" class="form-control" id="password" name="password">
	<input type="hidden" name="currentpassword" value="<?php echo $objAkun->password; ?>" required>
	<span><i>Enter a new password or leave blank to keep current password</i> </span>
	</td>
	</tr>	
	<tr>
	<td>Role</td>
	<td>:</td>
	<td>
	<?php
	$role = array("1"=>"Admin", "2"=>"User");
	foreach($role as $key => $value) {	
		if($objAkun->id_role == $key)					
			echo '<label class="radio-inline"><input type="radio" name="role" checked value="'.$key.'"> '.$value.'</label>';
		else
			echo '<label class="radio-inline"><input type="radio" name="role" value="'.$key.'"> '.$value.'</label>';
	}
	?>	
	</select>	
	</td>
	</tr>	
	<tr>
	<td></td>
	<td></td>
	<td><input type="submit" class="btn btn-success" value="Save" name="btnSubmit">
	    <a href="dashboardadmin.php?p=userlist" class="btn btn-danger">Cancel</a></td>
	</tr>	
	</table>    
</form>	
</div>  
</div>