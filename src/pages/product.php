<?php 
	require_once('./class/class.barang.php'); 
	require_once('./class/class.status.php');     
	require_once('./pages/print-barang.php');
	
	$objBarang = new Barang(); 
	$objStatus = new Status();
	$cetak = new Print_barang();
	$objStatus->SelectAllStatus();
	
if(isset($_POST['btnSubmit'])){

	$serialnumberdefault = rand(00000001, 99999999);
	if (!isset($serialnumberdefault)) {
			$serialnumberdefault = rand(00000001, 99999999);
		}
	
	
			
				
	$jenisBarang = $_POST['jenis_barang'];
	$tanggal_keluar = $_POST['tanggal_keluar'];
	$tanggal_garansi = date('Y-m-d', strtotime($tanggal_keluar . ' + 6 months'));
	$objBarang->jenis_barang = $jenisBarang;	
	$objBarang->tanggal_keluar = $_POST['tanggal_keluar'];
	$objBarang->tanggal_garansi = date('Y-m-d', strtotime($tanggal_keluar . ' + 6 months'));
	$date = date("Ymd");
	// $quantity = $_POST['jumlah_produk'];

	if($jenisBarang == "Silver") {
		// $prefix = "S-";
		$sernum = "S-$tanggal_keluar$serialnumberdefault";
		$objBarang->serial_number = $sernum;
	} else if ($jenisBarang == "Gold") {
		$sernum = "G-$tanggal_keluar$serialnumberdefault";
		$objBarang->serial_number = $sernum;
		// $prefix = "G-";
	} else if ($jenisBarang == "Platinum") {
		$sernum = "P-$tanggal_keluar$serialnumberdefault";
		$objBarang->serial_number = $sernum;
		// $prefix = "P-";
	}
	

	
	
	

	//$objBarang->tanggal_garansi = $_POST['tanggal_garansi'];
	
	$statusdefault = 1;
	$objBarang->id_status = $statusdefault;
	
	// echo "<script> alert('$objBarang->jenis_barang'); </script>";
	
	// $id = IdGenerator::generate(['table' => 'serial_number', 'length' => 7, 'prefix' => date('y')]);
	
	$objBarang->AddBarang();
	echo "<script> alert('$objBarang->message'); </script>";
	
	// $cetak->printOne($sernum, $jenis_barang, $tanggal_keluar, $tanggal_garansi);
}

// if (isset($_POST['cetak'])) {
	
// }
// else if(isset($_GET['serial_number'])){	
// 	$objBarang->serial_number = $_GET['serial_number'];	
// 	$objBarang->SelectOneBarang();
	
// }
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
	<div class="col-sm-6">
            <select class="col-sm-20" aria-label="Default select example" id="jenis_barang" name="jenis_barang" required>
              <option value="" disabled selected>--- Pilih Paket Produk ---</option>
              <option value="Silver">Silver</option>
              <option value="Gold">Gold</option>
              <option value="Platinum">Platinum</option>
            </select>
          </div>
	<!-- <input type="text" class="form-control" id="jenis_barang" name="jenis_barang" value="" required> -->
	</td>
	</tr>	
	<!-- <tr>
	<td>Quantity</td>
	<td>:</td>
	<td>
    <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" value="" required>
	</td>
	</tr>	 -->
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
	<input type="submit" class="btn btn-success" value="Generate" name="btnGenerate">
		<!-- <input type="submit" class="btn btn-success" value="Generate" name="btnSubmit"> -->
</form>	
</div>  
</div>

<?php 
	require_once('./class/class.barang.php'); 
	require_once('./class/class.status.php');     
	require_once('./pages/print-barang.php');
	
	$objBarang = new Barang(); 
	$objStatus = new Status();
	$cetak = new Print_barang();
	$objStatus->SelectAllStatus();
	
if(isset($_POST['btnGenerate'])){
	$serialnumberdefault = rand(00000001, 99999999);
	if (!isset($serialnumberdefault)) {
			$serialnumberdefault = rand(00000001, 99999999);
		}
	
	
			
				
	$jenis_barang = $_POST['jenis_barang'];
	$tanggal_keluar = $_POST['tanggal_keluar'];
	$tanggal_garansi = date('Y-m-d', strtotime($tanggal_keluar . ' + 6 months'));
	$objBarang->jenis_barang = $jenis_barang;	
	$objBarang->tanggal_keluar = $_POST['tanggal_keluar'];
	$objBarang->tanggal_garansi = date('Y-m-d', strtotime($tanggal_keluar . ' + 6 months'));
	// $quantity = $_POST['jumlah_produk'];

	if($jenis_barang == "Silver") {
		// $prefix = "S-";
		$sernum = "S-$serialnumberdefault";
		$objBarang->serial_number = $sernum;
	} else if ($jenis_barang == "Gold") {
		$sernum = "G-$serialnumberdefault";
		$objBarang->serial_number = $sernum;
		// $prefix = "G-";
	} else if ($jenis_barang == "Platinum") {
		$sernum = "P-$serialnumberdefault";
		$objBarang->serial_number = $sernum;
		// $prefix = "P-";
	}

	//details
	echo '
	<div class="container py-5 pb-5">  
	<div class="col-md-6">			
	<div class="container">
	<form action="" method="post">
	<table class="table" border="0">
	<tr>
	<td>Serial Number</td>
	<td>:</td>
	<td>
	<input type="text" class="form-control" value="'.$sernum.'" readonly>
	</td>
	</tr>';
	echo '<tr>
	<td>Jenis Barang</td>
	<td>:</td>
	<td>
	<input type="text" class="form-control" value="'.$jenis_barang.'" readonly>
	</td>
	</tr>';
	echo '<tr>
	<td>Tanggal Keluar</td>
	<td>:</td>
	<td>
	<input type="text" class="form-control" value="'.$tanggal_keluar.'" readonly>
	</td>
	</tr>';
	echo '<tr>
	<td>Tanggal Garansi Berlaku</td>
	<td>:</td>
	<td>
	<input type="text" class="form-control" value="'.$tanggal_garansi.'" readonly>
	</td>
	</tr>
	</table></form>
	<input type="submit" class="btn btn-success" value="Cetak PDF" name="btnSubmit">';
	//$objBarang->tanggal_garansi = $_POST['tanggal_garansi'];
	
	$statusdefault = 1;
	$objBarang->id_status = $statusdefault;
	
	// echo "<script> alert('$objBarang->jenis_barang'); </script>";
	
	// $id = IdGenerator::generate(['table' => 'serial_number', 'length' => 7, 'prefix' => date('y')]);
	
	// $objBarang->AddBarang();
	// echo "<script> alert('$objBarang->message'); </script>";
	
	//$cetak->printOne($sernum, $jenis_barang, $tanggal_keluar, $tanggal_garansi);
}
if (isset($_POST['btnSubmit'])) {
	$objBarang->AddBarang();
	$cetak->printOne($sernum, $jenis_barang, $tanggal_keluar, $tanggal_garansi);
}

// if (isset($_POST['cetak'])) {
	
// }
// else if(isset($_GET['serial_number'])){	
// 	$objBarang->serial_number = $_GET['serial_number'];	
// 	$objBarang->SelectOneBarang();
	
// }
?>