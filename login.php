<?php 
    $nombre  = '';
    $errorM = '';
    session_start();
    if(isset($_POST['name'])&&isset($_POST['psw'])){
        $nombre = $_POST['name'];
        $db = mysqli_connect("127.0.0.1", "root", "_Al0h0m0ra420_", "nekomatsuri2");
        //$db = mysqli_connect('localhost', 'root', '', 'letsphp');

        $sql = sprintf("SELECT * FROM nekoadmins WHERE nombre = '%s'",
            mysqli_real_escape_string($db, $nombre));

        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);

        if($row){
            $pass = $row['clave'];
            if($pass == $_POST['psw']){
                $_SESSION['logged'] = true;
                header ("Location: userList.php");
            } else {
                $errorM = 'Clave incorrecta';
                $nombre = $_POST['name'];
            }
        } else {
            $errorM = 'Usuario inexistente';
            $nombre = $_POST['name'];
        }
        mysqli_close($db);
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
    <script src="login.js"></script>
</head>
<body>
    

    <div class="login-page">
        <div class="form">
           
            <form class="login-form" action='' method='post'>
                <input autocomplete='off' type="text" name='name' value="<?php echo $nombre ?>" placeholder="Nombre"/>
                <input autocomplete='off' type="password" name='psw' placeholder="Clave"/>
                <button>login</button>
                <span><?php echo $errorM; ?></span> 
            </form>
        </div>
    </div>


</body>
</html>