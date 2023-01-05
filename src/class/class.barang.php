<?php
    class Barang extends Connection {
        private $serial_number = 0;
        private $jenis_barang = '';
        private $tanggal_keluar = '';
        private $tanggal_garansi = '';
        private $id_status = 0;

        private $hasil = false;
		private $message ='';

        public function __get($atribute) {
            if (property_exists($this, $atribute)) {
                return $this->$atribute;
                }
        }
    
        public function __set($atribut, $value){
            if (property_exists($this, $atribut)) {
                    $this->$atribut = $value;
            }
        }

        public function AddBarang(){
            $sql = "INSERT INTO barang (serial_number, jenis_barang, tanggal_keluar, tanggal_garansi, id_status) 
                    values ('$this->serial_number', '$this->jenis_barang', '$this->tanggal_keluar', '$this->tanggal_garansi', '$this->id_status')";
            $this->hasil = $this->connection->exec($sql);
    
            if($this->hasil)
                $this->message ='Data berhasil ditambahkan!';					
            else
                $this->message ='Data gagal ditambahkan!';	
       }

        public function UpdateBarang(){
            $sql = "UPDATE barang SET 
                    serial_number = '$this->serial_number',
                    jenis_barang = '$this->jenis_barang',
                    tanggal_keluar = '$this->tanggal_keluar',
                    tanggal_garansi = '$this->tanggal_garansi',
                    id_status = '$this->id_status',
                    WHERE serial_number = $this->serial_number";

            $this->hasil = $this->connection->exec($sql);
            
            if($this->hasil)
            $this->message ='Data berhasil diubah!';					
            else
            $this->message ='Data gagal diubah!';	
        }

        public function DeleteBarang(){
            $sql = "DELETE FROM barang WHERE serial_number = '$this->serial_number'";
            $this->hasil = $this->connection->exec($sql);
            
            if($this->hasil)
               $this->message ='Data berhasil dihapus!';					
            else
               $this->message ='Data gagal dihapus!';	
        }

        public function SelectOneBarang(){
			$sql = "SELECT b.*, s.id_status FROM barang b, status s WHERE b.id_status = g.id_status AND serial_number = '$this->serial_number'";
			$result = $this->connection->query($sql);

			$arrResult = Array();
			if($result->rowCount() == 1){
				while ($data = $result->fetch(PDO::FETCH_OBJ))
				{
					$this->idbuku = $data->idbuku;
					$this->serial_number = $data->serial_number;
                    $this->jenis_barang = $data->jenis_barang;
                    $this->tanggal_keluar = $data->tanggal_keluar;
                    $this->tanggal_garansi = $data->tanggal_garansi;
                    $this->id_status = $data->id_status;
				}
			}
		}

        public function SelectAllBarang(){
			$sql = "SELECT b.*, s.id_status FROM barang b, status s WHERE b.id_status = g.id_status ORDER BY serial_number";
			$result = $this->connection->query($sql);
		
			$arrResult = Array();
			$i=0;
			if($result->rowCount() > 0){
				while($data = $result->fetch(PDO::FETCH_OBJ))
				{
					$objBarang = new Buku();
					$objBarang->idbuku = $data->idbuku;
					$objBarang->serial_number = $data->serial_number;
                    $objBarang->jenis_barang = $data->jenis_barang;
                    $objBarang->tanggal_keluar = $data->tanggal_keluar;
                    $objBarang->tanggal_garansi = $data->tanggal_garansi;
                    $objBarang->id_status = $data->id_status;
					$arrResult[$i] = $objBarang;
					$i++;
				}
			}
			return $arrResult;
		}
    }

?>