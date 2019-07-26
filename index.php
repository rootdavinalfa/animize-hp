<!doctype html>
<html lang="en">
<!--

Page    : index / Animize
Version : 1.0
Author  : Colorlib for dvnlabs.ml
URI     : https://colorlib.com / https://dvnlabs.ml

 -->

<head>
    <title>Animize - Anime watchers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Animize - Mobile App Anime Community">
    <link rel="shortcut icon" type="image/png" href="images/icon.png" />

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- Main css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
    <?php
    //including for bannerview/information
  require_once dirname(__FILE__).'/script/jsonparser.php';
  ?>

    <!-- Nav Menu -->

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="index.php"><img src="images/icon.png" alt=""
                                style="width:50px;height:50px;"> Animize</a> <button class="navbar-toggler"
                            type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar"
                            aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link active" href="#home">HOME <span
                                            class="sr-only">(current)</span></a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#features">FEATURES</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#gallery">GALLERY</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#contact">CONTACT</a> </li>
                                <li class="nav-item"><a href="#download"
                                        class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-gradient" id="home">
        <div class="container mt-5">
            <h1>Meet the New Anime Community App</h1>
            <p class="tagline">Animize,one of many Anime APP outthere to fullfill your needs for Anime watching</p>
        </div>
        <div class="img-holder mt-3"><img src="images/prev.png" alt="phone" class="img-fluid"></div>
    </header>

    <div class="client-logos my-5">
        <div class="section-title">
            <small>Information</small>
            <h3>Latest Information</h3>
        </div>
        <div class="img-gallery owl-carousel owl-theme">
            <?php
      $jp = new jsonparser();
      $jp->jsonparse("https://api.dvnlabs.ml/animize/banner/get");

      ?>
        </div>

        <div class="section light-bg" id="features">


            <div class="container">

                <div class="section-title">
                    <small>HIGHLIGHTS</small>
                    <h3>Features you will 💗💗</h3>
                </div>


                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">
                                        <h4 class="card-title">Wide genre provided</h4>
                                        <p class="card-text">From comedy to Supernatural,From romance to Drama and
                                            etc,we
                                            provide more,more and more
                                            genre just for you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">
                                        <h4 class="card-title">Gestured control playback</h4>
                                        <p class="card-text">Feature we proud is swiping left or right to
                                            reverse/forward.This feature save most of your
                                            energy⚡⚡! Be lazy sometime is good,beside your goal open this Application
                                            for
                                            lazy around and distressful</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card features">
                            <div class="card-body">
                                <div class="media">
                                    <span class="gradient-fill ti-3x mr-3"></span>
                                    <div class="media-body">
                                        <h4 class="card-title">Favorite your Anime,for watch later</h4>
                                        <p class="card-text">Didn't want over over and over search anime you want to
                                            watch?
                                            Star is your solution.Just
                                            click anime you want/package,you can starred them.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
        <!-- // end .section -->
        <div class="section light-bg" id="gallery">
            <div class="container">
                <div class="section-title">
                    <small>GALLERY</small>
                    <h3>App Screenshots</h3>
                </div>

                <div class="img-gallery owl-carousel owl-theme">
                    <img src="images/screen1.png" alt="image">
                    <img src="images/screen2.png" alt="image">
                    <img src="images/screen3.png" alt="image">
                    <img src="images/screen1.png" alt="image">
                </div>

            </div>

        </div>
        <!-- // end .section -->

        <div class="section bg-gradient" id="download">
            <div class="container">
                <div class="call-to-action">

                    <div class="box-icon"><span class="ti-mobile gradient-fill ti-3x"></span></div>
                    <h2>Download Client</h2>
                    <p class="tagline">Currently just served for Android platform</p>
                    <div class="my-4">
                        <a href="https://play.google.com/store/apps/details?id=ml.dvnlabs.animize.ima"
                            class="btn btn-light"><img src="images/playicon.png" alt="icon"> Google play</a>
                    </div>
                    <p class="text-primary"><small><i>*Works on Android 5.1(Lollipop MR1) and above. </i></small></p>
                </div>
            </div>

        </div>
        <!-- // end .section -->

        <div class="light-bg py-5" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <p class="mb-2"> <span class="ti-location-pin mr-2"></span> 42182,Bunga Raya Ave. Ciruas
                            Subs,Serang
                            Regency,Province Banten,Indonesia
                        </p>
                        <div class=" d-block d-sm-inline-block">
                            <p class="mb-2">
                                <span class="ti-email mr-2"></span> <a class="mr-4"
                                    href="mailto:moshi2_davin@dvnlabs.ml">moshi2_davin@dvnlabs.ml</a>
                            </p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        <!-- // end .section -->
        <footer class="my-5 text-center">
            <!-- Copyright removal is not prohibited! -->
            <p class="mb-2"><small>COPYRIGHT © 2017. ALL RIGHTS RESERVED. MOBAPP TEMPLATE BY <a
                        href="https://colorlib.com">COLORLIB</a></small></p>
            <p class="mb-2"><small>COPYRIGHT © 2019. ALL RIGHTS RESERVED. Animize is hard work served by dvnlabs.ml <a
                        href="https://dvnlabs.ml">DVNLABS</a></small></p>

            <small>
                <a href="license.php" class="m-2">License</a>
                <a href="privacy.php" class="m-2">Privacy Policy</a>
                <a href="tos.php" class="m-2">Usage Terms and User Terms Policy</a>
            </small>
        </footer>

        <!-- jQuery and Bootstrap -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- Plugins JS -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Custom JS -->
        <script src="js/script.js"></script>

</body>

</html>