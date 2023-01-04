<?php
    class Barang extends Connection {
        private $serial_number = 0;
        private $jenis_barang = '';
        private $tanggal_keluar = '';
        private $tanggal_garansi = '';
        private $id_status = 0;

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

        public function addBarang(){
            $sql = "INSERT INTO barang (serial_number, jenis_barang, tanggal_keluar, tanggal_garansi, id_status) 
                    values ('$this->serial_number', '$this->jenis_barang', '$this->tanggal_keluar', '$this->tanggal_garansi', '$this->id_status')";
            $this->result = mysqli_query($this->connection, $sql);
    
            if($this->result)
                $this->message ='Data berhasil ditambahkan!';					
            else
                $this->message ='Data gagal ditambahkan!';	
       }

        public function updateBarang(){
            $sql = "UPDATE barang SET 
                    serial_number = '$this->serial_number',
                    jenis_barang = '$this->jenis_barang',
                    tanggal_keluar = '$this->tanggal_keluar',
                    tanggal_garansi = '$this->tanggal_garansi',
                    id_status = '$this->id_status',
                    WHERE serial_number = $this->serial_number";

            $this->result = mysqli_query($this->connection, $sql);
            
            if($this->result)
            $this->message ='Data berhasil diubah!';					
            else
            $this->message ='Data gagal diubah!';	
        }

        public function deleteBarang(){
            $sql = "DELETE FROM barang WHERE serial_number=$this->serial_number";
            $this->result = mysqli_query($this->connection, $sql);
            
            if($this->result)
               $this->message ='Data berhasil dihapus!';					
            else
               $this->message ='Data gagal dihapus!';	
        }

        /*public function selectOneBarang(){
            $sql = "SELECT * FROM barang WHERE serial_number='$this->serial_number'";
            $resultOne = mysqli_query($this->connection, $sql);	
            if(mysqli_num_rows($resultOne) == 1){
                $this->hasil = true;
                $data = mysqli_fetch_assoc($resultOne);
                $this->nama = $data['nama'];			
                $this->kodeBarang = $data['kodeBarang'];
                $this->namaBarang = $data['namaBarang'];
                $this->deskripsi = $data['deskripsi'];				
                $this->jumlahStok = $data['jumlahStok'];	
                $this->harga = $data['harga'];	
                $this->fotoBarang = $data['fotoBarang'];	
    
            }	
        }*/
    }

?>