<!DOCTYPE html>
<html lang="en">

<!-- Signin PHP - Oracle -->

<?php

    include('conexion.php');
    session_start();

	if (isset($_SESSION['ID_CLIENTE'])) {
		header("location: login.php");
	}

	$bandera = false;

	if (!empty($_POST))
	{
		//CODIGO PROTEGIDO A XSS
        $idEstadio = $_POST['idEstadio']; 
        $nombreEquipo= $_POST['nombreEquipo'];
        $fecha = $_POST['fecha'];
		
		
		$error = '';

		$query = "INSERT into partido values (partido_sequence.nextval, '$idEstadio', '$nombreEquipo', '$fecha')";
		$stid = oci_parse($conn, $query);
		oci_execute($stid);
          $bandera=true;

	}
?>


<script>

        function validarNombreEstadio()
		{
			valor = document.getElementById("nombreEstadio").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner el Nombre');
				return false;
			}else{ return true;}
		}
		

		function validar()
		{
			if (validarNombreEstadio())
			{
				document.registro.submit();
			}
		}

	</script>

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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">LOGO FutbolTicketMX</a>
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
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="exit.php"><i class="fas fa-sign-out-alt fa-2x"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- About-->
    <section class="page-section" style="background: rgb(34,193,195);
    background: linear-gradient(87deg, rgba(34,193,195,1) 0%, rgba(66,221,65,1) 100%);" id="home">
        <div class="row justify-content-center">
            <div class="container">
                <div class="form-box-signin">
                    <div class="text-center">
                    <h2 class="mt-0">PARTIDOS LIGA MX</h2>
                    <hr class="divider my-5" />
                    </div>
                    <!-- Form SIGNIN-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="registrar" class="input-group">
                        <input type="number" name="idEstadio" id="idEstadio" class="input-field" placeholder="Id Estadio" required pattern="[A-Za-z0-9]{1,15}">
                        <input type="text" name="nombreEquipo" id="nombreEquipo" class="input-field" placeholder="Equipos" required pattern="[A-Za-z0-9]{1,30}">
                        <input type="text" name="fecha" id="fecha" class="input-field" placeholder="Fecha">
                        <input type="submit" class="submit-btn" name="registrar" value="Registrate" onClick="validar()">
                    </form>

                    <?php if($bandera){ ?>
                        <?php echo '<script type="text/javascript">alert("¡Registro exitoso!");</script>'; ?>
                        <?php }else{ ?>
                        <br />
                        <div style="font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
                    <?php } ?>
                </div>
            </div>
            <div class="curva">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#f8f9fa" fill-opacity="1" d="M0,256L48,240C96,224,192,192,288,192C384,192,480,224,576,202.7C672,181,768,107,864,69.3C960,32,1056,32,1152,64C1248,96,1344,160,1392,192L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
        </div>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("registrar");
            var z = document.getElementById("elegir");

            function registrar() {
                x.style.left = "-500px";
                y.style.left = "34px";
                z.style.left = "120px";
            }
        </script>
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
