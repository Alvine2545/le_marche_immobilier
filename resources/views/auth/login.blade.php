<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Le Marché de l'immobilier</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="images/Logo-1.png">
    <link rel="stylesheet" href="css/lestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>

    

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    <!-- CS Select -->
    <link rel="stylesheet" href="css/cs-select.css">
    <link rel="stylesheet" href="css/cs-skin-border.css">
    <link rel="stylesheet" href="css/style.css">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.html"><img class="icon-home img-responsive" style="height: 150px; margin-top: -45px;" src="images/Logo-1.png"
                                                alt="" id="navLogo"> </a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu " id="fh5co-primary-menu">
                                    <li class="active" style=""><a href="acceuil.html" style="margin-top: 30px;">Acceuil</a></li>
                                    <li style="margin-top: 30px; ">
                                        <a href="" class="fh5co-sub-ddown">Services</a>
                                        <ul class="fh5co-sub-menu">
                                            <li class=""><a href="acheter.html">Achetez</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="mettre_location.html">Mettez en location</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="vendre.html">Vendez</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="louer.html">Louez</a></li>
                                        </ul>
                                    </li>
                                    <li style="margin-top: 30px; "><a href="offre.html">Offres des partenaires</a></li>
                                    <li style="margin-top: 30px; "><a href="{{route('contact')}}">Contact</a></li>
                                    <li style="margin-top: 20px; ">
                                        <a href="" class="" data-toggle="modal" data-target="#exampleModal">
                                            <i class="fa-solid fa-circle-user" style="font-size: 3em; color: #EFCF4F ;"></i>
                                        </a>
                                    </li>
                                </ul>
                        </nav>
                    </div>
                </div>
		    </header>
            <!-- Modal -->
            <div class="modal fade  " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md " role="document">
                    <div class="modal-content modal-custom">
                        <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel" style="color: #EFCF4F; font-weight: bold; text-align: center !important;"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <br>
                        <h5 class="modal-title text-center" id="exampleModalLabel"
                            style="color: #EFCF4F; font-weight: bold; text-align: center !important;">Connectez vous à votre compte
                        </h5>
                         
                        <div class="modal-body">
                            <!-- Contenu du modal -->
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                @method('post')
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="email" class="form-control modal-custom" id=""
                                        placeholder="Votre nom d'utilisateur" name="email"><br><br>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="password" class="form-control modal-custom"
                                        placeholder="Votre mot de passe" name="password">
                                </div>
                            
                            <p>Vous n'avez pas de compte ? Créez un compte <a class="text-black" data-toggle="modal"
                                    data-target="#incriptionModal">ici</a></p><br>
                            <button type="submit" class="btn btn-custom btn-block">Connexion</button>
                            </form>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-custom">Connexion</button>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="modal fade" id="incriptionModal" tabindex="-1" role="dialog" aria-labelledby="incriptionModal"
                aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="incriptionModal">Connectez vous à votre compte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Contenu du modal -->
                            <form>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="email" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Votre nom d'utilisateur">
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlTextarea1">Example textarea</label> -->
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        placeholder="Votre mot de passe"></textarea>
                                </div>
                            </form>
                            <p>Vous n'avez pas de compte ? Créez un compte <a class="text-black" data-toggle="modal"
                                    data-target="#incriptionModal">ici</a></p>
                        </div>
                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button> -->
                            <button type="button" class="btn btn-custom">Connexion</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- {{$slot}} --}}
                <footer class="container-fluid mt-5" style="">
                    <div class="row pt-5">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 separator"></div>
                        <div class="col-md-3"></div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-4"></div>
                        <div class="col-md-4 social-media text-center">
                            <i class="fa-brands fa-facebook p-1"></i>
                            <i class="fa-brands fa-instagram p-1"></i>
                            <i class="fa-brands fa-linkedin p-1"></i>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <div class="row">
                        <p class="text-light text-center">© Tout droit réservé EREBI SCI 2022</p>
                    </div>
                </footer>
        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/sticky.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>


    <!-- Main JS -->
    <script src="js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('#exampleModal').modal('show');
        });

    </script>
</body>

</html>