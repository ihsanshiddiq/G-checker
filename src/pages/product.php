<?php 
	require_once('./class/class.barang.php'); 
	require_once('./class/class.status.php'); 	

	$objBarang = new Barang(); 
	$objStatus = new Status();
	$objStatus->SelectAllStatus();

if(isset($_POST['btnSubmit'])){
	$objBarang->serial_number = $_POST['serial_number'];
    $objBarang->jenis_barang = $_POST['jenis_barang'];	
    $objBarang->tanggal_keluar = $_POST['tanggal_keluar'];
    $objBarang->id_status = $_POST['status'];
	$password = $_POST['password'];	
	$currentpassword = $_POST['currentpassword'];	
	$passworddefault = '';
	
	if($password == ''){ //jika password dikosongkan
    	if(isset($_GET['serial_number'])) //jika sedang diedit, passwordnya adalah current password
			$password = $currentpassword; 
		else //jika sedang ditambah, password adalah password default
			$password = $passworddefault;		
	}
	$objBarang->password = password_hash($password, PASSWORD_DEFAULT);	
	$objBarang->id_Status = $_POST['Status'];
	
	if(isset($_GET['serial_number'])){		
		$objBarang->serial_number = $_GET['serial_number'];
		$objBarang->UpdateBarang();
	}
	else{	
		$objBarang->AddBarang();
	}			
	echo "<script> alert('$objBarang->message'); </script>";
}
else if(isset($_GET['serial_number'])){	
	$objBarang->serial_number = $_GET['serial_number'];	
	$objBarang->SelectOneBarang();
	
}
?>

<head>
    <title>Edit Barang</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<div class="container py-5 pb-5">  
<div class="col-md-6">			
  <h2 class="pb-5"><span class="text"><strong>Barang</strong></span></h4>
    <form action="" method="post">
	<table class="table" border="0">	
	<tr>
	<td>Serial Number</td>
	<td>:</td>
	<td>
	<input type="serial_number" class="form-control" id="serial_number" name="serial_number" value="<?php echo $objBarang->serial_number; ?>"></td>
	</tr>
    <tr>
	<td>Jenis Barang</td>
	<td>:</td>
	<td>
    <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="<?php echo $objBarang->jenis_barang; ?>">
	</td>
	</tr>	
    <tr>
	<td>Tanggal Keluar</td>
	<td>:</td>
	<td>
    <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar" value="<?php echo $objBarang->tanggal_keluar; ?>">
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