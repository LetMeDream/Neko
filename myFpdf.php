    <?php
        session_start();
        require('fpdf.php');
       
        //Obteniendo datos de sesión
        $nombre= strtolower($_SESSION['nombre']);
        $cedula= $_SESSION['cedula'];
        $correo= strtolower($_SESSION['correo']);
        $numeroOp= $_SESSION['numeroOp'];
        $numero = $_SESSION['telefono'];
        $id = $_SESSION['id'];
        $pagoT = $_SESSION['pagoTotal'];
        $cantidadE = $_SESSION['cantidadE'];
        
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Times','I',16);
        $pdf->Image('logobig.jpg',10,100,50);
        $pdf->Image('logobig.jpg',150,100,50);
        $pdf->Cell(35,10,"Nombre: ",0 );
        $pdf->Cell(35,10,"$nombre" ,0,1 );
        $pdf->Cell(35,10,"Cedula: ",0 );
        $pdf->Cell(35,10,"$cedula" ,0,1 );
        $pdf->Cell(35,10,"Entradas: ",0 );
        $pdf->Cell(35,10,"$cantidadE" ,0,1 );

        $pdf->Cell(35,10,"Pago Total: ",0 );
        $pdf->Cell(35,10,"$pagoT"." bsS" ,0,1 );
        
        $pdf->Cell(40,10,"Nro Contacto: $numero",0,1 );
        $pdf->Cell(40,30,"Bajo el comprobante nro: $numeroOp",0,1);
        $pdf->Cell(180,100,"Disfrute el evento, usuario $id",0,1,'C');
        $pdf->Output('D',"$nombre.pdf");
    ?>