<?php
    class Connection {

        public function connect() {
            try {
                $username = "root";
                $password = "";
                $dbh = new PDO("mysql:host=localhost;dbname=g-checker", "root", "");
                //$dbh = new PDO('mysql:host=localhost;dbname=ebs-commerce', $username, $password);
                return $dbh;
            }  
            catch (PDOException $e) {
                echo "<script>alert('could not connect to database apparently." . $e->getMessage() . "');</script>";
                print "Error: " . $e->getMessage() . "<br/>";
                die();
            }
        }

    }
?>