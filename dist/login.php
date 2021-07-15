<!DOCTYPE html>
<html lang="en">

<!-- Login PHP - Oracle -->
<?php

    include('conexion.php');
    session_start();

if (isset($_SESSION['ID_CLIENTE']))
{
	header("location: venta_boletos.php");
}

	if (!empty($_POST))
	{
		$email = htmlspecialchars($_POST['email']);
		$password = htmlspecialchars($_POST['password']);
        $error='';
        $sha1_pass = sha1($password);

		$query = "SELECT id_cliente, tipou FROM cliente WHERE email = '$email' AND password = '$sha1_pass'";

		$stid = oci_parse($conn, $query);

        oci_execute($stid);
        $rows = oci_fetch_array($stid, OCI_ASSOC);

		/*while(oci_fetch_array($stid)){
			//echo $message = oci_result($stid,"ID_USUARIO");
		}*/

		if ($rows)
		{
			$_SESSION['ID_CLIENTE'] = $rows['ID_CLIENTE'];
            $_SESSION['TIPOU'] = $rows['TIPOU'];

			echo $_SESSION['ID_CLIENTE'];
            echo $_SESSION['TIPOU'];

			header("location: login.php");
		}else{
			$error="¡Correo o contraseña incorrectos! Intentelo de nuevo...";
		}
    }
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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">LOGO FutbolTicketMX</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="signin.php">Registrate</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Inicia Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- About-->
    <section class="page-section" style="background: rgb(34,193,195);
    background: linear-gradient(87deg, rgba(34,193,195,1) 0%, rgba(66,221,65,1) 100%);" id="home">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Obtén tu cuenta gratis para disfrutar de los mejores precios para ir a ver a tu equipo favorito de la Liga MX</h2>
                <hr class="divider my-5" />
            </div>
            <div class="container">
                <div class="form-box-login">
                    <div class="button-box">
                        <div id="elegir-login"></div>
                        <button type="button" class="toggle-btn"><a class="login-btn" href="login.php">Inicia Sesión</a></button>
                        <button type="button" class="toggle-btn"><a class="signin-btn" href="signin.php">Registrate</a></button>
                    </div>
                    <div class="redes-sociales">
                        <i class="fab fa-facebook-square" style="color: #123597;"></i>
                        <i class="fab fa-twitter-square" style="color: #4C83FF;"></i>
                        <i class="fab fa-google-plus-square" style="color: #F6416C;"></i>
                    </div>
                    <!-- Form LOGIN-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="login" class="input-group">
                        <input type="email" class="input-field" placeholder="Correo Electrónico" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <input type="password" class="input-field" placeholder="Contraseña" name="password" required pattern="[A-Za-z0-9]{1,15}">
                        <input type="checkbox" class="check-box col-1"><span class="col-12">Recordar mis datos</span>
                        <input type="submit" name="login" class="submit-btn" value="Ingresar">
                        <h8 class="col-12 my-2 text-center text-muted">Olvidaste tu contraseña</h8>
                        <h8 class="col-12 my-2 text-center text-muted">¿Nuevo en FutbolTicketMX? <a class="js-scroll-trigger" href="signin.php">Registrate</a></h8>
                        <h7 class="col-12 my-2 text-center text-muted">Si continúa más allá de esta página, acepta nuestros <a href="#" class="terminos"> Términos de uso.</a></h7>
                        <div style="font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
                    </form>
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
            function login() {
                x.style.left = "34px";
                y.style.left = "534px";
                z.style.left = "0px";
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
