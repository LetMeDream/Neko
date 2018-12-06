<?php 
    require 'auth.php';
    $edb = mysqli_connect("127.0.0.1", "root", "_Al0h0m0ra420_", "nekomatsuri2");
    //$edb = mysqli_connect('localhost', 'root', '', 'letsphp');
    // another database connection used to calculate the NUMBER OF TICKETS SOLD 
    $summ = 'SELECT * from nekoclientes';
    $reSum = mysqli_query($edb, $summ);
    $res= 0;
    foreach($reSum as $x){
        $res += $x['cantidadE'];
    }
    mysqli_close($edb);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lista de usuarios</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="testing.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
        <div style='text-align:center;'>
            <div class='here' >
                <h2>Se han vendido un total de <?php echo $res ?> entradas </h2>
                <table role="table" style='text-align: center;'>
                            <thead role="rowgroup">
                                <tr role="row">
                                    <th role="columnheader">Nombre</th>
                                    <th role="columnheader">Apellido</th> 
                                    <th role="columnheader">Cédula</th>
                                    <th role="columnheader">Correo</th>
                                    <th role="columnheader">Teléfono</th>
                                    <th role="columnheader">Banco</th>
                                    <th role="columnheader">Nº Operación</th>
                                    <th role="columnheader">Núm. de Entradas</th>
                                    <th role="columnheader">Pago Total</th>
                                    
                                
                                </tr>
                            </thead>
                            <tbody role="rowgroup">
                            <?php
                                
                                //$db = mysqli_connect('localhost', 'root', '', 'letsphp');
                                $db = mysqli_connect("127.0.0.1", "root", "_Al0h0m0ra420_", "nekomatsuri2");
                                $sql = 'SELECT * FROM nekoclientes';
                                $result = mysqli_query($db, $sql);
                                // Now printing
                                


                                foreach($result as $x){
                                printf('<tr>
                                <td> %s  </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                
                                </tr>',
                                    $x['nombre'],
                                    $x['apellido'],
                                    $x['cedula'],
                                    $x['correo'],
                                    $x['telefono'],
                                    $x['banco'],
                                    $x['numeroOp'],
                                    $x['cantidadE'],
                                    $x['pagoTotal']
                                    );
                                
                                }
                                mysqli_close($db);
                            ?>
                    </tbody>
                </table>
            <div>
        </div>
        
        <div>

            <a href='log out.php'><button type="button" class="btn btn-dark">Log out</button></a>

        </div>

</body>
</html>