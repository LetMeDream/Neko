<?php 
    session_start();
    $id = '';
    $nombre = $_SESSION['nombre'];
    //$db = mysqli_connect("127.0.0.1", "root", "", "letsphp");
    $db = mysqli_connect("127.0.0.1", "root", "_Al0h0m0ra420_", "nekomatsuri2");
    if(!$db){
        echo "error";
        header('Location: index.php');

    } else {
        $sql = sprintf("SELECT * FROM nekoclientes WHERE nombre='%s'", $nombre);
        // We sent above order to the database ↓↓
        $result = mysqli_query($db, $sql);
        
        foreach($result as $row){
            $id = $row['id']; 
        }
        $_SESSION['id']= $id;
        mysqli_close($db);
    }
  

?>