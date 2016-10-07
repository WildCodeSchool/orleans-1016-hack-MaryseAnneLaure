<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Weather Moon</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!--Fonts link-->
    <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Kranky" rel="stylesheet"> 

        <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!--Map-->
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><p class="text-danger">Weather Moon</p></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse ">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about"><p class="text-success">About</p></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#footer"><p class="text-primary" >Contact</p></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container">
            <div class="row">
                    <div class="row text">
                        <div class="col-lg-offset-5 col-md-offset-4">
                            <h1>Mood Effect</h1>
                            <p>Elebritati diebus invadere parans dux ante, and edictus per solitudines Aboraeque amnis herbidas ripas. <br />To make a link smooth scroll to another section on the page, uorum indicio proditus, <br />qui admissi flagitii metu exagitati ad praesidia descivere Romana. <br />Absque ullo egressus effectu deinde tabescebat immobilis..</p>
                            <a class="page-scroll" href="#about"><i class="fa fa-angle-double-down" style="font-size:48px;color:yellow"></i></a>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
                </div>
        </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>How do you feel today ?</h1>
                        <form action="#about" method="post">
                            <label for="ville">Try a city</label>
                            <input type="text" name="ville" id="ville"/>
                            <input type="submit" value="Cloud it" />
                        </form> 
                </div>
            </div>
        </div>
    </section>

    <section id="about2" class="about2-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">                           
                        <?php
                        $ville = $_POST['ville'];
                        $request = 'http://api.openweathermap.org/data/2.5/weather?q='.$ville.'&APPID=2093ff5449c0cd4294aadbf8c0355fdd';
                        $response  = file_get_contents($request);
                        $tab  = json_decode($response, true);

                        echo ($tab['weather'][0]['main']);

                        $temps= $tab['weather'][0]['main'];
                        $deezer= file_get_contents("https://api.deezer.com/search?q=".$temps);
                        $vard = json_decode($deezer,true);

                        echo "<iframe src='" . $vard['data'][0]['preview'] . "'></iframe>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Map Section -->
    <div class="map-responsive">
    <iframe width="2080" height="400" frameborder="0" scrolling="no" marginheight="50" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=1.8859255313873293%2C47.89138454986686%2C1.8972015380859377%2C47.895585730463566&amp;layer=mapnik&amp;marker=47.89348518277107%2C1.8915635347366333" style="border: 1px solid black"></iframe>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">

            <h2>Made by <a href="https://github.com/messant/" target="_blank">Ezrea&<a href="https://github.com/annelf/" target="_blank">Nono</h2>
            <p>Copyright &copy; Your Website 2016</p>
        </div>
    </footer>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!--Map-->
    <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    <script src="exemple.js"></script>

</body>

</html>