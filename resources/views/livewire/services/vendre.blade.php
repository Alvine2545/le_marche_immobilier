<!-- Bootstrap-->
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/dist/css/bootstrap.css')}}">
    <!-- Application styles-->
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
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
                                    <h1 class="title"> Acceuil >> Services >> Vendre</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
            <!-- <div id="fh5co-features"> -->
    @if (session()->has('message'))
        <div class="alert alert-success text-center">{{ session('message') }}</div>
    @endif
            <div id="">
                <h3></h3>
                <div class="container">
                    <h2 class="text-center text-color">Procédure de mise en vente de biens immobiliers</h2>
                    <div class="row">
                        <div class="col-md-12 animate-box" wire:ignore>

                            <div class="feature-left">
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus tenetur
                                perferendis harum debitis reiciendis deleniti nisi? Ipsum, architecto praesentium. Quo exercitationem
                                inventore consectetur eos! Tempore, cupiditate eum.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus tenetur
                                perferendis harum debitis reiciendis deleniti nisi? Ipsum, architecto praesentium. Quo exercitationem
                                inventore consectetur eos! Tempore, cupiditate eum.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus tenetur
                                perferendis harum debitis reiciendis deleniti nisi? Ipsum, architecto praesentium. Quo exercitationem
                                inventore consectetur eos! Tempore, cupiditate eum.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus tenetur
                                perferendis harum debitis reiciendis deleniti nisi? Ipsum, architecto praesentium. Quo exercitationem
                                inventore consectetur eos! Tempore, cupiditate eum.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="">
                <h3></h3>
                <div class="container">
                    <h3 class="text-center text-color"></h3>
                    <div class="row">
                        <div class="col-md-12 animate-box" wire:ignore>

                            <div class="feature-left"> <p class="" style="text-align: center;"> Tempore, cupiditate eum.
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quod eum repellendus tenetur
                                perferendis harum debitis reiciendis deleniti nisi? Ipsum, architecto praesentium. Quo
                                exercitationem
                                inventore consectetur eos! Tempore, cupiditate eum.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="">
                <h3></h3><br>
                <div class="container">
                    <h2 class="text-center text-color">Mettre en vente un bien immobilier</h2>
                    <h3 class="text-center text-color">Remplissez ce formulaire pour mettre en vente votre bien
                        immobilier</h3><br>

                    <div class="row">
                        <div class="col-xl-1"></div>
                        <div class="col-xl-10">
                            <div class="cardbox">
                                {{-- <div class="cardbox-heading">
                                    <div class="cardbox-title">Horizontal Steps</div><small>With validation based on jquery.validate</small>
                                </div> --}}
                                <div class="cardbox-body" >
                                    <form class="form-validate" id="example-form" action="#" wire:submit.prevent='store_bien_location' enctype="multipart/form-data">
                                        <div>
                                            @if ($currentSteep == 1)
                                                <div>
                                                    <h4><span class="number text-bold" _istranslated="1">1. </span>Identification du vendeur </h4>
                                                    <fieldset>
                                                        <label for="name">Nom *</label>
                                                        <input class="form-control required" id="name" name="name" type="text" wire:model='name'>
                                                        <label for="surname">Prénoms *</label>
                                                        <input class="form-control required" id="surname" name="surname" type="text" wire:model='surname'>
                                                        <label for="address">Téléphone</label>
                                                        <input class="form-control" id="address" name="address" type="phone" wire:model='telephone'>
                                                        <label for="email">Email *</label>
                                                        <input class="form-control required email" id="email" name="email" type="text" wire:model='email'>
                                                        <div class="form-check ml-1">
                                                            <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" required="required" name="terms">J'accepte <a href=""> les termes et conditions</a>.
                                                            </label>
                                                        </div>
                                                        <p>(*) Indiques les champs obligatoire</p>
                                                    </fieldset>
                                                </div>
                                            @endif
                                            @if ($currentSteep == 2)
                                                <div>
                                                <h4><span class="number text-bold" _istranslated="1">2. </span>Informations generales du bien</h4>
                                                <fieldset >
                                                    <label for="name">Situation géographique *</label>
                                                    <select name="" required id="" class="form-control form-control-header" wire:model='ville' style="height: 45px !important;">
                                                        <option value="" selected>Situation géographique</option>
                                                        @for($i = 0; $i < count($cities); $i++)
                                                            <option value="{{$cities[$i]}}">{{$cities[$i]}}</option>
                                                        @endfor
                                                    </select>
                                                    <label for="username">Types de bien *</label>
                                                    <select wire:model='type_bien' wire:change='selectInputs' name="" id="" class="form-control form-control-header" required style="height: 45px !important;" >
                                                        <option value="">Types de bien</option>
                                                        @foreach ($type_biens as $item)
                                                            <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                        @endforeach
                                                    </select>
                                                    <input type="hidden" name="" wire:model='reference' value="{{$type_bien}} a vendre à {{$ville}}">
                                                    <label for="surname">Cout minimal *</label>
                                                    <input class="form-control required" required type="text" wire:model='prix_min'>
                                                    <label for="surname">Cout maximal *</label>
                                                    <input class="form-control required" required type="text" wire:model='prix_max'>
                                                    <p>(*) Indiques que les champs sont obligatoires</p>
                                                </fieldset>
                                                </div>
                                            @endif
                                            @if ($currentSteep == 3)
                                            <div>
                                            <h4><span class="number text-bold" _istranslated="1">3. </span>Informations spécifiques du bien</h4>

                                            <fieldset>
                                                <div wire:ignore>
                                                    @for($i = 0; $i < count($inputs); $i++)
                                                    <label for="{{$inputs[$i]->nom}}">{{{$inputs[$i]->nom}}} *</label>
                                                        <input class="form-control required" id="{{{$inputs[$i]->nom}}}" type="text" wire:model='inputdata.{{ $i }}'>
                                                    @endfor
                                                <label for="name">Description du bien *</label>
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <textarea name="" id="" cols="30" rows="3"placeholder="Tapez votre message" class="form-control" wire:model='description'></textarea>
                                                    </div>
                                                </div>
                                                <label for="name">Photos du bien *</label>
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <input type="file" value="Photo du lieu" class="" wire:model='photo' >
                                                    </div>
                                                </div>
                                                <div id="image-preview">

                                                </div>
                                                @foreach ($images as $image)
                                                    @if ($image)
                                                        <div>
                                                            <img src="{{ $image->temporaryUrl() }}" alt="Aperçu de l'image">
                                                        </div>
                                                    @endif
                                                @endforeach

                                                {{-- <div class="row" wire:ignore>
                                                    <div class="col-md-11" wire:ignore>
                                                        @if ($photos)
                                                            Photo Preview:
                                                            @foreach ($photos as $image)
                                                                <div class="photo-preview" wire:ignore>
                                                                    <img src="" id="preview-{{$loop->index}}" width="200" height="200">
                                                                </div>
                                                            @endforeach
                                                        @else
                                                        rtgfdc
                                                        @endif
                                                    </div>
                                                </div> --}}

                                                <p>(*) Mandatory</p>
                                                </div>
                                            </div>
                                            </fieldset>
                                            @endif
                                            <div class="action-button d-flex justify-content-between bg-white pt-2 pb-2" style="margin-right: 2%; margin-top: -2%">
                                                @if ($currentSteep == 1)
                                                <div></div>
                                                
                                                <button  type="button" class="btn btn-md btn-success" wire:click="increaseSteep">Suivant</button>
                                                @endif
                                                @if ($currentSteep == 2)
                                                    <div></div>
                                                    <button  type="button" style="margin-left: 15%;" class="btn btn-md btn-secondary" wire:click="decreaseSteep()">Précédent</button>
                                                    <button  type="button" class="btn btn-md btn-success" wire:click="increaseSteep">Suivant</button>
                                                @endif
                                                @if ($currentSteep == 3)
                                                <button  type="button" style="margin-left: 15%;" class="btn btn-md btn-secondary" wire:click="decreaseSteep()">Précédent</button>
                                                <button  type="submit" class="btn btn-md btn-primary" style="margin-right: 15%;">Enregistrer</button>
                                                @endif
                                                {{-- @if ($stored)
                                                    <script>
                                                        const Toast = Swal.mixin({
                                                        toast: true,
                                                        position: 'top-end',
                                                        showConfirmButton: false,
                                                        timer: 3000,
                                                        timerProgressBar: true,
                                                        didOpen: (toast) => {
                                                            toast.addEventListener('mouseenter', Swal.stopTimer)
                                                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                        }
                                                        })

                                                        Toast.fire({
                                                        icon: 'success',
                                                        title: 'Enregistrer avec succes'
                                                        })

                                                    </script>
                                                @endif --}}
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- <h5 class="text-center text-color">Renseignez les informations sur vous</h5>
                        <div class="col-md-12 animate-box" wire:ignore>
                            <div class="feature-left">
                                <form method="post" wire:submit.prevent='store' class="search-property-1" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <input class="" type="hidden" value="Particulier" wire:model='type_user'>
                                    {{-- <div class="row" >
                                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 align-items-end">
                                            <span>Qui êtes-vous?</span>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 align-items-end">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="optionsRadios1" type="radio" name="optionsRadios" value="Particulier" wire:model='type_user'>Particulier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 align-items-end">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="optionsRadios2" type="radio" wire:model='type_user' name="optionsRadios" value="Agent immobilier">Agent immobilier
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-3 col-lg-3 align-items-end">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" id="optionsRadios2" wire:model='type_user' type="radio" name="optionsRadios" value="Agence immobiliére">Agence immobiliére
                                                </label>
                                            </div>
                                        </div>
                                    </div> --}
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control " placeholder="Nom" wire:model='name'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control " placeholder="Prénom" wire:model='prenom'>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- @if ($type_user == "Agence immobiliére")
                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <div class="icon"><span class="ion-ios-search"></span></div>
                                                        <input type="text" class="form-control " placeholder="Nom de l'agence" wire:model='nameAgence'>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif --}
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Téléphone" wire:model='telephone'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Email" wire:model='email'>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Mot de passe" wire:model='password'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Confirmez le mot de passe" wire:model='confirmed_password'>
                                                </div>
                                            </div>
                                        </div> -}}
                                    </div><br>
                                    <div class="row">
                                        <h5 class="text-center text-color">Renseignez les informations sur votre bien</h5>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <select name="" id="" class="form-control " style="height: 45px !important;" wire:model='ville'>
                                                            <option value="" selected>Situation géographique</option>
                                                            @for($i = 0; $i < count($cities); $i++)
                                                                <option value="{{$cities[$i]}}">{{$cities[$i]}}</option>
                                                            @endfor

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Désignation du bien" wire:model='reference'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Surface totale" wire:model='surface'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Coût minimal" wire:model='prix_min'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="Coût maximal" wire:model='prix_max'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <select name="" id="" class="form-control " style="height: 45px !important;" wire:model='type_bien'>
                                                            <option value="" selected>Type du bien</option>
                                                            @foreach ($type_biens as $type_bien)
                                                                <option value="{{$type_bien->id}}">{{$type_bien->libelle}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="nombre de pièce" wire:model='nbr_piece'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <div class="icon"><span class="ion-ios-search"></span></div>
                                                    <input type="text" class="form-control" placeholder="nombre de chambre" wire:model='nbr_chambre'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group form-field">
                                        <div class="col-md-5 col-sm-5 col-xs-5"></div>
                                        <div class="col-md-3 col-md-offset-4 col-sm-3 col-sm-offset-4 col-xs-4 col-xs-offset-4 btn-text form-control btn btn-primary" style="margin-left: 0% ;">
                                            <div class="">
                                                <div class="" style="">
                                                   <label for="">Photos du bien</label> <input type="file" value="Photo du lieu" class="" wire:model='photo'>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"></div>
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 0% ;">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <textarea name="" id="" cols="30" rows="10"placeholder="Tapez votre message" class="form-control" wire:model='description'></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-5 col-xs-5"></div>
                                        <div class="col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-3 col-xs-offset-5" style="margin-left: 4% ;">
                                            <div class="form-group">
                                                <div class="form-field" style="margin-bottom: 30px; margin-top: 20px;">
                                                    <input type="submit" value="Envoyez le formulaire" class="btn-text form-control btn btn-primary btn-custom">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>

                </div>

            </div>
            <div id="">


                    <a  class="position-fixed " href="{{route('offre-premium')}}">
                        {{-- <span class="text-danger position-fixed h-auto w-auto" style="bottom:0;right:5%;animation: blink 1s infinite; font-size:7em;" >
                            &#9733;
                        </span>
                        <span class="position-fixed text-warning" style="bottom:0;right:5%;animation: blink 1s infinite 0.5s; font-size:7em;">
                            &#9733;
                        </span> --}}
                        <span class="text-uppercase text-danger font-weight-bold position-fixed"
                            style="white-space: pre-wrap; -webkit-text-stroke-color: white;right:6%;bottom:40px;font-size:16px; animation: blink 1s infinite 0.5s;">  offres <br> premium</span>
                        <span class="text-uppercase text-danger font-weight-bold position-fixed"
                            style="white-space: pre-wrap; -webkit-text-stroke-color: white;right:6%;bottom:40px;font-size:16px; animation: blink 1s infinite 0.5s;">  offres <br> premium</span>
                    </a>

            </div>
            </div>
            @push('scripts')
                <script>
                    function previewImages() {
                        var previewContainer = document.getElementById('image-preview');
                        var files = document.querySelector('input[type=file]').files;

                        previewContainer.innerHTML = ''; // Réinitialise l'aperçu

                        for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            var reader = new FileReader();

                            reader.onload = function(event) {
                                var img = document.createElement('img');
                                img.src = event.target.result;
                                img.className = 'preview-image';
                                previewContainer.appendChild(img);
                            };

                            reader.readAsDataURL(file);
                        }
                    }

                    document.querySelector('input[type=file]').addEventListener('change', previewImages);
                </script>
            @endpush
</div>
