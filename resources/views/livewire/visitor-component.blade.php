<div>
    
    @if ($liste)
        @include('livewire.actualites')
    @else
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
            <!-- <div id="fh5co-features"> -->
            <div id="">
                <h3></h3>
                <div class="container">
                    <h2 class="text-center text-color">Avec l'appui de</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-2 col-xs-2" style="margin-left: 50px;"></div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 d-flex align-items-stretch" style="">
                            <div class="" style="display: flex; justify-content: center; height: 100%; width: 100%;">
                                <img src="../storage/{{$sponsor->logo}}" class="img-fluid" alt="" style="margin: auto; ">
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br>
            <div id="">
                <h3></h3>
                <div class="container" >
                    <h2 class="text-center text-color">Nos Partenaires</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                
                                <div class="carousel-inner">
                                    <?php $i = 0; ?>
                                    @foreach ($parteners->chunk(4) as $chunk)
                                        <div class="carousel-item{{ $loop->first ? ' active' : '' }}">
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                @foreach ($chunk as $image)
                                                    <div class="col-md-3">
                                                        <img src="storage/{{$image->logo}}" class="d-block w-100" alt="{{$image->name}}" style="height: 100%; width: 100%;">
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endforeach
                                    @if (count($parteners)>= 4)
                                        <ol class="carousel-indicators">
                                            @foreach ($parteners->chunk(4) as $chunk)
                                                <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->first}}" class="{{ $loop->first ? ' active' : '' }}"></li>
                                            @endforeach
                                        </ol>
                                    @endif
                                        {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> --}}
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>
            <div id="">
                <h3></h3>
                <div class="container">
                    <h2 class="text-center text-color">Le marché de l'immobilier</h2>
                    <div class="row box-custom div-form">
                        <div class="col-md-12 animate-box">
                            <div class="feature-left">
                              <p style="font-weight: bolder;">  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus
                                tenetur
                                perferendis harum debitis reiciendis deleniti nisi? Ipsum, architecto praesentium. Quo
                                exercitationem
                                inventore consectetur eos! Tempore, cupiditate eum.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus
                                tenetur
                                perferendis harum debitis reiciendis deleniti nisi? Ipsum, architecto praesentium. Quo
                                exercitationem
                                inventore consectetur eos! Tempore, cupiditate eum.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus
                                tenetur.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br><br><br>
            <div id="">
                <h3></h3>
                <div class="container">
                    <h2 class="text-center text-color">Nos services</h2>
                    <div class=" row animate-box ">
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                        <div class="col-lg-2 col-md-3 col-sm-9 col-xs-9 div-custom service-custom" style="margin-right: 4em; margin-bottom: 2em;">
                            <div class=" " style="display:block;" >
                                <div class="single-services ">
                                    <img src="images/logo/20945141.jpg" class="img-responsive float-end" alt="">
                                </div>
                                <div class="single-services">
                                    <div class="single-services-desc" style="position: absolute;">
                                        <a href="{{url('services/2')}}" class="text-bold btn-round-custom btn-block btn-lg " style="font-size: 13px; margin-top: 150px !important; text-align: center;">Mise en vente de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-9 col-xs-9 div-custom service-custom" style="margin-right: 4em; margin-bottom: 2em;">
                            <div class=" " style="display:block;" >
                                <div class="single-services ">
                                    <img src="images/logo/20945141.jpg" class="img-responsive float-end" alt="">
                                </div>
                                <div class="single-services">
                                    <div class="single-services-desc" style="position: absolute;">
                                        <a href="{{url('services/1')}}" class="text-bold btn-round-custom btn-block btn-lg" style="font-size: 13px; margin-top: 150px !important; text-align: center; margin-right: 5% !important; ">Mise en location de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-9 col-xs-9 div-custom service-custom" style="margin-right: 4em; margin-bottom: 2em;">
                            <div class=" " style="display:block;" >
                                <div class="single-services" style="max-height: 100% !important;">
                                    <img src="images/logo/20945141.jpg" class="img-responsive float-end" alt="" >
                                </div>
                                <div class="single-services">
                                    <div class="single-services-desc" style="position: absolute;">
                                        <a href="{{url('services/0')}}" class="text-bold btn-round-custom btn-block btn-lg" style="font-size: 13px; margin-top: 95% !important; text-align: center;">Achat de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-9 col-xs-9 div-custom service-custom" style=" margin-bottom: 4em; margin-right: 2em;">
                            <div class=" " style="display:block;" >
                                <div class="single-services ">
                                    <img src="images/logo/20945141.jpg" class="img-responsive float-end" alt="">
                                </div>
                                <div class="single-services">
                                    <div class="single-services-desc" style="position: absolute;">
                                        <a href="{{url('services/3')}}" class="text-bold btn-round-custom btn-block btn-lg" style="font-size: 13px; margin-top: 150px !important; text-align: center;">Vente de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-2 col-xs-8 col-sm-5 col-lg-2 div-custom service-custom" style="margin-bottom: 2em; margin-right: 1em;">
                            <div class="single-services img-center img-custom">
                                <div class="single-services-img">
                                    <img src="images/logo/logopartenaire.jpg" class="img-responsive float-end" alt="">
                                </div>
                                <div class="single-services">
                                    <div class="single-services-desc">
                                        <button class="btn-round-custom btn-block btn-lg " style="font-size: 10px;">Mise en vente de
                                            biens</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5 col-sm-5 col-lg-2 div-custom service-custom" style="margin-bottom: 2em; margin-right: 1em;">
                            <div class="single-services img-center img-custom">
                                <div class="single-services-img">
                                    <img src="images/logo/logopartenaire.jpg" class="img-responsive float-end" alt="">
                                </div>
                                <div class="single-services">
                                    <div class="single-services-desc">
                                        <button class="btn-round-custom btn-block btn-lg " style="font-size: 10px;">Mise en vente de
                                            biens</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5 col-sm-5 col-lg-2 div-custom service-custom" style="margin-bottom: 2em; margin-right: 1em;">
                            <div class="single-services img-center img-custom">
                                <div class="single-services-img">
                                    <img src="images/logo/logopartenaire.jpg" class="img-responsive float-end" alt="">
                                </div>
                                <div class="single-services">
                                    <div class="single-services-desc">
                                        <button class="btn-round-custom btn-block btn-lg " style="font-size: 10px;">Mise en vente de
                                            biens</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div id="fh5co-blog-section" class="fh5co-section-gray" style="margin-top: 5%;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 text-center animate-box">
                            <h2 class="text-center text-color">Anonces récentes</h2>
                            
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row row-bottom-padded-md">
                        <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1"></div>
                        @foreach ($anonces as $item)
                            <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5 d-flex justify-content-end" style="position: relative;">
                                <div class=" animate-box">
                                    <img class="" style="width: 90%;" src="storage/{{$item->imagemain}}" alt="">
                                    <span class="blog-text" style="margin-bottom: -55%; height: 7rem; width: 100%; ">
                                        <a class="btn" href=""
                                            style="color: white; border-radius: 15px; background-color: rgb(241, 196, 45); font-size: 10px;  white-space: pre-wrap;">Consulter les offres des parcelles
                                        </a>
                                    </span>
                                </div>
                            </div>
                        @endforeach

                        <div class="col-lg-2 col-md-2 col-sm-5 col-xs-5 d-flex justify-content-end" style="">
                            <div class=" animate-box">
                                <img class="" style="width: 100%;" src="images/property-4.jpg" alt="">
                                <span class="blog-text">
                                    <button class="btn "
                                        style="color: white; border-radius: 15px; background-color: rgb(241, 196, 45); font-size: 9px; margin-bottom: -55%; height: 7rem; width: 100%; white-space: pre-wrap;">Consulter les offres des parcelles
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2  col-sm-5 col-xs-5 d-flex justify-content-end" style="">
                            <div class=" animate-box">
                                <img class="" style="width: 100%;" src="images/property-4.jpg" alt="">
                                <span class="blog-text" >
                                    <button class="btn "
                                        style="color: white; border-radius: 15px; background-color: rgb(241, 196, 45); font-size: 9px; margin-bottom: -60%; height: 7rem; width: 100%; white-space: pre-wrap;">Consulter les offres des parcelles
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2  col-sm-5 col-xs-5 d-flex justify-content-end" style="">
                            <div class=" animate-box">
                                <img class="" style="width: 100%;" src="images/property-4.jpg" alt="">
                                <span class="blog-text" >
                                    <button class="btn "
                                        style="color: white; border-radius: 15px; background-color: rgb(241, 196, 45); font-size: 9px; margin-bottom: -60%; height: 7rem; width: 100%; white-space: pre-wrap;">Consulter les offres des parcelles
                                    </button>
                                </span>
                            </div>
                        </div>
                        <!-- <div class="clearfix visible-md-block"></div> -->
                    </div>
                </div>
            </div>
            <div id="">
                <h3></h3>
                <div class="container">
                    @if ($liste == true)
                        <h2 class="text-center text-color">Toutes les actualités</h2>
                        <div class="row">
                            <div class="col-md-12 animate-box" wire:ignore>
                                <div class="row"> 
                                    @foreach ($allactualites as $actualite)
                                        <div class="col-md-10 col-sm-10 col-xs-10 div-form" style="margin-right: 4rem; margin-bottom:1rem;">
                                            <h3 class="title" style="color: black;">{{$actualite->reference}}</h3>
                                            <div class="" style="margin-left: -5rem; margin-top: -15px; ">
                                                <div class="row">
                                                    <div class="col-md-11 col-sm-11 col-xs-11" >
                                                        <img src="storage/{{$actualite->photo}}" alt="" style="height: 150px !important;" class="icon-custom img-responsive">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                <div class="col-md-8 col-sm-8 col-xs-8 ">
                                                    <h3 class="title" style="color: black;">{{$actualite->reference}}</h3>
                                                    <p style="font-size: 11px; font-weight: bold;">
                                                        @php
                                                            echo explode('.', $actualite->description)[0];
                                                        @endphp
                                                    </p>
                                                    <a style="color: black; font-weight: bold;" href="">Voir plus</a>
                                                </div></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                
                            </div>
                        </div><br><br>
                    @endif
                        <h2 class="text-center text-color">Dernières actualités</h2>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                
                                {{-- <div class="row">  --}}
                                    <div class="col-md-1 col-sm-1 col-xs-1"></div>
                                    @foreach ($actualites as $actualite)
                                        <div class="col-md-5 col-sm-10 col-xs-10 div-form" style="margin-right: 1rem; margin-bottom:1rem;">
                                            <div class="row" style="margin-left: -5rem; margin-top: -15px; ">
                                                <div class="col-md-4 col-sm-4 col-xs-4" >
                                                    <img src="storage/{{$actualite->photo}}" alt="" style="height: 100% !important;" class="icon-custom img-responsive">
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-xs-8 ">
                                                    <h3 class="title" style="color: black;">{{$actualite->reference}}</h3>
                                                    {{-- <p style="font-size: 11px; font-weight: bold;">
                                                        @php
                                                            echo explode(',', $actualite->description)[0];
                                                        @endphp
                                                    </p> --}}
                                                    <a style="color: black; font-weight: bold;" href="">Voir plus</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                {{-- </div> --}}
                                
                            </div>
                        </div><br><br>
                        <div class="row flex-container">
                            <div class="col-md-offset-5 col-xs-offset-3 col-sm-offset-3 col-md-4 col-sm-8 col-xs-8">
                                <button class="btn btn-custom btn-round-custom" wire:click='allActualite'>Voir toutes l'actualités</button>
                            </div><br><br><br>
                        </div>
                        

                    <a style="position:relative;" href="{{route('offre-premium')}}">
                        <span style="position:fixed;bottom:0; left:85%; color:red;animation: blink 1s infinite; font-size:10em; z-index: 9999;">
                            &#9733;
                        </span>
                        <span style="position:fixed;bottom:0;left:85%;color:yellow;animation: blink 1s infinite 0.5s; font-size:10em; z-index: 9999;">
                            &#9733;
                        </span>
                        <span class="text-uppercase" style="z-index: 9999; white-space: pre-wrap; font-weight: bold; color: red; -webkit-text-stroke-color: white; position:fixed;bottom:75px;left:86%;font-size:24px;">  offres
premium</span>
                        </a>
                </div>
    @endif
</div>
