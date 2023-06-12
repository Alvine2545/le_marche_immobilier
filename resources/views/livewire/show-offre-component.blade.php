<div class="fh5co-page-title section1" style="height: 50% !important; height: 350px;">
    <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 animate-box fadeInUp animated-fast text-center text-color" wire:ignore>
                            
                    <div class="all-title-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12" style="margin: 3%; text-align: center;">
                                                    
                                    <h2 class="h1"></h2>
                                    <h1 class="title"> Acceuil >> Les biens</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br>

    <div id="">
        <div class="container">
            <div class="row animate-box fh5co-section-gray">
                <div class="col-md-4">
					<div class="property">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            @php
                                $photo = explode(' ', $bien->photo);
                            @endphp
                            @for ($i = 0; $i < count($photo)-1; $i++)
                                <div class="item ">
                                    
                                    <a href="#" class="fh5co-property" style="background-image: url('storage/'{{$photo[$i]}});">
                                        @if ($bien->categorie_id == 1)
                                            <span class="status">A vendre</span>
                                        @else
                                            <span class="status">A louer</span>
                                        @endif
                                        
                                    </a>
                                    {{-- <img src="la.jpg" alt="Los Angeles" style="width:100%;"> --}}
                                </div>
                            @endfor

                            <div class="item active">
                                <a href="#" class="fh5co-property" style="background-image: url('storage/'{{$bien->imagemain}});">
                                    @if ($bien->categorie_id == 1)
                                        <span class="status">A vendre</span>
                                    @else
                                        <span class="status">A louer</span>
                                    @endif
                                </a>
                                {{-- <img src="chicago.jpg" alt="Chicago" style="width:100%;"> --}}
                            </div>
                        </div>
                        
                        <ul class="list-details">
                                    <li>2000 ft sq<li>
                                    <li>5 Bedroom:</li>
                                    <li>4 Bathroom:</li>
                                    <li>3 Garage:</li>
                        </ul>
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                        </a>
                    </div>
					</div>
				</div>
    <div class="col-md-8">
                    <div class="property-details">
							<h3>{{$bien->reference}}</h3>
							<span class="price">{{$bien->prix_max}}</span>
							<p>{{$bien->description}}</p>
							<span class="address"><i class="icon-map"></i>Thomas Street, St. Louis, MO 8990, USA</span>
					</div>
                    <button type="button" class="btn btn-primary btn-md" wire:click='interested'>Interessé</button>
                </div>
                {{-- <div class="col col-md-12 col-sm-12 col-xs-12 animate-box icon-custom">
                                <div class="col-md-3 col-sm-4 col-xs-4">
                                    <img src="{{asset('images/doctors-1.jpg')}}" class="img-rounded-custom img-responsive"
                                        style="margin-left: -30.19px;"></i>
                                </div>
                                <div class="col-md-9 col-sm-8 col-xs-8"> 
    
                                    <h1 class="title text-color ">{{$bien->reference}}</h1>
                                    <h3>{{$bien->prix_max}} FCFA</h3>
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
                                            <span class=""> <a href="{{url('offres/1')}}" style="color: black; border: none; cursor: pointer; text-decoration: none;"
                                                    class="btn btn-round-custom">Consulter l'offre</a></span></div>
                                    </div>
                                </div>
                </div> --}}
            </div>
        </div>
    </div><br>
                <div id="">
                    <div class="container " >
                        <a  class="position-fixed " href="{{route('offre-premium')}}">
                            {{-- <span class="text-danger position-fixed h-auto w-auto" style="bottom:0;right:5%;animation: blink 1s infinite; font-size:7em;" >
                                &#9733;
                            </span>
                            <span class="position-fixed text-warning" style="bottom:0;right:5%;animation: blink 1s infinite 0.5s; font-size:7em;">
                                &#9733;
                            </span> --}}
                            <span class="text-uppercase text-danger font-weight-bold position-fixed"
                                style="white-space: pre-wrap; -webkit-text-stroke-color: white;right:6%;bottom:52px;font-size:16px;">  offres <br> premium</span>
                        </a>
                    </div>
                </div><br>
        </div>


</div>