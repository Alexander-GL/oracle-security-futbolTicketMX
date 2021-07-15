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
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
		$email = htmlspecialchars($_POST['email']);
        $numero_telefono = $_POST['numero_telefono'];
		$password = htmlspecialchars($_POST['password']);
        $codigo_postal = $_POST['codigo_postal'];
        $estado = $_POST['estado'];
		$tipo_usuario = $_POST['tipo_usuario'];

		$sha1_pass = sha1($password);
		$error = '';

		$query = "SELECT id_cliente FROM cliente WHERE email = '$email'";
		$stid = oci_parse($conn, $query);
		oci_execute($stid);
		$rows = oci_fetch_array($stid, OCI_ASSOC);

		if ($rows){
			$error = "¡El correo ya existe! Por favor, ingrese otro diferente... ";
		}else{
			$sqlCliente = "INSERT INTO cliente values (Cliente_SEQuence.nextval, '$nombre', '$apellidos', '$email', '$numero_telefono', '$sha1_pass', '$codigo_postal',  '$estado', '$tipo_usuario')";
			$stid = oci_parse($conn, $sqlCliente);


			$resultCliente = oci_execute($stid);

			if ($resultCliente)
			{
				$bandera = true;
			}else{
				$error = "¡Error al registrar! Intentelo de nuevo...";
			}
		}
	}
?>


<script>

        function validarNombre()
		{
			valor = document.getElementById("nombre").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner el Nombre');
				return false;
			}else{ return true;}
		}

        function validarApellidos()
		{
			valor = document.getElementById("apellidos").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner los Apellidos');
				return false;
			}else{ return true;}
		}

		function validarEmail()
		{
			valor = document.getElementById("email").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner el Email');
				return false;
			}else{ return true;}
		}

		function validarPassword()
		{
			valor = document.getElementById("password").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner la Contraseña');
				return false;
			}else{
				valor2 = document.getElementById("con_password").value;
				if (valor == valor2)
					{
						return true;
					}else{ alert('Las Contraseñas no coinciden'); return false;}
			}
		}

        function validarNumero()
		{
			valor = document.getElementById("numero").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner el Numero de Telefono');
				return false;
			}else{ return true;}
		}

        function validarCP()
		{
			valor = document.getElementById("cp").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner el Código Postal');
				return false;
			}else{ return true;}
		}

        function validarEstado()
		{
			valor = document.getElementById("estado").value;
			if(valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
				alert('Falta poner el Estado');
				return false;
			}else{ return true;}
		}

		function validarTipoCliente()
		{
			indice = document.getElementById("tipo_cliente").value;

			if(indice == null || indice==0) {
				alert('Seleccione tipo de cliente');
				alert(indice);
				return false;
			}else{ return true;}
		}

		function validar()
		{
			if (validarNombre() && validarApellidos() && validarEmail() && validarNumero()  && validarPassword() && validarCP() && validarEstado() && validarTipoCliente())
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
                <div class="form-box-signin">
                    <div class="button-box">
                        <div id="elegir-signin"></div>
                        <button type="button" class="toggle-btn"><a class="login-btn" href="login.php">Inicia Sesión</a></button>
                        <button type="button" class="toggle-btn"><a class="signin-btn" href="signin.php">Registrate</a></button>
                    </div>
                    <div class="redes-sociales">
                        <i class="fab fa-facebook-square" style="color: #123597;"></i>
                        <i class="fab fa-twitter-square" style="color: #4C83FF;"></i>
                        <i class="fab fa-google-plus-square" style="color: #F6416C;"></i>
                    </div>

                    <!-- Form SIGNIN-->
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" id="registrar" class="input-group">
                        <input type="text" name="nombre" id="nombre" class="input-field" placeholder="Nombre(s)" required pattern="[A-Za-z0-9]{1,15}">
                        <input type="text" name="apellidos" id="apellidos" class="input-field" placeholder="Apellidos" required pattern="[A-Za-z0-9]{1,15}">
                        <input type="email" name="email" id="email" class="input-field" placeholder="Correo Electrónico" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        <input type="text" name="numero_telefono" id="numero_telefono" class="input-field" placeholder="Número de Telefono" required pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}">
                        <input type="password" name="password" id="password" class="input-field" placeholder="Contraseña" required pattern="[A-Za-z0-9]{1,15}">
                        <input type="password" name="con_password" id="con_password" class="input-field" placeholder="Confirmar Contraseña" required pattern="[A-Za-z0-9]{1,15}">
                        <select id="tipo_usuario" class="tipou text-muted" name="tipo_usuario">
                            <option value="0">Seleccione el tipo de usuario...</option>
                            <option value="1">Aficionado</option>
                            <option value="2">Proveedor</option>
                        </select>
                        <input type="text" name="codigo_postal" class="input-field" placeholder="Código Postal" maxlength="5" required pattern="[A-Za-z0-9]{1,15}">
                        <select id="estado" class="estado-residencia text-muted" name="estado" required>
                            <option value="no">Estado de Residencia...</option>
                            <option value="Aguascalientes">Aguascalientes</option>
                            <option value="Baja California">Baja California</option>
                            <option value="Baja California Sur">Baja California Sur</option>
                            <option value="Campeche">Campeche</option>
                            <option value="Chiapas">Chiapas</option>
                            <option value="Chihuahua">Chihuahua</option>
                            <option value="CDMX">Ciudad de México</option>
                            <option value="Coahuila">Coahuila</option>
                            <option value="Colima">Colima</option>
                            <option value="Durango">Durango</option>
                            <option value="Estado de México">Estado de México</option>
                            <option value="Guanajuato">Guanajuato</option>
                            <option value="Guerrero">Guerrero</option>
                            <option value="Hidalgo">Hidalgo</option>
                            <option value="Jalisco">Jalisco</option>
                            <option value="Michoacán">Michoacán</option>
                            <option value="Morelos">Morelos</option>
                            <option value="Nayarit">Nayarit</option>
                            <option value="Nuevo León">Nuevo León</option>
                            <option value="Oaxaca">Oaxaca</option>
                            <option value="Puebla">Puebla</option>
                            <option value="Querétaro">Querétaro</option>
                            <option value="Quintana Roo">Quintana Roo</option>
                            <option value="San Luis Potosí">San Luis Potosí</option>
                            <option value="Sinaloa">Sinaloa</option>
                            <option value="Sonora">Sonora</option>
                            <option value="Tabasco">Tabasco</option>
                            <option value="Tamaulipas">Tamaulipas</option>
                            <option value="Tlaxcala">Tlaxcala</option>
                            <option value="Veracruz">Veracruz</option>
                            <option value="Yucatán">Yucatán</option>
                            <option value="Zacatecas">Zacatecas</option>
                        </select>
                        <input type="checkbox" class="check-box col-1"><span class="col-12">Al enviar, aceptas nuestros <a href="#" class="terminos">Términos</a> y <a href="#" class="terminos">Política de Compra</a> y tu información será utilizada como se describe en nuestra <a href="#" class="terminos">política de privacidad.</a></span>
                        <input type="submit" class="submit-btn" name="registrar" value="Registrate" onClick="validar()">
                        <h8 class="col-12 my-2 text-center text-muted">¿Ya tienes un cuenta? <a class="js-scroll-trigger" href="login.php">Inicia Sesión</a></h8>
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
