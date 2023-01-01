<?php
    include '../inc.koneksi.php';
    class akun extends Connection{
        public function regist($username, $name, $pass, $id_role){
            $stmt = $this->connect()->prepare('INSERT INTO akun (email, nama, password, id_role) VALUES (?, ?, ?, ?);');
            if(!$stmt->execute(array($username, $name, $pass, $id_role))) {
                $stmt = null;
                echo "<H1>Sucess</H1>";
                exit();
            }
            
        }
    }
?>