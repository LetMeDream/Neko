<?php 
require 'getMe.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>owo NekoMatsuri owo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="thankss.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="realThanks.css" />
        <script src="main.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Permanent+Marker|Unlock" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" media="screen" href="test.css" />
    </head>
    <body>
        <!-- Header cabeza de gato -->
        <div class="container">

            <div class="page-header">
                <img class="img-fluid mx-auto d-block" alt="Responsive image" src='header.png' />      
            </div>
            
        </div>
        
        <!-- Nombre.Cédula.Teléfono.Correo.NroOperación.OperaciónUpload.jpg <- REQUISITOS DEL FORM -->
        
              
        
        <div class='container main'>
            <div class='notyet'  >
         
                   
                        <table style='margin:100px auto;' role="table">
                            <thead role="rowgroup">
                                <tr role="row">
                                <th role="columnheader">Nombre</th>
                                <th role="columnheader">Cédula</th>
                                <th role="columnheader">Correo</th>
                                <th role="columnheader">Teléfono</th>
                                <th role="columnheader">NroDePago</th>
                                <th role="columnheader">Pago total</th>
                              
                                
                                
                                </tr>
                            </thead>
                            <tbody role="rowgroup">
                            <?php
                               
                                // Now printing

                                
                                printf('<tr role="row">
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s </td>
                                <td> %s BsS </td>
                            
                                </tr>',
                                    $_SESSION['nombre'],
                                    $_SESSION['cedula'],
                                    $_SESSION['correo'],
                                    $_SESSION['telefono'],
                                    $_SESSION['numeroOp'],
                                    $_SESSION['pagoTotal']);
                                

                            ?>
                            </tbody>
                        </table>

            </div>
            <div style='text-align:center;'>
                <a href='myFpdf.php' class='d-none d-sm-block'><button type="button" class="btn btn-danger">Descargar comprobante</button></a>
            </div>
        </div>  
      </div>
        </div>
        <div style='text-align:center;'>
            <a href='myFpdf.php'  class='d-block d-sm-none'><button type="button" class="btn btn-danger">Descargar comprobante</button></a>
            <a style= 'margin-top:25px;' class='d-block d-sm-none' href='index.php' ><button type="button" class="btn btn-danger">¡Obtén otra entrada!</button></a>
        </div>
      

                <div class="page-headr my d-none d-sm-block" style='margin-top:70px;text-align:center'>

                        <a href='index.php' type="button"  class="btn btn-lg btn-danger"><span style='font-family: "Fredoka One", cursive;font-size:18px;'>¡Obtén otra entrada!</span></a>
                    
                </div>



        

       

    </body>
</html>