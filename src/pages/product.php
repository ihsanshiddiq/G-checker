<?php 
	require_once('./class/class.barang.php'); 
	require_once('./class/class.status.php'); 	

	$objBarang = new Barang(); 
	$objStatus = new Status();
	$objStatus->SelectAllStatus();

if(isset($_POST['btnSubmit'])){

	/*if($_POST['jenis_barang'] == "Silver") {
		$kodejenis = 999;
	} else if ($_POST['jenis_barang'] == "Gold") {
		$kodejenis = 000;
	} else if ($_POST['jenis_barang'] == "Platinum") {
		$kodejenis = 777;
	}*/

	$serialnumberdefault = rand(00000001, 99999999);
	if (!isset($serialnumberdefault)) {
		$serialnumberdefault = rand(00000001, 99999999);
	}

	$objBarang->serial_number = $serialnumberdefault;
    $objBarang->jenis_barang = $_POST['jenis_barang'];	
    $objBarang->tanggal_keluar = $_POST['tanggal_keluar'];

	$selectdate = $_POST['tanggal_keluar'];
	$objBarang->tanggal_garansi = date('Y-m-d', strtotime($selectdate . ' + 6 months'));
	//$objBarang->tanggal_garansi = $_POST['tanggal_garansi'];

	$statusdefault = 1;
	$objBarang->id_status = $statusdefault;
	
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
    <title>Generate Serial Number</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<div class="container py-5 pb-5">  
<div class="col-md-6">			
<div class="container">
    <h1>Generate Serial Number</h1>
  </div>
  <br><br>
    <form action="" method="post">
	<table class="table" border="0">	
    <tr>
	<td>Jenis Barang</td>
	<td>:</td>
	<td>
	<input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="" required>
	</td>
	</tr>	
	<tr>
	<td>Quantity</td>
	<td>:</td>
	<td>
    <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" value="" required>
	</td>
	</tr>	
    <tr>
	<td>Tanggal Keluar</td>
	<td>:</td>
	<td>
	<input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar" value="" required>
	</td>
	</tr>
	<!--<tr>
	<td>Tanggal Garansi</td>
	<td>:</td>
	<td>
	<input type="date" class="form-control" id="tanggal_garansi" name="tanggal_garansi" value="">
	</td>
	</tr>		-->
	</table>   
		<input type="submit" class="btn btn-success" value="Generate" name="btnSubmit">
</form>	
</div>  
</div>