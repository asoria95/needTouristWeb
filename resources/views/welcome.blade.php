<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Es una agencia de turismo encargada de dar a conocer los lugares turísticos del Ecuador, así como permitirles a los clientes
    contratar paquetes turísticos alrededor del Ecuador">
    <meta name="author" content="Corebits 2019">

    <title>Need Tourist</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!--<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Custom Fonts -->
    <link href="asset('vendor/font-awesome/css/font-awesome.min.css')" rel="stylesheet" type="text/css">
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="asset('vendor/magnific-popup/magnific-popup.css')" rel="stylesheet">
    <!-- <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet"> -->

    <!-- Theme CSS -->
    <!--  <link href="asset('css/creative.min.css')" rel="stylesheet"> -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="{{route('index')}}">Need Tourist</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">Acerca de</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Servicios</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Paquetes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contactos</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('register') }}">Registrarse</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Need Tourist - Conoce una ciudad desde otro punto de vista</h1>
                <hr>
                <p>Need Tourist es una empresa que le permitirá conocer una ciudad de forma diferente, además de generar fuentes de empleos a jovenes con decisión y que conoscan su ciudad de residencia. También trabajamos de la mano con los negocios de la localidad, dinamizando la economía de la ciudad</p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">Conocer Más</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">¡ Turismo diferente !</h2>
                    <hr class="light">
                    <p class="text-faded">
                      Consiste en brindar a nuestros clientes una forma diferente de realizar turismo, se trata de lograr una experiencia personalizada para cada cliente y guí turístico, donde se podrá conocer más lugares como sitios turísticos, hoteles, restaurantes,
                      también como es el día a día de los habitantes de dicha ciudad. También se trata de aprovechar el potencial de los jóvenes de las diferentes localidades con ganas de emprender y trabajar para que se conviertan en guías turísticos de su ciudad
                      brindando la facilidad de recorrer la ciudad con un itinerario aprobado por la empresa. Es de esta manera que se logra crear un turismo distinto a la forma tradicional de realizarlo.
                    </p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">¡Empecemos!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"> Nuestros Servicios </h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Paquetes Turísticos</h3>
                        <p class="text-muted">Gran variedad de paquetes turíticos para llegar a donde a tu quieres.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Afiliados</h3>
                        <p class="text-muted">Sistema de afiliados que genera una oportunidad laboral para jovenes</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Negocios</h3>
                        <p class="text-muted">Calificación de negocios para unirse a nuestro servicio</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Al alcance de tu bolsillo</h3>
                        <p class="text-muted">Lo servicios ofrecidos cuentan con precios accesibles.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Negocios
                                </div>
                                <div class="project-name">
                                    Paquetes Turísticos
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Placer
                                </div>
                                <div class="project-name">
                                    Paquetes Turísticos
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="" class="portfolio-box">
                        <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Aventura
                                </div>
                                <div class="project-name">
                                    Paquetes Turísticos
                                </div>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Contáctanos</h2>
                    <hr class="primary">
                    <p> Contacta con nosotros estamos para solventar sus dudas </p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>+593 996674478</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:info@needtourist.corebitsdev.com">info@needtourist.corebitsdev.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
