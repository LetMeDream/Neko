<!DOCTYPE html>
<html>
    <head>

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130494692-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-130494692-1');
      </script>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bienvenido a NekoMatsuri</title>
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="thanks.css" />
        <script src="main.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Permanent+Marker|Unlock" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="creep.css" />
<!-- Imagenes de fondo -->
<style>
body {
  background-image: url('img/fondo.png');
  background-size: cover;

}
h2{
  color: white;
  font-family: Tw Cen Mt, Helvetica;
}
.notouch{
  margin-top: 30px;
  margin-left: auto;
  margin-right: auto;
}

</style>


    </head>
    <body>
  <!-- Header cabeza de gato -->
        <div class="container">
            <div class="page-header">
                <img class="img-fluid mx-auto d-block" width="auto" height="auto" alt="Responsive image" src='img/header.png' />
            </div>
        </div>
 <!-- Barriga -->
        <div class='container wr'>
          <h2>¡Bienvenido a la tienda de Neko Matsuri!</h2>

            <div class=' my'>
              <span onclick="location='pagar.php'">

               <img class='img-fluid' src='img/main.png' width="600" height="600" style='margin-left:-20px;margin-top:3px;'>
            </div>
        </div>

<!-- Comprar entrada -->
            <div class="container wr">
            <a style='margin-top: 8px;' class='d-block d-sm-none' href='pagar.php' ><button type="button" class="btn btn-danger">¡Comprar mi entrada!</button></a>
                          <div style='margin-top: 40px;'  class="page-header my d-none d-sm-block" style='margin-top:28px;'>
                            <a  href='pagar.php' type="button" class="btn btn-lg btn-danger "><span style='font-family: "Fredoka One", cursive;font-size:18px;'>¡Comprar mi entrada!</span></a>
                          </div>
            </div>

            <footer>
              <div class="notouch">

              </div>
              <div class="container">
                <img class="img-fluid" src='img/Descripcion.png' >
              </div>
            </footer>
    </body>
</html>
