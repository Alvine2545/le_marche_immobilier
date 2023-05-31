@extends('layouts.index_users')
@section('content')
    <div class="container-fluid">
        <h1 class="text-bold">Offres envoyées - Offres d'Achats</h1>
        <hr style="border: solid #EFCF4F 2px; ">
        <div id="">
                <h3></h3><br>
                <div class="container">
                    <h2 class="text-center text-color">Mettre en vente un bien immobilier</h2>
                    <h3 class="text-center text-color">Remplissez ce formulaire pour mettre en vente votre bien immobilier</h3><br>

                    <div class="row">
                        <h5 class="text-center text-color"></h5>
                        <div class="col-md-12 animate-box" >
                            <div class="feature-left">
                                <form method="post" action="{{route('store-offre')}}" class="search-property-1" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <fieldset>
                                        Informations générales du bien
                                    </fieldset>
                                    <input type="hidden" name="type" value="achat">
                                    <div class="row">   
                                        
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                    <select name="" id="" class="form-control " style="height: 45px !important;" name='ville'>
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
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                    <select name="" id="selectInput" class="form-control " style="height: 45px !important;" name='type_bien'>
                                                            <option value="" selected>Type du bien</option>
                                                            @foreach ($type_biens as $type_bien)
                                                                <option value="{{$type_bien->id}}">{{$type_bien->libelle}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}
                                                    <input type="text" class="form-control" placeholder="Désignation du bien" name='reference'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}
                                                    <input type="text" class="form-control" placeholder="Surface totale" name='surface'>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                    <input type="text" class="form-control" placeholder="Coût minimal" name='prix_min'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                    <input type="text" class="form-control" placeholder="Coût maximal" name='prix_max'>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}
                                                    <input type="text" class="form-control" placeholder="nombre de pièce" name='nbr_piece'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}
                                                    <input type="text" class="form-control" placeholder="nombre de chambre" name='nbr_chambre'>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                    <fieldset>
                                        Informations Spécifiques du bien
                                    </fieldset>
                                    
                                    @for($i = 0; $i < count($inputs); $i++)
                                        <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                    <input type="text" required class="form-control" placeholder="{{{$inputs[$i]->nom}}}" name='inputdata.{{ $i }}'>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor

                                    <div class="row form-group form-field">
                                        <div class="col-md-3 col-sm-3 col-xs-3"><label for="">Photos du bien</label></div>
                                        <div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-5 col-xs-offset-2 btn-text form-control btn btn-primary" style="margin-left: 0% ;">
                                            <div class="">
                                                <div class="mb-3" style="">
                                                    
                                                   <input type="file" value="Photo du lieu" class="" name='photo[]' multiple onchange="previewImages(event)">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span>Aperçu des images. Veuillez sélectionnez l'image principale</span>
                                        <div class="col-md-12 col-sm-12 col-xs-12 mb-3" style="margin-left: 0%; height: 100%;" id="preview">
                                            
                                        </div>
                                         <input type="hidden" name="main_image" id="main-image-input">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-5 col-xs-5"></div>
                                        <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 0% ;">
                                            <div class="form-group">
                                                <div class="form-field">
                                                    <textarea name="" id="" cols="30" rows="10"placeholder="Description du bien" class="form-control" name='description'></textarea>
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
                        </div>
                    </div>
                    
                </div>
                
            </div>
    </div>
    


    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var selectInput = document.getElementById('selectInput');
            var additionalInputsContainer = document.getElementById('additionalInputsContainer');

            selectInput.addEventListener('change', function() {
                var selectedValue = selectInput.value;

                // Envoie de la requête Ajax
                var url = '/votre_endpoint'; // Endpoint de votre serveur Laravel

                axios.post(url, { selectedValue: selectedValue })
                    .then(function(response) {
                        var inputs = response.data.inputs;
                        renderAdditionalInputs(inputs);
                    })
                    .catch(function(error) {
                        console.error(error);
                    });
            });

            function renderAdditionalInputs(inputs) {
                additionalInputsContainer.innerHTML = ''; // Réinitialise les inputs précédents

                // Ajoute les inputs à partir des données reçues
                inputs.forEach(function(input) {
                    var inputElement = document.createElement('input');
                    inputElement.setAttribute('type', 'text');
                    inputElement.setAttribute('name', input.name);
                    additionalInputsContainer.appendChild(inputElement);
                });
            }
        });


        function previewImages(event){
            var mainImageInput = document.getElementById('main-image-input');
            var preview = document.getElementById('preview');
            var files = event.target.files
            preview.innerHTML = '';
            for (var i = 0; i < files.length; i++) {
                var reader = new FileReader();
                reader.onload = (function(file) {
                    return function(e) {
                        var image = document.createElement('img');
                        image.setAttribute('src', e.target.result);
                        image.setAttribute('class', 'preview-image');

                        var radioLabel = document.createElement('label');
                        var radioButton = document.createElement('input');
                        radioButton.setAttribute('type', 'radio');
                        radioButton.setAttribute('name', 'main_image_radio');
                        radioButton.setAttribute('value', file.name);

                        radioLabel.appendChild(radioButton);

                        image.addEventListener('click', function() {
                            mainImageInput.value = file.name; // Enregistrer l'ID ou l'URL de l'image principale
                            alert('Image principale sélectionnée : ' + file.name);
                        });
                        preview.appendChild(image);
                    };
                })(files[i]);

                reader.readAsDataURL(files[i]);
                
            }
            
        }
    </script>
    <style>
    .preview-image {
        max-width: 200px;
        max-height: 200px;
        margin-right: 10px;
        margin-bottom: 10px;
    }
</style>
@endsection