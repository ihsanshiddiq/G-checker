<?php
    //include './inc.koneksi.php';
    class Akun extends Connection{

        private $email='';
        private $nama='';
        private $password='';
        private $id_role=0;

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
    
        public function AddAkun(){
            $sql = "INSERT INTO akun(email, nama, password, id_role)
                    VALUES ('$this->email', '$this->nama', '$this->password', '$this->id_role')";				
            $this->hasil = $this->connection->exec($sql);
                    
            if($this->hasil)
                $this->message ='Data berhasil ditambahkan!';					
            else
                $this->message ='Data gagal ditambahkan!';	
        }
        
        public function UpdateAkun(){
            $sql = "UPDATE akun SET nama='$this->nama', password='$this->password'
                    WHERE email = '$this->email'";
            $this->hasil = $this->connection->exec($sql);
                
            if($this->hasil)
                $this->message ='Data berhasil diubah!';								
            else
                $this->message ='Data gagal diubah!';								
        }

        public function DeleteAkun(){
            $sql = "DELETE FROM akun WHERE email='$this->email'";
            $this->hasil = $this->connection->exec($sql);
    
            if($this->hasil)
                $this->message ='Data berhasil dihapus!';								
            else
                $this->message ='Data gagal dihapus!';
        }

        public function SelectOneAkun(){
            $sql = "SELECT a.*, r.role FROM akun a, role r WHERE a.id_role = r.id_role AND email = '$this->email'";
            $result = $this->connection->query($sql);
            
            if($result->rowCount() == 1){
                while ($data = $result->fetch(PDO::FETCH_OBJ))
                {
                    $this->email = $data->email;
                    $this->nama = $data->nama;
                    $this->password = $data->password;
                    $this->id_role = $data->id_role;
                    $this->role=$data->role;
                }
            }		
        }
        
        public function SelectAllAkun(){
            $sql = "SELECT a.*, r.role FROM akun a, role r WHERE a.id_role=r.id_role ORDER BY email";
            $result = $this->connection->query($sql);
            
            $arrResult = Array();
            $i=0;
            if($result->rowCount() > 0){
                while($data= $result->fetch(PDO::FETCH_OBJ))
                {
                    $objAkun = new Akun();
                    $objAkun->email = $data->email;
                    $objAkun->nama=$data->nama;
                    $objAkun->password = $data->password;
                    $objAkun->id_role=$data->id_role;
                    $objAkun->role=$data->role;
                    $arrResult[$i] = $objAkun;
                    $i++;
                }
            }
            return $arrResult;
        }

        public function ValidateEmail($inputemail){
            $sql = "SELECT * FROM akun WHERE email = '$inputemail'";
            $resultOne = $this->connection->query($sql);
    
            if ($resultOne->rowCount() == 1){
                while ($data = $resultOne->fetch(PDO::FETCH_OBJ)) {
                    $this->hasil = true;
                    $this->email = $data->email;
                    $this->nama=$data->nama;
                    $this->password=$data->password;
                    $this->id_role=$data->id_role;
                }
            }
        }

        /*public function regist($email, $nama, $password, $id_role){
            $stmt = $this->connect()->prepare('INSERT INTO akun (email, nama, password, id_role) VALUES (?, ?, ?, ?);');
            if(!$stmt->execute(array($email, $nama, $password, $id_role))) {
                $stmt = null;
                echo "<H1>Sucess</H1>";
                exit();
            }
            
        }*/
    }
?>