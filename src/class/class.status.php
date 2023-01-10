<?php
    
    class Status extends Connection{

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
    
        public function AddStatus(){
            $sql = "INSERT INTO status(id_status, status)
                    VALUES ('$this->id_status', '$this->status')";				
            $this->hasil = $this->connection->exec($sql);
                    
            if($this->hasil)
                $this->message ='Data berhasil ditambahkan!';					
            else
                $this->message ='Data gagal ditambahkan!';	
        }
        
        public function UpdateStatus(){
            $sql = "UPDATE status SET status='$this->status'
                    WHERE id_status = '$this->id_status'";
            $this->hasil = $this->connection->exec($sql);
                
            if($this->hasil)
                $this->message ='Data berhasil diubah!';								
            else
                $this->message ='Data gagal diubah!';								
        }

        public function DeleteStatus(){
            $sql = "DELETE FROM status WHERE id_status=$this->id_status";
            $this->hasil = $this->connection->exec($sql);
    
            if($this->hasil)
                $this->message ='Data berhasil dihapus!';								
            else
                $this->message ='Data gagal dihapus!';
        }

        /*public function SelectOnestatus(){
            $sql = "SELECT a.*, r.status FROM status a, status r WHERE a.id_status = r.id_status AND id_status = '$this->id_status'";
            $result = $this->connection->query($sql);
            
            if($result->rowCount() == 1){
                while ($data = $result->fetch(PDO::FETCH_OBJ))
                {
                    $this->id_status = $data->id_status;
                    $this->status = $data->status;
                    $this->password = $data->password;
                    $this->id_status = $data->id_status;
                    $this->status=$data->status;
                }
            }		
        }*/
        
        public function SelectAllStatus(){
            $sql = "SELECT * FROM status";
            $result = $this->connection->query($sql);
            
            $arrResult = Array();
            $i=0;
            if($result->rowCount() > 0){
                while($data= $result->fetch(PDO::FETCH_OBJ))
                {
                    $objstatus = new status();
                    $objstatus->id_status=$data->id_status;
                    $objstatus->status=$data->status;
                    $arrResult[$i] = $objstatus;
                    $i++;
                }
            }
            return $arrResult;
        }
    }
?>