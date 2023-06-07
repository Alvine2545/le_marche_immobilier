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
    <div wire:ignore>
    <link rel="shortcut icon" href="{{asset('images/Logo-1.png')}}">
    <link rel="stylesheet" href="{{asset('css/lestyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

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
    <!-- CS Select -->
    <link rel="stylesheet" href="{{asset('css/cs-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/cs-skin-border.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">



    <style>
        .error{
            color: red;
            font-weight: bold;
        }
    </style>
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
                <div class="container header-section ">
                    <div class="nav-header align-items-center d-flex">

                            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark "><i></i></a>
                        <div>
                            <h1 class="" id="fh5co-logo"><a href="{{route('/')}}"><img class="" style="height: 120px;" src="{{asset('images/Logo-1.png')}}" alt="" id="navLogo"> </a></h1>
                            <!-- START #fh5co-menu-wrap -->
                        </div>
                        <nav class="col" id="fh5co-menu-wrap" role="navigation">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                    <li class="active" style=""><a href="{{url('/')}}" st">Acceuil</a></li>
                                    <li >
                                        <a href="" class="fh5co-sub-ddown">Services</a>
                                        <ul class="fh5co-sub-menu">
                                            <li class=""><a href="{{url('services/0')}}">Achetez</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="{{url('services/3')}}">Louez</a></li>
                                            <li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="{{url('services/1')}}">Mettez en location</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a href="{{url('services/2')}}">Vendez</a></li>
                                        </ul>
                                    </li>
                                    <li  class="fh5co-sub-ddown"><a href="{{url('/offres')}}">Offres des partenaires</a>
                                        {{-- <ul class="fh5co-sub-menu">
                                            <li class=""><a href="{{url('offres')}}">Devenire partenaire</a></li>
                                        </ul> --}}
                                    </li>
                                    <li ><a href="{{route('contact')}}">Contact</a></li>
                                    @guest('admin')
                                        <li>
                                            <a href="" class="" data-toggle="modal" data-target="#exampleModal">
                                                <i class="fa-solid fa-circle-user" style="font-size: 3em; color: #EFCF4F ;"></i>
                                            </a>
                                        </li>
                                    @endguest
                                    @auth('admin')
                                        <form id="mon-form" action="{{route('logout')}}" method="POST" style="">
                                            @csrf
                                            <li style="margin-top: 28px; ">
                                                <a type="submit" class="" style="background:none; border: none; cursor: pointer;">
                                                    <i class="fa fa-sign-out " style="font-size: 1em; color: #EFCF4F ;"></i> Se déconnecter
                                                </a>
                                            </li>
                                        </form>
                                    @endauth
                                </ul>

                        </nav>
                    </div>
                </div>
		    </header>
            <!-- Modal -->
            <div class="modal fade bg-light " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-md" role="document">
                    <div class="modal-content modal-custom">
                        <!-- <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel" style="color: #EFCF4F; font-weight: bold; text-align: center !important;">Connectez vous à votre compte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div> -->
                        <br>
                        <h5 class="modal-title text-center" id="exampleModalLabel"
                            style="color: #EFCF4F; font-weight: bold; text-align: center !important;">Connectez vous à votre compte
                        </h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                        <div class="modal-body">
                            <!-- Contenu du modal -->
                            <form method="POST" action="{{route('login')}}">
                                @csrf
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="email" class="form-control modal-custom" id="exampleFormControlInput1"
                                        placeholder="Votre nom d'utilisateur ou email" name="email"><br><br>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="exampleFormControlInput1">Email address</label> -->
                                    <input type="password" class="form-control modal-custom" id="exampleFormControlInput1"
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
            {{-- <div class="modal fade" id="incriptionModal" tabindex="-1" role="dialog" aria-labelledby="incriptionModal"
                aria-hidden="true">
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
                            <form >
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
            </div> --}}
            {{$slot}}
                <footer class="container-fluid mt-5">
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
    <script src="j{{asset('s/jquery.flexslider-min.js')}}"></script>
    <!-- Date Picker -->
    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
    <!-- CS Select -->
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/selectFx.js')}}"></script>
    <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

    <!-- Modernizr-->
    {{-- <script src="{{asset('admin/vendor/modernizr/modernizr.custom.js')}}"></script>
    <!-- PaceJS-->
    <script src="{{asset('admin/vendor/pace-progress/pace.min.js')}}"></script>
    <!-- jQuery-->
    <script src="{{asset('admin/vendor/jquery/dist/jquery.js')}}"></script>
    <!-- Bootstrap-->
    <script src="{{asset('admin/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <!-- Material Colors-->
    <script src="{{asset('admin/vendor/material-colors/dist/colors.js')}}"></script>
    <!-- Screenfull-->
    <script src="{{asset('admin/vendor/screenfull/dist/screenfull.js')}}"></script> --}}
    <!-- jQuery Localize-->
    {{-- <script src="{{asset('admin/vendor/jquery-localize/dist/jquery.localize.js')}}"></script> --}}
    <!-- Typeahead.js-->
    <script src="{{asset('admin/vendor/typeahead.js/dist/typeahead.bundle.js')}}"></script>
    <!-- App script-->
    <script src="{{asset('admin/js/app.js')}}"></script>

    <!-- jQuery Form Validation-->
    <script src="{{asset('admin/vendor/jquery-validation/dist/jquery.validate.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery-validation/dist/additional-methods.js')}}"></script>
    <!-- JQUERY STEPS-->
    {{-- <script src="{{asset('admin/vendor/jquery-steps/build/jquery.steps.js')}}"></script> --}}

    <!-- Main JS -->
    <script src="{{asset('js/main.js')}}"></script>
    <script>
        window.addEventListener('alert', event => {
             toastr[event.detail.type](event.detail.message,
             event.detail.title ?? ''), toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                }
            });
</script>
@stack('scripts')
    @livewireScripts
</body>

</html>
