<?php
    class Barang extends Connection{

        private $serial_number=0;
        private $jenis_barang='';
        private $tanggal_keluar='';
        private $tanggal_garansi='';
        private $id_status=0;
        private $status='';

        private $hasil= false;
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
            $sql = "INSERT INTO barang(serial_number, jenis_barang, tanggal_keluar, tanggal_garansi, id_status)
                    VALUES ('$this->serial_number', '$this->jenis_barang', '$this->tanggal_keluar', '$this->tanggal_garansi', '$this->id_status')";				
            $this->hasil = $this->connection->exec($sql);
                    
            if($this->hasil)
                $this->message ='Data berhasil ditambahkan!';					
            else
                $this->message ='Data gagal ditambahkan!';	
        }
        
        public function UpdateBarang(){
            $sql = "UPDATE barang SET id_status=3 WHERE serial_number = '$this->serial_number'";      
            $this->hasil = $this->connection->exec($sql);
            
            if($this->hasil)
                $this->message ='Claim garansi berhasil!';								
            else
                $this->message ='Claim garansi gagal!';						
        }

        /*public function UpdateBarang(){
            if($this->id_status == 1) {
                $sql = "UPDATE barang SET id_status=3
                WHERE serial_number = '$this->serial_number'";      
                $this->hasil = $this->connection->exec($sql);
                
                if($this->hasil)
                    $this->message ='Claim garansi berhasil!';								
                else
                    $this->message ='Claim garansi gagal!';	

            } elseif ($this->id_status == 2){
                $this->message ='Garansi sudah tidak berlaku.';	
            } elseif ($this->id_status == 3) {
                $this->message ='Garansi sudah di claim';	
            }						
        }*/

        public function DeleteBarang(){
            $sql = "DELETE FROM barang WHERE serial_number=$this->serial_number";
            $this->hasil = $this->connection->exec($sql);
    
            if($this->hasil)
                $this->message ='Data berhasil dihapus!';								
            else
                $this->message ='Data gagal dihapus!';
        }

        public function SelectOneBarang(){
            $sql = "SELECT b.*, s.status FROM barang b, status s WHERE b.id_status = s.id_status AND serial_number = '$this->serial_number'";
            $result = $this->connection->query($sql);
            
            if($result->rowCount() == 1){
                while ($data = $result->fetch(PDO::FETCH_OBJ))
                {
                    $this->serial_number = $data->serial_number;
                    $this->jenis_barang = $data->jenis_barang;
                    $this->tanggal_keluar = $data->tanggal_keluar;
                    $this->tanggal_garansi = $data->tanggal_garansi;
                    $this->id_status = $data->id_status;
                    $this->status=$data->status;
                }
            }		
        }
        
        public function SelectAllBarang(){
            $sql = "SELECT b.*, s.status FROM barang b, status s WHERE b.id_status = s.id_status ORDER BY serial_number";
            $result = $this->connection->query($sql);
            
            $arrResult = Array();
            $i=0;
            if($result->rowCount() > 0){
                while($data= $result->fetch(PDO::FETCH_OBJ))
                {
                    $objBarang = new Barang();
                    $objBarang->serial_number = $data->serial_number;
                    $objBarang->jenis_barang=$data->jenis_barang;
                    $objBarang->tanggal_keluar = $data->tanggal_keluar;
                    $objBarang->tanggal_garansi = $data->tanggal_garansi;
                    $objBarang->id_status=$data->id_status;
                    $objBarang->status=$data->status;
                    $arrResult[$i] = $objBarang;
                    $i++;
                }
            }
            return $arrResult;
        }
    }
?>