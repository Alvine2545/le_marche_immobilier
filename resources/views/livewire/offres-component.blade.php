<div>

    <div class="fh5co-page-title div-custom section1" style="height: 50% !important;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center text-color">
                    <div class="row">
                        <h1></h1>
                    </div>
                    <div class="all-title-box">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12" style="margin: 5%; text-align: center;">
    
                                    <h2 class="h1"></h2>
                                    @if ($showOffre == true)
                                        <h1 class="title"> <a href="#" > Acceuil</a> >> <a href="#">Nos Partenaires</a>
                                    @endif
                                    @if ($showForm == true)
                                        <h1 class="title" wire:ignore> <a href="#" > Acceuil</a> >> <a href="#">Devenir Un Partenaire</a>
                                    @endif
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
    
    </div>
    @if ($showOffre == true)
        <section class="section2 container text-center align-items-center mt-5">
            {{-- <div class="row mb-3">
                <h1 class="color-title">Nos Partenaires <button wire:click='becomePartenaire' class="float-right btn btn-primary">Devenir partenaire</button></h1>
            </div> --}}
            <div class="row mb-5">
                <div>
                <p class="d-flex justify-content-center"> Le Marché de l’immobilier dispose de nombreux partenaires grâce à qui il peut proposer les offres les plus compétitives du secteur. Des banques grâces à qui nous pouvons vous proposer d’excellentes offres de prêts immobiliers, des assurances pour protéger votre bien immobilier d’éventuels risques, des Notaires pour bénéficier d’un accompagnement légal dans votre projet immobilier et des agences immobilières pour des offres immobilières toujours plus compétitives.</p>
                </div>
            </div>
        </section>
        <section class="section3 container text-center mt-5">
            @foreach ($offres as $offre)
                <div class="row mt-5">
                    <div class="offre p-1">
                        <div class="partner">
                            <img src="../storage/{{$offre->logo}}" alt="">
                        </div>
                        <div class="services container">
                            <div class="row">
                                <h3 class="color-title">{{$offre->titre}}</h3>
                            </div>
                            <div class="row">
                                <p>{{$offre->description}}.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-9"></div>
                                <div class="col-md-3">
                                    <a class="btn btn-warning" href="{{$offre->site}}" target="blank">Consulter l'offre</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </section>
    @endif
    @if ($showForm == true)
        {{-- <div class="container">
            <h3></h3><br><br>
                    <h2 class="text-center text-color">Devenir un partenaire du Marché de l'immobilier</h2>
                    <h3 class="text-center text-color">Remplissez ce formulaire pour faire une demande pour devenir partenaire</h3>
                    <div class="row">
                        <div class="col-md-12 " wire:ignore>

                            <div class="feature-left">
                                <form action="" class="search-property-1" method="POST" wire:submit.prevent='store'>
                                    @csrf
                                    @method('post')
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input wire:model="name" type="text" class="form-control " required placeholder="Nom de votre entité">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" wire:model="ifu" required class="form-control" placeholder="Numero IFU">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" wire:model="adresse" class="form-control" placeholder="Situation géographique">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input wire:model="site" type="text" class="form-control" placeholder="Lien de votre site web">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" wire:model="email" class="form-control" required placeholder="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" wire:model="tel"class="form-control" required placeholder="Téléphone">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-3"></div>
                                        <div class="col-md-2 col-sm2 col-xs-2" style="margin-bottom: 30px; margin-top: 20px;"><label for="" class="" style="position: absolute;">Logo de votre entité: </label></div>
                                        <div class="col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-3 col-xs-offset-5 " style="margin-left: 0% ;">
                                            <div class="form-group">
                                                <div class="form-field " style="margin-bottom: 30px; margin-top: 20px;">
                                                    
                                                    <input type="file" aria-describedby="helpId" placeholder="Votre logo" required wire:model="logo" class="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"></div>
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 0% ;">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <textarea name="" wire:model="description" id="" cols="30" rows="10"placeholder="Décrivez en bref vos services" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-5 col-xs-5"></div>
                                        <div class="col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-3 col-xs-offset-5" style="margin-left: 4% ;">
                                            <div class="form-group">
                                                <div class="form-field" style="margin-bottom: 30px; margin-top: 20px;">
                                                    <input type="submit" value="Envoyez la demande" class="btn-text form-control btn btn-primary btn-custom">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
        </div> --}}
    @endif
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
</div></div>

</div>
