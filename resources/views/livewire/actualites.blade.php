<div class="fh5co-page-title section1-home" style="height: 350px;">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-sm-12 col-xs-12 text-center text-color">
                            <div class="row">
                                <h1></h1>
                                <h1></h1>
                            </div>
                            <div class="all-title-box">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12"
                                            style="margin: 2%; text-align: center;">

                                            <h2 class="h1 text-color">Bienvenue sur</h2>
                                            <h1 class="title h1 text-color"> LE MARCHE DE L'IMMOBILIER</h1>
                                            <h3 class=" text-black" style="font-size: 1.5rem; font-weight: bold;">Achetez, louez ou vendez un bien immobilier au Bénin</h3><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

            <div id="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center animate-box" wire:ignore>
                            <h2 class="text-center text-color">Les actualiés</h2>

                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        @foreach ($actualites as $actualite)
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                <h3 class="title" style="color: black; text-center">{{$actualite->reference}}</h3>
                                <div class="col-md-12">
                                    <img src="../storage/{{$actualite->photo}}" class="img-fluid" alt="" style="margin: auto; ">
                                </div><br>
                                <div class="col-md-8 col-sm-8 col-xs-8 ">
                                    <p style="font-size: 11px; font-weight: bold; text-align: center;" >
                                        @php
                                            echo $actualite->description;
                                        @endphp
                                    </p>
                                </div>
                                <div>

                            </div>
                        @endforeach
                        <!-- <div class="clearfix visible-md-block"></div> -->
                    </div>
                </div>
            </div>
            <div id="">
                <h3></h3>
                <div class="container " >
                    <a  class="position-fixed " href="{{route('offre-premium')}}">
                        <span class="text-danger position-fixed h-auto w-auto" style="bottom:0;right:5%;animation: blink 1s infinite; font-size:7em;" >
                            &#9733;
                        </span>
                        <span class="position-fixed text-warning" style="bottom:0;right:5%;animation: blink 1s infinite 0.5s; font-size:7em;">
                            &#9733;
                        </span>
                        <span class="text-uppercase text-danger font-weight-bold position-fixed"
                            style="white-space: pre-wrap; -webkit-text-stroke-color: white;right:6%;bottom:52px;font-size:16px;">  offres <br> premium</span>
                    </a>
                </div>
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

