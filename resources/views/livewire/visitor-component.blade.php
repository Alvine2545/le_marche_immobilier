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

                                            <h2 class="h1 text-color"></h2>
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
                                            <div class="row justify-content-center">

                                                @foreach ($chunk as $image)
                                                    <div class="col-md-3 col-sm-4 col-6">
                                                        <img src="{{asset("images/partner1.png")}}" class=" w-100" alt="{{$image->name}}" style="height: 100%; width: 100%;">
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
                    <div class=" row animate-box justify-content-center">

                        <div class=" col-lg-3 col-md-4 col-sm-6 col-9 div-custom service-custom mr-3 ml-3 mt-4 mb-4" style="">
                            <div class=" " style="position-absolute" >
                                <div class="single-services h-75">
                                    <img src="{{asset("images/partner1.png")}}" class="img-responsive h-100 w-100" alt="" style="object-fit: cover; position:relative;">                              </div>
                                <div class="single-services">
                                    <div class="single-services-desc h-100" style="position:relative;">
                                        <a href="{{url('services/2')}}" class="text-bold btn-round-custom btn-block btn-lg " style="font-size: 15px;!important; text-align: center;">Mise en vente de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-9 div-custom service-custom mr-3 ml-3 mt-4 mb-4" style="">
                            <div class=" " style="position-absolute" >
                                <div class="single-services h-75">
                                    <img src="{{asset("images/partner1.png")}}" class="img-responsive h-100 w-100" alt="" style="object-fit: cover; position:relative;">                              </div>
                                <div class="single-services">
                                    <div class="single-services-desc h-100" style="position:relative;">
                                        <a href="{{url('services/2')}}" class="text-bold btn-round-custom btn-block btn-lg " style="font-size: 15px;!important; text-align: center;">Mise en vente de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-9 div-custom service-custom mr-3 ml-3 mt-4 mb-4" style="">
                            <div class=" " style="position-absolute" >
                                <div class="single-services h-75">
                                    <img src="{{asset("images/partner1.png")}}" class="img-responsive h-100 w-100" alt="" style="object-fit: cover; position:relative;">                              </div>
                                <div class="single-services">
                                    <div class="single-services-desc h-100" style="position:relative;">
                                        <a href="{{url('services/2')}}" class="text-bold btn-round-custom btn-block btn-lg " style="font-size: 15px;!important; text-align: center;">Mise en vente de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-9 div-custom service-custom mr-3 ml-3 mt-4 mb-4" style="">
                            <div class=" " style="position-absolute" >
                                <div class="single-services h-75">
                                    <img src="{{asset("images/partner1.png")}}" class="img-responsive h-100 w-100" alt="" style="object-fit: cover; position:relative;">                              </div>
                                <div class="single-services">
                                    <div class="single-services-desc h-100" style="position:relative;">
                                        <a href="{{url('services/2')}}" class="text-bold btn-round-custom btn-block btn-lg " style="font-size: 15px;!important; text-align: center;">Mise en vente de biens immobilier</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-9 div-custom service-custom mr-3 ml-3 mt-4 mb-4" style="">
                            <div class=" " style="position-absolute" >
                                <div class="single-services h-75">
                                    <img src="{{asset("images/partner1.png")}}" class="img-responsive h-100 w-100" alt="" style="object-fit: cover; position:relative;">                              </div>
                                <div class="single-services">
                                    <div class="single-services-desc h-100 w-100" style="position:relative;">
                                        <a href="{{url('services/2')}}" class="text-bold btn-round-custom btn-block btn-lg " style="font-size: 15px;!important; text-align: center;">Mise en vente de biens immobilier</a>
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
                    <div class="row row-bottom-padded-md justify-content-center">

                        @foreach ($anonces as $item)
                            <div class=" col-lg-3 col-md-4 col-sm-6 col-10 " style="">
                                <div class=" animate-box mb-5 mt-5 rounded-3" style="border-radius:10px !important; height:250px;margin-bottom:20px; ">
                                    <div  class="">
                                        <img class="w-100"  src="storage/{{$item->imagemain}}" alt="" style="height:180px; object-fit:cover;">
                                    </div>
                                    <div class=" " style="background-color:rgb(241, 196, 45); height: 9rem; width:100%; border-bottom-left-radius: 10px;
                                                                      border-bottom-right-radius: 10px;">
                                        <a class="btn text-wrap" href=""
                                            style="color: white;font-size: 15px;height:100%;align-items:center"> Consulter les offres des parcelles
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-10 " style="">
                            <div class=" animate-box mb-5 mt-5 rounded-3" style="border-radius:10px !important; height:250px;margin-bottom:20px; ">
                                <div  class="">
                                    <img class="w-100"  src="{{asset("images/partner1.png")}}" alt="" style="height:180px; object-fit:cover;">
                                </div>
                                <div class=" " style="background-color:rgb(241, 196, 45); height: 9rem; width:100%; border-bottom-left-radius: 10px;
                                                                  border-bottom-right-radius: 10px;">
                                    <a class="btn text-wrap" href=""
                                        style="color: white;font-size: 15px;height:100%; text-wrap: wrap; align-items:center"> Consulter les offres des parcelles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-10 " style="">
                            <div class=" animate-box mb-5 mt-5 rounded-3" style="border-radius:10px !important; height:250px;margin-bottom:20px; ">
                                <div  class="">
                                    <img class="w-100"  src="{{asset("images/partner1.png")}}" alt="" style="height:180px; object-fit:cover;">
                                </div>
                                <div class=" " style="background-color:rgb(241, 196, 45); height: 9rem; width:100%; border-bottom-left-radius: 10px;
                                                                  border-bottom-right-radius: 10px;">
                                    <a class="btn text-wrap" href=""
                                        style="color: white;font-size: 15px;height:100%; text-wrap: wrap; align-items:center"> Consulter les offres des parcelles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=" col-lg-3 col-md-4 col-sm-6 col-10 " style="">
                            <div class=" animate-box mb-5 mt-5 rounded-3" style="border-radius:10px !important; height:250px;margin-bottom:20px; ">
                                <div  class="">
                                    <img class="w-100"  src="{{asset("images/partner1.png")}}" alt="" style="height:180px; object-fit:cover;">
                                </div>
                                <div class=" " style="background-color:rgb(241, 196, 45); height: 9rem; width:100%; border-bottom-left-radius: 10px;
                                                                  border-bottom-right-radius: 10px;">
                                    <a class="btn text-wrap" href=""
                                        style="color: white;font-size: 15px;height:100%; text-wrap: wrap; align-items:center"> Consulter les offres des parcelles
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="">
                <h3></h3>
                <div class="container ">
                    @if ($liste == true)
                        <h2 wire:ignore class="text-center text-color">Toutes les actualités</h2>
                        <div class="row">
                            <div class="col-md-12 animate-box" wire:ignore>
                                <div class="row ">
                                    @foreach ($allactualites as $actualite)
                                        <div class="col-md-10 col-sm-10 col-xs-10 div-form " style="margin-right: 4rem; margin-bottom:1rem;">
                                            <h3 class="title" style="color: black;">{{$actualite->reference}}</h3>
                                            <div class="" style="margin-left: -5rem; margin-top: -15px; ">
                                                <div class="row">
                                                    <div class="col-md-11 col-sm-11 col-xs-11" >
                                                        <img src="storage/{{$actualite->photo}}" alt="" style="height:auto !important;" class="icon-custom img-responsive">
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
                                        <hr style="border: solid rgb(243, 239, 8) 3px; height: 5px;">
                                    @endforeach
                                </div>

                            </div>
                        </div><br><br>
                    @endif
                        <h2 class="text-center  text-color">Dernières actualités</h2>
                        <div class="row ">
                            <div class="col-md-12 animate-box">

                                {{-- <div class="row">  --}}

                                    @foreach ($actualites as $actualite)
                                        <div class="col-10 col-md-5 col-sm-12 col-xs-12 div-form ml-5 mr-n1 mb-3 mt-3" style=";max-height:250px; justify-content-center !important">
                                            <div class="row mb-2 " style="margin-left: -5rem;margin-right:0; margin-top: -15px;height:150px !important">
                                                <div class="col-md-5 col-sm-5 col-xs-5 " >
                                                    <img src="{{asset("images/partner1.png")}}" style="height:100% !important;object-fit:cover" class="icon-custom img-responsive w-100">
                                                </div>
                                                <div class="col-md-7 col-sm-7 col-xs-7 pr-0">
                                                    <h3 class=" text-break h-50 p-sm-0" class="title" style="color: black;">{{$actualite->reference}}</h3>
                                                    {{-- <p style="font-size: 11px; font-weight: bold;">
                                                        @php
                                                            echo explode(',', $actualite->description)[0];
                                                        @endphp
                                                    </p> --}}
                                                    <a class="h-25 mt-3 pb-0" style="color: black; font-weight: bold;" href=""  wire:click="showA">Voir plus</a>
                                                </div>
                                            </div>

                                        </div>
                                    @endforeach
                                    <div class="col-10 col-md-5 col-sm-12 col-xs-12 div-form ml-5 mr-n1 mb-3 mt-3" style=";max-height:250px; justify-content-center !important">
                                        <div class="row mb-2 " style="margin-left: -5rem;margin-right:0; margin-top: -15px;height:150px !important">
                                            <div class="col-md-5 col-sm-5 col-xs-5 " >
                                                <img src="{{asset("images/partner1.png")}}" style="height:100% !important;object-fit:cover" class="icon-custom img-responsive w-100">
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 pr-0">
                                                <h3 class=" text-break h-50 p-sm-0" class="title" style="color: black;">{{$actualite->reference}}</h3>
                                                {{-- <p style="font-size: 11px; font-weight: bold;">
                                                    @php
                                                        echo explode(',', $actualite->description)[0];
                                                    @endphp
                                                </p> --}}
                                                <a class="h-25 mt-3 pb-0" style="color: black; font-weight: bold;" href="">Voir plus</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-10 col-md-5 col-sm-12 col-xs-12 div-form ml-5 mr-n1 mb-3 mt-3" style=";max-height:250px; justify-content-center !important">
                                        <div class="row mb-2 " style="margin-left: -5rem;margin-right:0; margin-top: -15px;height:150px !important">
                                            <div class="col-md-5 col-sm-5 col-xs-5 " >
                                                <img src="{{asset("images/partner1.png")}}" style="height:100% !important;object-fit:cover" class="icon-custom img-responsive w-100">
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 pr-0">
                                                <h3 class=" text-break h-50 p-sm-0" class="title" style="color: black;">{{$actualite->reference}}</h3>
                                                {{-- <p style="font-size: 11px; font-weight: bold;">
                                                    @php
                                                        echo explode(',', $actualite->description)[0];
                                                    @endphp
                                                </p> --}}
                                                <a class="h-25 mt-3 pb-0" style="color: black; font-weight: bold;" href="">Voir plus</a>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-10 col-md-5 col-sm-12 col-xs-12 div-form ml-5 mr-n1 mb-3 mt-3" style=";max-height:250px; justify-content-center !important">
                                        <div class="row mb-2 " style="margin-left: -5rem;margin-right:0; margin-top: -15px;height:150px !important">
                                            <div class="col-md-5 col-sm-5 col-xs-5 " >
                                                <img src="{{asset("images/partner1.png")}}" style="height:100% !important;object-fit:cover" class="icon-custom img-responsive w-100">
                                            </div>
                                            <div class="col-md-7 col-sm-7 col-xs-7 pr-0">
                                                <h3 class=" text-break h-50 p-sm-0" class="title" style="color: black;">{{$actualite->reference}}</h3>
                                                {{-- <p style="font-size: 11px; font-weight: bold;">
                                                    @php
                                                        echo explode(',', $actualite->description)[0];
                                                    @endphp
                                                </p> --}}
                                                <a class="h-25 mt-3 pb-0" style="color: black; font-weight: bold;" href="">Voir plus</a>
                                            </div>
                                        </div>

                                    </div>

                                {{-- </div> --}}

                            </div>
                        </div><br><br>
                        <div class="row justify-content-center">
                            <div class=" col-lg-4 col-md-6 col-sm-6 col-9">
                                <button class="w-100 btn btn-custom btn-round-custom " wire:click='redirectToActualite'>Voir toutes l'actualités</button>
                            </div><br><br><br>
                        </div>



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
    @endif
</div>
