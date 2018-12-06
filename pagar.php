<!-- Raul comentar no cuesta nada -->
<!--     , ↑ <----                -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pagar entradas</title>
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
        <?php
// Precio
            session_start();
            if(isset($_POST['cantidadE'])){
                $precio= 650;
                $_SESSION['cantidadE'] = $_POST['cantidadE'];
                $_SESSION['pagoTotal'] = $_POST['cantidadE']*$precio;
            }




           /*
            $precio = 2;
            if(isset($_POST["submit2"])) {
                if(isset($_POST['cantidadE'])){
                    $_SESSION['cantidadE'] = $_POST['cantidadE'];
                }
                $result = $precio*$_SESSION['cantidadE'];
                $_SESSION['pagoTotal'] = $result;

            }
                */

        ?>
  <!-- Header cabeza de gato -->
        <div class="container">

            <div class="page-header">
                <a href='index.php'><img  class="img-fluid mx-auto d-block" alt="Responsive image" src='header.png' />     </a>
            </div>

        </div>
  <!-- barriga-->

        <div  class='upload text-center' style='min-height:200px; '>
            <div class='myDiv'>
            <form style='margin-top:35px; margin-right:50px;' action="" method="post" enctype="multipart/form-data" style='text-align:center;' required>
                    <ul>
                        <li class='row'>
                                    <div class='col-50'><label for="cantidad">Cantidad de entradas</label></div>


                        </li>



                        <li class='row'>
                                    <div class='col-50'><input id='cantidad' required type="number" name="cantidadE" value="<?php echo $_POST['cantidadE']?>" min='1' max='100'/></div>
                        </li>
<!-- precio -->
                        <li class='row'>
                            <span class='col-50'>El total a pagar es
                                    <script type="text/javascript">
                                        var cantidad= document.getElementById('cantidad').value;
                                        var precio=650;
                                        document.write(cantidad*precio, ' bsS');


                                    </script>
                            <span>
                        </li>
                        <script type="text/javascript">
                            var cantidad= document.getElementById('cantidad');
                            var sex=$precio*model;
                        </script>
                        <li class='row'>

                            <div class='col-50'>
                                <input style='color:black;' type="submit" value="Calcular" name="submit2" id='beauti'>

                            </div>
                        </li>

                    </ul>
                </form>
                <!-- datos de pago -->
                    <div class='container wr'>
                        <div class=' my'>
                             <img class='img-fluid' src='img/datos.jpg' width="600" height="600" style='margin-left:-20px;margin-top:3px;'>
                        </div>
                </div>

<!-- subir comprobante -->
                 <div class='container wr'>
                    <div class=' my'>
                        <form style='margin-top:35px;' action="upload.php" method="post" enctype="multipart/form-data" style='text-align:center;'>
                            <ul >

                                <li class='row'>
                                    <div id='muv' class='col-50'>
                                        <span>Suba la foto de su comprobante de pago:</span>
                                        <input type="file" name="fileToUpload" id="fileToUpload" required>
                                    </div>
                                </li>
                                <li  class='row'>

                                    <div class='col-50'>
                                        <input style='color:white;' type="submit" value="Registrar pago." name="submit" id='beau'>
                                        <img style='width:35px;' src="svg/arrow-right.svg" alt="icon name">
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

            </div>
        </div>
  <!--Botton
        <div class="container wr">
                <div class="page-header my" style='margin-top:28px;'>
                        <a href='form.php' type="button" class="btn btn-lg btn-danger"><span style='font-family: "Fredoka One", cursive;font-size:18px;'>Registrar Pago</span></a>
                </div>
        </div>-->

    </body>
</html>
