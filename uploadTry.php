<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>owo NekoMatsuri owo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
  
      
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
        
              
        <div class='upload text-center' style='min-height:200px;'>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                 <span>Suba la foto de su comprobante de pago:</span>
                 <input type="file" name="fileToUpload" id="fileToUpload" required>
                 <input type="submit" value="Finalizar compra" name="submit" id='beau'>
            </form>
        </div>
        <div class='container wr'>
            <div class=' my'>
               <img class='img-fluid' src='img/logobig.jpg' width="200" height="200" style='margin-left:-20px;margin-top:3px;'>
            </div>
        </div>

    </body>
</html>