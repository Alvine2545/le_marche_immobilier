<div class="fh5co-page-title section1" style="height: 350px;">
            <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 animate-box fadeInUp animated-fast text-center text-color" wire:ignore>
                        <div class="row"><h1></h1></div>
                        <h1 class="title"> Acceuil >> Services >> Acheter</h1> 
                        <div class="div-form" wire:ignore>
                                <form action="" wire:submit.prevent='recherche(2)' class="search-property-1">
                                    <div class="row" wire:ignore>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <!-- <label for="#">Location</label> -->
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        {{-- <div id="the-basics">
                                                            <input id="city-input" class="typeahead form-control" type="text" placeholder="States of USA">
                                                        </div> --}}
                                                        
                                                        <select wire:model='mestypes' name="" id="" class="form-control form-control-header" style="height: 45px !important;">
                                                            <option value="">Types de bien</option>
                                                            @foreach ($type_biens as $item)
                                                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <!-- <label for="#">Property Type</label> -->
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select wire:model='meslocalisations' id="" class="form-control form-control-header" style="height: 45px !important;">
                                                            <option value="" selected>Situation géographique</option>
                                                            @for($i = 0; $i < count($cities); $i++)
                                                                <option value="{{$cities[$i]}}">{{$cities[$i]}}</option>
                                                            @endfor
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                                <div class="form-group">
                                                    <!-- <label for="#">Budget maximum</label> -->
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                        <select wire:model='mesbudgets' id="" class="form-control form-control-header" style="height: 45px !important;">
                                                            <option value="" selected>Budget maximum</option>
                                                            @for($i = 0; $i < count($budgetA); $i++)
                                                                <option value="{{$budgetA[$i]}}">{{$budgetA[$i]}}</option>
                                                            @endfor
                                                            
                                                        </select>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-5"></div>
                                            <div class="col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-3 col-xs-offset-5" style="margin-left: 0% ;">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <input type="submit" value="Recherchez" class="form-control form-control-header  btn-round-custom btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                        </div>
                    </div>
                    </div>
            
                </div>
            <div id="">
                <h3></h3>
                <div class="container">
                    <h3 class="text-center text-color">Louez votre bien immobilier en toute sécurité</h3>
                    {{-- <div class="row">
                        <div class="col-md-12 animate-box">

                            <div class="feature-left">
                                <span class="icon ">
                                    <img src="{{asset('images/doctors-1.jpg')}}" alt="" class="icon-custom img-responsive">
                                </span>
                                <div class="feature-copy">
                                    <h3>Move House</h3>
                                    <p>Facilis ipsum reprehenderitacilis ipsum reprehenderitacilis ipsum reprehenderitacilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit 
                                        acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit nemoreprehenderit nemoreprehenderit nemoreprehenderit nemoreprehenderit nemoreprehenderit nemoreprehenderit 
                                        itacilis ipsum reprehenderitacilis ipsum reprehenderitacilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum
                                        reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit
                                        acilis ipsum reprehenderit acilis ipsum reprehenderit acilis ipsum reprehenderit acilinemoreprehenderit nemoreprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
                                </div>
                            </div>
                        </div>                        
                    </div> --}}
                </div>
            </div>
            <div id="">
                <div class="container">
                    <div class="row ">
                        <div class="col col-md-4 col-sm-4 col-xs-4 animate-box icon-custom" wire:ignore>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <img src="{{asset('images/doctors-1.jpg')}}" class="img-rounded-custom img-responsive"
                                    style="margin-left: -30.19px;"></i>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
            
                                <h3 class="title text-color ">Nom du bien</h3>
                                <h5>1 000 000 FCFA</h5>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut.</p>
                                <!-- <p><a href="#">Learn More</a></p> -->
                                <hr style="height: 5px; background-color: black;">
                                <span class="float-right"> <input href="{{url('offres/1')}}" style="color: black; border: none; cursor: pointer; text-decoration: none;" type="submit" value="Consulter l'offre"
                                                class="btn btn-round-custom"></span>
                                <div class="row">
                                    {{-- <div class="col-md-2 col-sm-2 col-xs-2">
                                        {{-- <span> <i class="icon-rdio"></i> Organisation</span> --}
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                        {{-- <span> <i class="icon-location"></i> Localisation</span> --}
                                    </div> --}}
                                    {{-- <div
                                        class="col-md-offset-5 col-md-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-5 d-flex justify-content-end">
                                        <span class=""> <input href="{{url('offres/1')}}" style="color: black; border: none; cursor: pointer; text-decoration: none;" type="submit" value="Consulter l'offre"
                                                class="btn btn-round-custom"></span></div> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col col-md-12 col-sm-12 col-xs-12 animate-box icon-custom">
                            <div class="col-md-3 col-sm-4 col-xs-4">
                                <img src="{{asset('images/doctors-1.jpg')}}" class="img-rounded-custom img-responsive"
                                    style="margin-left: -30.19px;"></i>
                            </div>
                            <div class="col-md-9 col-sm-8 col-xs-8">
            
                                <h1 class="title text-color ">Nom de la propriété</h1>
                                <h3>1 000 000 FCFA</h3>
                                <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Aut cum mollitia
                                    reprehenderit. Aut cum mollitia reprehenderit.</p>
                                <!-- <p><a href="#">Learn More</a></p> -->
                                <hr style="height: 5px; background-color: black;">
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 col-xs-2"><span> <i class="icon-rdio"></i> Organisation</span>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2"><span> <i class="icon-location"></i> Localisation</span>
                                    </div>
                                    <div
                                        class="col-md-offset-5 col-md-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-5 d-flex justify-content-end">
                                        <span class=""> <a href="{{url('offres/1')}}" style="color: black; border: none; cursor: pointer; text-decoration: none;" value="Consulter l'offre"
                                                class="btn btn-round-custom"></a></span></div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div><br>
            <div id="">
                <div class="container">
                    
                    <a style="position:relative;" href="{{route('offre-premium')}}">
                        <span style="position:fixed;bottom:0;left:85%;color:red;animation: blink 1s infinite; font-size:10em;">
                            &#9733;
                        </span>
                        <span style="position:fixed;bottom:0;left:85%;color:yellow;animation: blink 1s infinite 0.5s; font-size:10em;">
                            &#9733;
                        </span>
                        <span class="text-uppercase"
                            style="white-space: pre-wrap; font-weight: bold; color: red; -webkit-text-stroke-color: white; position:fixed;bottom:75px;left:86%;font-size:24px;">  offres
premium</span>
                    </a>
                </div>
            </div><br>
            
            </div>