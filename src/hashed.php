<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    //include 'inc.koneksi.php';
    ?>
</head>

<body>

    <div class="container py-5" style="height: 500px;
                        width: auto;
                        left: 414px;
                        top: 121px;
                        border-radius: 17px; background-color: #FFFFFF;
                        text-align: center;
                        ">
        <img src="../assets/logo.png" alt="">
        <h2 class="my-3">LOGIN</h2>
        <form action="" method="post">
        <div class="form-group px-3" style="text-align: left;">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control textinput" id="username" placeholder="" require>
        </div>
        <div class="form-group px-3 py-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control textinput" id="password" placeholder="" require>
        </div>
        <button type="submit" name="submit" href="" class="btn primary-button"><b>Login</b></button>
        </form>
        <?php
        include 'inc.koneksi.php';

          
        class Masok extends Connection{

            private $username;
            private $pass;
            private $name;
            private $id_role;
            public function _construc(){

                // $this->username = $username;
                // $this->pass = $hashedpass;
                // $this->name = $name;
                // $this->id_role = $role;
            }
            
            public function regist($username, $name, $pass, $id_role){
                $stmt = $this->connect()->prepare('INSERT INTO akun (email, nama, password, id_role) VALUES (?, ?, ?, ?);');
                if(!$stmt->execute(array($username, $name, $pass, $id_role))) {
                    $stmt = null;
                    echo "<H1>Sucess</H1>";
                    exit();
                }
                
            }


        }
        if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $name = "ADMIN TESTING";
            $role = "ADMIN TESTING";
            $hashedpass = password_hash($password, PASSWORD_ARGON2I, array('cost' => 8));
            $pushed = new Masok();
            $pushed->regist($username, $name, $hashedpass, $role);
            
        } 
        // echo "<H5>$pass</H5>";
        // echo $_GET['username'];
        

        ?>
    </div>

</body>


</html>