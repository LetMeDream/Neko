<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registrar datos</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="thankss.css" />
        <script src="main.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Permanent+Marker|Unlock" rel="stylesheet">
    </head>
    <body>
        <!-- Header cabeza de gato -->
        <div class="container">

            <div class="page-header">
                <img class="img-fluid mx-auto d-block" alt="Responsive image" src='header.png' />
            </div>

        </div>

        <!-- Nombre.Cédula.Teléfono.Correo.NroOperación.OperaciónUpload.jpg <- REQUISITOS DEL FORM -->
        <?php
        session_start();

            $nombre = $correo =$cedula = $numeroOp = $comprobante = $telefono = $telefonoErr ='';
            $nombreErr = $correoErr =$cedulaErr = $numeroOpErr = $comprobanteErr = $apellido = $apellidoErr = '';
            $bancoError = $banco ='';
            $cantidadE = $_SESSION['cantidadE'];


            if ( isset($_POST['submit']) ){
                $okGo = true;
                //upload

                //nombre
                if (empty($_POST['nombre'])){
                    $okGo = false;
                    $nombreErr = 'Necesitamos tu nombre';
                } else {
                    $nombre = test_input($_POST['nombre']);

                    // check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z]*$/",$nombre)) {
					$nombreErr = "Utilice únicamente letras; sin acentos.";
					$okGo = false;
					    }
                }
                // Apellido
                if (empty($_POST['apellido'])){
                    $okGo = false;
                    $apellidoErr = 'Necesitamos tu apellido';
                } else {
                    $apellido = test_input($_POST['apellido']);

                    // check if name only contains letters and whitespace
					if (!preg_match("/^[a-zA-Z]*$/",$nombre)) {
					$apellidoErr = "Utilice únicamente letras; sin acentos.";
					$okGo = false;
					    }
                }
                //correo
                if(!isset($_POST['correo']) || $_POST['correo'] == ''){
                    $correoErr = 'Ingrese el correo adecuadamente.';
                    $okGo = false;
                } else {
                    $correo = test_input($_POST['correo']);
                }
                // cédula
                if(!isset($_POST['cedula']) || $_POST['cedula'] == '' ||!ctype_digit($_POST['cedula'])){
                    $cedulaErr = 'Sólo números aceptados.';
                    $okGo = false;
                } else {
                    $cedula = test_input($_POST['cedula']);
                }
                //telefono
                if(!isset($_POST['telefono']) || $_POST['telefono'] == ''){
                    $telefonoErr = 'Teléfono necesario.';
                    $okGo = false;
                } elseif(!ctype_digit($_POST['telefono'])){
                    $telefonoErr = 'Sólo has de usar números.';
                    $telefono = $_POST['telefono'];
                    $okGo = false;
                } else {
                    $telefono = test_input($_POST['telefono']);
                }
                // numeroOp
                if(!isset($_POST['numeroOp']) || $_POST['numeroOp'] == ''){
                    $numeroOpErr = 'Comprobante necesario.';
                    $okGo = false;
                } elseif(!ctype_digit($_POST['numeroOp'])){
                    $numeroOpErr = 'Sólo has de usar números.';
                    $okGo = false;
                } else {
                    $numeroOp = test_input($_POST['numeroOp']);
                }
                // Banco
                if (!isset($_POST['colors']) || ($_POST['colors'] === '')){
                    $okGo = false;
                    
                }   else {
                    $banco = $_POST['colors'];
                    
                   
                }
                // db connect

                if($okGo){

                              $db = mysqli_connect("127.0.0.1", "root", "_Al0h0m0ra420_", "nekomatsuri2");
                        //$db = mysqli_connect("127.0.0.1", "root", "", "letsphp");
                                
                            if (!$db){
                                echo "No se pudo establecer contacto con la base de datos; reintente.";
                                echo mysqli_connect_error();
                            } else {
                                $sql = sprintf("INSERT INTO nekoclientes (nombre, apellido, cedula, correo, telefono,banco ,numeroOp, cantidadE, pagoTotal)
                                VALUES ('%s','%s','%s','%s','%s','%s', '%s','%s','%s')",
                                mysqli_real_escape_string($db, $nombre),
                                mysqli_real_escape_string($db, $apellido),
								mysqli_real_escape_string($db, $cedula),
                                mysqli_real_escape_string($db, $correo),
                                mysqli_real_escape_string($db, $telefono),
                                mysqli_real_escape_string($db, $banco),
                                mysqli_real_escape_string($db, $numeroOp),
                                mysqli_real_escape_string($db, $cantidadE),
                                mysqli_real_escape_string($db, $_SESSION['pagoTotal']
                                )
                               
                                );
                                mysqli_query($db, $sql);
                                mysqli_close($db);
                                $_SESSION['nombre']=$nombre;
                                $_SESSION['apellido']=$apellido;
                                $_SESSION['cedula']=$cedula;
                                $_SESSION['correo']=$correo;
                                $_SESSION['numeroOp']=$numeroOp;
                                $_SESSION['telefono']=$telefono;
                                


                                header('Location: thanks.php');


                            }
								


								
                }

            }

            // Sanitazing it a bit.
			function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
              }

        ?>
        <div class='container-fluid main'>

                <form class="contact_form" action="" method="post" name="contact_form" enctype="multipart/form-data">
                    <ul>
                        <li class='row'>
                            <a href='pagar.php'><img style='width:35px;' src="svg/arrow-left.svg" alt="icon name"></a>


                            <span class="required_notification"></span>
                        </li>
                        <li class='row' id='thisMf'>
                            <div class='col-25'><label for="name">Nombre:</label></div>
                            <div class='col-75'><input type="text" name="nombre" autocomplete='off' placeholder='Nombre' value="<?php echo $nombre;?>" /><span class='required_notification'><?php echo $nombreErr; ?><span></div>
                        </li>
                        <li class='row'>
                            <div class='col-25'><label for="apellido">Apellido:</label></div>
                            <div class='col-75'><input type="text" name="apellido" autocomplete='off' placeholder='Apellido' value="<?php echo $nombre;?>" /><span class='required_notification'><?php echo $nombreErr; ?><span></div>
                        </li>
                        <li class='row'>
                            <div class='col-25'><label for="cédula">Cédula:</label></div>
                            <div class='col-75'><input type="text" name="cedula" autocomplete='off' placeholder='20000000' value="<?php echo $cedula;?>" /><span class='required_notification'><?php echo $cedulaErr; ?><span></div>

                        </li>
                        <li class='row'>
                            <div class='col-25'><label for="correo">Correo:</label></div>
                            <div class='col-75'><input type="email" name="correo" autocomplete='off' placeholder='tucorreo@gmail.com' value="<?php echo $correo;?>"  /><span class='required_notification'><?php echo $correoErr; ?><span></div>

                        </li>
                        <li class='row'>
                            <div class='col-25'><label for="cel">Teléfono:</label></div>
                            <div class='col-75'><input type="text" name="telefono" autocomplete='off' placeholder='0424xxxxxxx'  value="<?php echo $telefono;?>"/><span class='required_notification'><?php echo $telefonoErr; ?><span></div>

                        </li>
                        <li class='row'>
                            <div class='col-25'><label for="NroOp">Nro de operación:</label></div>
                            <div class='col-75'><input type="text" name="numeroOp" autocomplete='off' placeholder='del comprobante bancario' value="<?php echo $numeroOp;?>" /><span class='required_notification'><?php echo $numeroOpErr; ?><span></div>

                        </li>
                        <li class='row'>
                            <div class='col-25'><label for="Banco">Banco usado:</label></div>
                            <div class='col-75'>  
                                                <select name="colors">
                                                    <option value="">Elija un banco.</option>
                                                    <option value="Banesco">Banesco</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="BOD">BOD</option>
                                                    <option value="Mercantil">Mercantil</option>
                                                    <option value="Bancrecer">Bancrecer</option>
                                                    <option value="Provincial">Provincial</option>
                                                    <option value="Nacional de Credito">Nacional de Crédito</option>
                                                    <option value="Bancaribe">Bancaribe</option>
                                                    <option value="Banplus">Banplus</option>
                                                    <option value="Exterior">Exterior</option>
                                                    <option value="Plaza">Plaza</option>
                                                    <option value="Activo">Activo</option>
                                                    <option value="Fondocomun">Fondo común</option>
                                                    <option value="Banfanb">Banfanb</option>
                                                    <option value="Caroni">Caroní</option>
                                                    <option value="DelSur">Del Sur</option>
                                                    <option value="Deltesoro">Del tesoro</option>
                                                    <option value="Bicentenario">Bicentenario</option>
                                                    <option value="Sofitasa">Sofitasa</option>
                                                    <option value="100%Banco">100% Banco</option>
                                                    <option value="Mibanco">Mi banco</option>
                                                    <option value="Bancamiga">Bancamiga</option>
                                                    <option value="AgricoladeVnzla.">Agrícola de Vnzla.</option>
                                                    <option value="Bancoex">Bancoex.</option>
                                                    <option value="Bangente">Bangente.</option>
                                                    <option value="Exportacionycomercio.">Exportación y comercio.</option>
                                                    <option value="InstiMunicipCredPopular">Inst. Municip. Créd. Popular</option>
                                                    <option value="InternacionaldedDesarollo">Internacional de desarollo</option>
                                                    <option value="NovoBanco">Novo Banco.</option>
                                                    <option value="Citibank">Citibank.</option>

                                                </select> 
                            </div>

                        </li>



                        <li class='row'>

                            <div class='col-75' style='text-align:center;'>
                                <button  class="submit" type="submit" name='submit'>¡Concretar pago!</button>
                            </div>
                        </li>
                    </ul>
                </form>

        </div>


    </body>
</html>
