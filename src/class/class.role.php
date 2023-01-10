<?php
    //include './inc.koneksi.php';
    class Role extends Connection{

        private $id_role=0;
        private $role='';

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
    
        public function AddRole(){
            $sql = "INSERT INTO Role(id_role, role)
                    VALUES ('$this->id_role', '$this->role')";				
            $this->hasil = $this->connection->exec($sql);
                    
            if($this->hasil)
                $this->message ='Data berhasil ditambahkan!';					
            else
                $this->message ='Data gagal ditambahkan!';	
        }
        
        public function UpdateRole(){
            $sql = "UPDATE role SET role='$this->role'
                    WHERE id_role = '$this->id_role'";
            $this->hasil = $this->connection->exec($sql);
                
            if($this->hasil)
                $this->message ='Data berhasil diubah!';								
            else
                $this->message ='Data gagal diubah!';								
        }

        public function DeleteRole(){
            $sql = "DELETE FROM role WHERE id_role=$this->id_role";
            $this->hasil = $this->connection->exec($sql);
    
            if($this->hasil)
                $this->message ='Data berhasil dihapus!';								
            else
                $this->message ='Data gagal dihapus!';
        }

        /*public function SelectOneRole(){
            $sql = "SELECT a.*, r.role FROM Role a, role r WHERE a.id_role = r.id_role AND id_role = '$this->id_role'";
            $result = $this->connection->query($sql);
            
            if($result->rowCount() == 1){
                while ($data = $result->fetch(PDO::FETCH_OBJ))
                {
                    $this->id_role = $data->id_role;
                    $this->role = $data->role;
                    $this->password = $data->password;
                    $this->id_role = $data->id_role;
                    $this->role=$data->role;
                }
            }		
        }*/
        
        public function SelectAllRole(){
            $sql = "SELECT * FROM role";
            $result = $this->connection->query($sql);
            
            $arrResult = Array();
            $i=0;
            if($result->rowCount() > 0){
                while($data= $result->fetch(PDO::FETCH_OBJ))
                {
                    $objRole = new Role();
                    $objRole->id_role=$data->id_role;
                    $objRole->role=$data->role;
                    $arrResult[$i] = $objRole;
                    $i++;
                }
            }
            return $arrResult;
        }
    }
?>