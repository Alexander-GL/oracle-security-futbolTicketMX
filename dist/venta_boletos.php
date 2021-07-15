<!DOCTYPE html>
<html lang="en">

<?php

    include('conexion.php');
    session_start();

	if (isset($_SESSION['ID_CLIENTE'])) {
		header("location: login.php");
	}

	$bandera = false;

	
		//CODIGO PROTEGIDO A XSS
        $idCompra = $_POST['idCompra'];
        
		
		
		$error = '';

		$query = "SELECT * FROM BOLETO";
		$stid = oci_parse($conn, $query);
		oci_execute($stid);
        $rows = oci_fetch_array($stid, OCI_ASSOC);
        $bandera=true;

	
?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content=" Sistema de compra de boletos para juegos de futbol" />
    <meta name="author" content="FutbolTicketMX" />
    <title>:: FutbolTicketMX ::</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/estilos-login.css" rel="stylesheet" />
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top py-4 " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">LOGO FutbolTicketMX</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php">Inicio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="boleto.php">Boletos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="estadio.php">Estadios</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pago.php">Información de Compra</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="partido.php">Partidos</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="venta_boletos.php">Compras</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Inicia Sesión</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="exit.php">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- About-->
    <section class="page-section" id="home">

            <!-- Aqui va el formulario en donde el vendedor va a poder agregar los boletos que quiera vender-->
            <div class="container col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID Boleto</th>
                    <th scope="col">Zona</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">ID Partido</th>
                    <th scope="col">Precio</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php 
                $i=0;
                while(($rows1=oci_fetch_assoc($stid))!=false){
                $i++;
                ?>    
                    <tr>
                    <td><?php echo $rows1['ID_BOLETO']?></td>
                    <td><?php echo $rows1['ZONA']?></td>
                    <td><?php echo $rows1['FECHA']?></td>
                    <td><?php echo $rows1['ID_PARTIDO']?></td>
                    <td><?php echo $rows1['PRECIO']?></td>
                    </tr>
                </tbody>
                <?php
                }
                ?>
                </table>
            </div>
        </section>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="small text-center text-muted">
                Copyright &copy;
                <!-- This script automatically adds the current year to your website footer-->
                <!-- (credit: https://updateyourfooter.com/)-->
                <script>
                    document.write(new Date().getFullYear());

                </script>
                - FutbolTicketMX
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
