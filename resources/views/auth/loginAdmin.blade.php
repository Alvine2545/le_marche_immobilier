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
    <link rel="shortcut icon" href="{{asset('images/Logo-1.png')}}">
    <link rel="stylesheet" href="{{asset('css/lestyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>

    

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('css/superfish.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('css/cs-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-border.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <!-- Modernizr JS -->
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    @livewireStyles
</head>

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <header id="fh5co-header-section" class="sticky-banner">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
                        <h1 id="fh5co-logo"><a href="index.html"><img class="icon-home img-responsive" style="height: 150px; margin-top: -45px;" src="{{asset('images/Logo-1.png')}}"
                                                alt="" id="navLogo"> </a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        
                        <nav id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu " id="fh5co-primary-menu">
                                    <li class="active" style=""><a href="{{url('/')}}" style="margin-top: 30px;">Acceuil</a></li>
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
                                    <li style="margin-top: 30px; "><a href="{{url('/offres')}}">Offres des partenaires</a></li>
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
                        <br>
                        <h5 class="modal-title text-center" id="exampleModalLabel"
                            style="color: #EFCF4F; font-weight: bold; text-align: center !important;">Connectez vous à votre compte
                        </h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                        <div class="modal-body">
                            <!-- Contenu du modal -->
                            <form>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="email" class="form-control modal-custom" id="exampleFormControlInput1"
                                        placeholder="Votre nom d'utilisateur"><br><br>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="email" class="form-control modal-custom" id="exampleFormControlInput1"
                                        placeholder="Votre nom d'utilisateur">
                                </div>
                            </form>
                            <p>Vous n'avez pas de compte ? Rapprochez vous de votre super administrateur. <!-- <a class="text-black" href="{{route('register')}}">ici</a>--></p><br>
                            <button type="button" class="btn btn-custom btn-block">Connexion</button>
                        </div>
                        <!-- <div class="modal-footer">
                            <button type="button" class="btn btn-custom">Connexion</button>
                        </div> -->
                    </div>
                </div>
            </div>
            
            <div class="compte">
                <section class=" container align-items-center">
                    <div class="row ">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 compte-session">
                            <div class="contact-form" style="">
                                <div class=""><h2 class="h2 title text-center" style="color: rgb(12, 12, 12); margin-top: 3vh; text-align: center;">--- CONNEXION ---</h2></div><br>
                                <div id="" class="row" action="" wire:submit.prevent='' name="contactform" method="" style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                    
                                    <form style="" class="" id="Part" action="{{route('admin.login')}}" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Adresse email</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="Votre adresse email" required name="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Mot de passe</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1"
                                                placeholder="Tapez le mot de passe" required name="password">
                                        </div>
                                        <div class="float-right">
                                            <a class=""  href="{{route('admin.register')}}">Créer un compte ici!</a>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" class="btn btn-custom">Enregistrer</button>
                                            <button class="btn" type="reset">Annuler</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </section>
            </div>


        </div>
        <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- jQuery Easing -->
    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('js/sticky.js')}}"></script>
    <!-- Superfish -->
    <script src="{{asset('js/hoverIntent.js')}}"></script>
    <script src="{{asset('js/superfish.js')}}"></script>
    <!-- Flexslider -->
    <script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <!-- CS Select -->
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/selectFx.js')}}"></script>


    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        // $(document).ready(function(){
            
        //     $(".type").click(function(){
        //         if ($(this).val() == "particulier") {
        //             $('#use').val($(this).val());
        //             $('#etape1').css("display", "none");
        //             $("#Part").show();
        //             $("#Part").css("display", "block");
        //             $('.compte').css('height', '100%');
        //             console.log($('#use').val());
        //         } else if($(this).val() == "agent") {
        //             $("#Agent").show();
        //             $('#use').val('agent_immo');
        //         }else if($(this).val() == "agence"){
        //             $("#Agence").show();
        //             $('#use').val('agence_immo');
        //         }
        //     });
        // });
    </script>
</body>

</html>