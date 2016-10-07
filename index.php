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

    <!--Fonts link-->
    <link href="https://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/css?family=Kranky" rel="stylesheet"> 


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

            <div class="container" >
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                <a class="navbar-brand page-scroll" href="#page-top"><p class="text-danger">Weather Mood</p></a>
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
                        <a class="page-scroll" href="#contact"><p class="text-primary" >Contact</p></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-6 col-md-offset-6 col-sm-offset-6 vcenter">
                    <div class="text">
                        <h1 class="text-center">Season Effect</h1>
                        <p class="text-center">Elebritati diebus invadere parans dux ante, and edictus per solitudines Aboraeque amnis herbidas ripas. <br />To make a link smooth scroll to another section on the page, uorum indicio proditus, <br />qui admissi flagitii metu exagitati ad praesidia descivere Romana. <br />Absque ullo egressus effectu deinde tabescebat immobilis..</p>
                        <a class="page-scroll" href="#about"><i class="fa fa-angle-double-down" style="font-size:48px;color:yellow"></i></a>
                    </div>
                </div>
             </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <h2>How do you feel today ?<br />&emsp;&emsp;Type a city</h2>
                    <form class="title" action="#about" method="post">
                        <label for="ville">
                            <input type="text" name="ville" id="ville"/>
                            <input type="submit" value="Cloud it"/>
                        </label>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="about2" class="about2-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
    </section>

    <!-- Contact Section -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</body>

</html>