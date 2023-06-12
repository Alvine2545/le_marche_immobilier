<div class="fh5co-page-title  section1" style="height: 350px;" >
            <div class="overlay"></div>
            <div class="container ">
                <div class="row h-75">
                    <div class="col-md-12 animate-box fadeInUp animated-fast text-center text-color" wire:ignore>
                        <div class="row"><h1></h1><h1><h1></h1></h1></div>
                        <h1 class="title"> Acceuil >> Services >> Acheter</h1>
                        <div class="div-form" wire:ignore>
                                <form action="" wire:submit.prevent='updateData(1)' class="search-property-1 ">
                                    <div class="row justify-content-center" wire:ignore>
                                        <div class="col-md-6 col-sm-6 col-12 col-lg-3 align-items-center">
                                            <div class="form-group">
                                                <!-- <label for="#">Location</label> -->
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        {{-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> --}}
                                                        {{-- <div id="the-basics">
                                                            <input id="city-input" class="typeahead form-control" type="text" placeholder="States of USA">
                                                        </div> --}}

                                                        <select wire:model='mestypes' name="" id="" class="text-center form-control form-control-header" style="height: 45px !important;">
                                                            <option value="">Types de bien</option>
                                                            @foreach ($type_biens as $item)
                                                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12 col-lg-4 align-items-center">
                                            <div class="form-group">
                                                <!-- <label for="#">Property Type</label> -->
                                                <div class="form-field">
                                                    <div class="select-wrap">
                                                        {{-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> --}}
                                                        <select wire:model='meslocalisations' id="" class="text-center form-control form-control-header text-center" style="height: 45px !important;">
                                                            <option value="" selected>Situation géographique</option>
                                                            @for($i = 0; $i < count($cities); $i++)
                                                                <option value="{{$cities[$i]}}">{{$cities[$i]}}</option>
                                                            @endfor

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-12 col-lg-4 align-items-center">
                                                <div class="form-group">
                                                    <!-- <label for="#">Budget maximum</label> -->
                                                    <div class="form-field">
                                                        <div class="select-wrap">
                                                        {{-- <div class="icon"><span class="ion-ios-arrow-down"></span></div> --}}
                                                        <select wire:model='mesbudgets' id="" class="text-center form-control form-control-header" style="height: 45px !important;">
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
                                        <div class="row justify-content-center">
                                            {{-- <div class="col-md-5 col-sm-5 col-xs-5"></div> --}}
                                            <div class="col-6 col-md-3 col-md-offset-5 col-sm-4 col-sm-offset-5 col-xs-3 col-xs-offset-5" style="margin-left: 0% ;">
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

            </div>
            <div id="">
                <h3></h3>
                <div class="container"><br>
                    <h3 class="text-center text-color ">Achetez votre bien immobilier en toute sécurité</h3><br>
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
                    <div class="row justify-content-center">
                        @if ($recherche)
                            @if (count($recherche) == 0)
                                <h3 class="title text-color ">Aucun bien ne correspond à votre recherche</h3>
                            @else
                                @foreach ($recherche as $bien)
                                    <div class=" container col-md-5 col-sm-8 col-10 icon-custom h-100 d-flex" >
                                        <div class="col-md-7 col-sm-7 col-xs-7">
                                            <img src="{{asset('storage/'.$bien->imagemain)}}" class="h-100 w-100 img-rounded-custom img-responsive"
                                                style="margin-left: -30.19px; object-fit:cover"></i>
                                        </div>
                                        <div class="col-md-5 col-sm-5 col-5 text-break justify-content-center text-center">
                        
                                            <h3 class="title text-color ">{{$bien->reference}}</h3>
                                            <h5>{{$bien->prix_max}}</h5>
                                            <p>{{$bien->description}}</p>
                                            <!-- <p><a href="#">Learn More</a></p> -->
                                            <hr style="height: 5px; background-color: black;">
                                            <span class="float-right"> <a href="{{url('offres/'.$bien->id)}}" style="color: black; border: none; cursor: pointer; text-decoration: none;"  value="Consulter l'offre"
                                                            class="btn btn-round-custom">Consulter l'offre</a></span>
                                            <div class="row">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-1 col-sm-1 col-xs-1"></div>
                                @endforeach
                            @endif
                        @else
                            @foreach ($biens as $bien)
                                <div class=" col-md-3 col-sm-5 col-xs-5 animate-box icon-custom mb-4" wire:ignore>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                        <img src="{{asset('storage/'.$bien->imagemain)}}" class="img-rounded-custom img-responsive"
                                            style="margin-left: -30.19px;"></i>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                    
                                        <h3 class="title text-color ">{{$bien->reference}}</h3>
                                        <h5>{{$bien->prix_max}}</h5>
                                        <p>{{$bien->description}}</p>
                                        <!-- <p><a href="#">Learn More</a></p> -->
                                        <hr style="height: 5px; background-color: black;">
                                        <span class="float-right"> <a href="{{url('offres/'.$bien->id)}}" style="color: black; border: none; cursor: pointer; text-decoration: none;"  value="Consulter l'offre"
                                                        class="btn btn-round-custom">Consulter l'offre</a></span>
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
                                <div class="col-md-1 col-sm-1 col-xs-1"></div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div><br>
            <div id="">
                <div class="container">
                    {{-- <div class="row ">
                        <div class="col-md-12 animate-box feature-left icon-custom">
                                <div class="icon">
                                    <img src="{{asset('images/doctors-1.jpg')}}" class="img-rounded-custom img-responsive icon-wallet" style="margin-left: %;"></i>
                                </div>
                                <div class="feature-copy feature-copy-custom">

                                    <h1 class="title text-color ">Nom de la propriété</h1>
                                    <h3>1 000 000 FCFA</h3>
                                    <p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Aut cum mollitia reprehenderit. Aut cum mollitia reprehenderit.</p>
                                    <!-- <p><a href="#">Learn More</a></p> -->
                                    <hr style="height: 5px; background-color: black;">
                                    <div class="row">
                                        <div class="col-md-2 col-sm-2 col-xs-2"><span> <i class="icon-rdio"></i> Organisation</span></div>
                                        <div class="col-md-2 col-sm-2 col-xs-2"><span> <i class="icon-location"></i> Localisation</span></div>
                                        <div class="col-md-offset-5 col-md-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-5 d-flex justify-content-end"><span class=""> <input type="submit" value="Consulter l'offre" class="btn btn-round-custom"></span></div>
                                    </div>
                                </div>
                        </div>
                    </div> --}}
                        <a  class="position-fixed " href="{{route('offre-premium')}}">
                            {{-- <span class="text-danger position-fixed h-auto w-auto" style="bottom:0;right:5%;animation: blink 1s infinite; font-size:7em;" >
                                &#9733;
                            </span>
                            <span class="position-fixed text-warning" style="bottom:0;right:5%;animation: blink 1s infinite 0.5s; font-size:7em;">
                                &#9733;
                            </span> --}}
                            <span class="text-uppercase text-danger font-weight-bold position-fixed"
                                style="white-space: pre-wrap; -webkit-text-stroke-color: white;right:6%;bottom:52px;font-size:16px; animation: blink 1s infinite 0.5s;">  offres <br> premium</span>
                                <span class="text-uppercase text-danger font-weight-bold position-fixed"
                                style="white-space: pre-wrap; -webkit-text-stroke-color: white;right:6%;bottom:52px;font-size:16px; animation: blink 1s infinite 0.5s;">  offres <br> premium</span>
                        </a>

                </div>
            </div><br>

            </div>
