<!DOCTYPE html>
<html lang="en">

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
</head>

<body id="page-top">

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 " id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">LOGO FutbolTicketMX</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#home">Inicio</a></li>
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
    <!-- Masthead-->
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-11 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold">Disfruta de los mejores partidos de la liga mx</h1>
                    <hr class="divider my-3" />
                </div>
                <div class="col-lg-6 align-self-baseline">
                    <p class="text-white-75 font-weight-light mt-2 mb-5">Somos un sitio de reventa, no el vendedor de boletos. Los precios pueden ser más o menos de su valor nominal.</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#home">Ver más</a>
                </div>
            </div>
        </div>
    </header>
    <!-- About-->
    <section class="page-section" style="background: #1f9b74" id="home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Todas las ventas son finales</h2>
                    <hr class="divider light my-4" />
                    <p class="text-white-50 mb-4">Dado que los boletos son elementos únicos y no reemplazables, no hay reembolsos, cambios o cancelaciones. Si un evento es pospuesto o reprogramado, los boletos serán aceptados para la fecha reprogramada. No será necesario emitir nuevos boletos; en el caso raro que nuevos boletos sean necesarios, serás contactado por el PROVEEDOR DE BOLETOS.</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger disabled" href="https://www.stubhub.com.mx/sellers">Vender boletos</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="points">
        <div class="container">
            <h2 class="text-center mt-0">Vende tus boletos</h2>
            <hr class="divider my-4" />
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <img class="img-fluid-sales mb-4" src="assets/img/stadiums/thumbnails/boletos.png" alt="..." />
                        <h3 class="h4 mb-2">Pon tus boletos a la venta</h3>
                        <p class="text-muted mb-0">Publica tus boletos de manera fácil y rápida en la plataforma de compra y venta de boletos más grande del mundo.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <img class="img-fluid-sales mb-4" src="assets/img/stadiums/thumbnails/anuncios.png" alt="..." />
                        <h3 class="h4 mb-2">Administra tus anuncios</h3>
                        <p class="text-muted mb-0">Ajusta tu precio fácilmente en cualquier momento y en cualquier lugar con nuestra app.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="mt-5">
                        <img class="img-fluid-sales mb-4" src="assets/img/stadiums/thumbnails/ventas.png" alt="..." />
                        <h3 class="h4 mb-2">¡Se vendieron tus boletos! ¿Ahora qué?</h3>
                        <p class="text-muted mb-0">Nosotros nos encargamos de los compradores y además, recibirás tu pago rápidamente.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- stadiums-->
    <div id="stadiums">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Chivas.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Chivas.jpg" alt="Estadio AKRON" />
                        <div class="stadiums-box-caption">
                            <div class="project-category text-white-50">Estadio AKRON</div>
                            <div class="project-name">Club Deportivo Guadalajara</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Cruz_Azul.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Cruz_Azul.jpg" alt="Estadio Cruz Azul" />
                        <div class="stadiums-box-caption">
                            <div class="project-category text-white-50">Estadio Azteca</div>
                            <div class="project-name">Cruz Azul Fútbol Club - Club América</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Atlas.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Atlas.jpg" alt="Estadio Jalisco" />
                        <div class="stadiums-box-caption">
                            <div class="project-category text-white-50">Estadio Jalisco</div>
                            <div class="project-name">Atlas Fútbol Club</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Xolos.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Xolos.jpg" alt="Estadio Caliente" />
                        <div class="stadiums-box-caption">
                            <div class="project-category text-white-50">Estadio Caliente</div>
                            <div class="project-name">Club Tijuana</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Puebla.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Puebla.jpg" alt="Estadio Cuauhtémoc" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio Cuauhtémoc</div>
                            <div class="project-name">Club Puebla</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Toluca.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Toluca.jpg" alt="Estadio Nemesio Díez" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio Nemesio Díez</div>
                            <div class="project-name">Deportivo Toluca</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Monterrey.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Monterrey.jpg" alt="Estadio BBVA Bancomer" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio BBVA Bancomer</div>
                            <div class="project-name">Club de Fútbol Monterrey</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Queretaro.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Queretaro.jpg" alt="Estadio Corregidora" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio Corregidora</div>
                            <div class="project-name">Querétaro Fútbol Club</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Pachuca.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Pachuca.jpg" alt="Estadio Hidalgo" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio Hidalgo</div>
                            <div class="project-name">Club de Fútbol Pachuca</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Santos.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Santos.jpg" alt="Estadio Corona" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio Corona</div>
                            <div class="project-name">Club Santos Laguna</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Tigres.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Tigres.jpg" alt="Estadio Universitario de la Universidad Autónoma de Nuevo León" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio Universitario de la Universidad Autónoma de Nuevo León</div>
                            <div class="project-name">Club Tigres</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="stadiums-box" href="assets/img/stadiums/fullsize/Leon.jpg">
                        <img class="img-fluid" src="assets/img/stadiums/thumbnails/Leon.jpg" alt="Estadio León" />
                        <div class="stadiums-box-caption p-3">
                            <div class="project-category text-white-50">Estadio León</div>
                            <div class="project-name">Club León</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to action-->
    <section class="page-section bg-dark text-white" id="tickets">
        <div class="container text-center">
            <h2 class="mb-4">¡Compra tu boleto para la siguiente jornada!</h2>
            <a class="btn btn-light btn-xl disabled" href="https://www.stubhub.com.mx/boletos-chivas-club-deportivo-guadalajara/ca773">Ir a Comprar</a>
        </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0">Contactanos</h2>
                    <hr class="divider my-4" />
                    <p class="text-muted mb-5">FutbolTicketMX es una compañía líder en la venta y reservaciones de boletos para eventos deportivos en toda la República Mexicana. Nuestra página promociona más de 1.5 millones de boletos anualmente.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                    <div>(33) 2834-5470</div>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 text-muted text-info"></i>
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:futbolticketmx@hotmail.com">futbolticketmx@hotmail.com
                </a>
                </div>
            </div>
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
