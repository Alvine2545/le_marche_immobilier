@extends('layouts.index_users')
@section('content')
    <div class="container-fluid">
        <h1 class="text-bold">Offres envoyées - Offres de location</h1>
        <hr style="border: solid #EFCF4F 2px; ">
        <div id="">
                <h3></h3><br>
                <div class="container">
                    <h2 class="text-center text-color">Mettre en location un bien immobilier</h2>
                    <h3 class="text-center text-color">Remplissez ce formulaire pour mettre en location votre bien immobilier</h3><br>

                    <div class="row">
                        <h5 class="text-center text-color"></h5>
                        <div class="col-md-12 animate-box" >
                            <div class="feature-left">
                                <form method="post" action="{{route('store-offre')}}" class="search-property-1" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <input type="hidden" name="type" value="location">
                                    <fieldset>
                                        <legend class="text-color text-center">Informations générales du bien</legend>
                                        <div class="row">   
                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                        <select id="" class="form-control " style="height: 45px !important;" name='ville' required>
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
                                                        <select required id="selectInput" class="form-control " style="height: 45px !important;" name='type_bien'>
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
                                                        {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                        <input required type="text" class="form-control" placeholder="Coût minimal" name='prix_min'>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        {{-- <div class="icon"><span class="ion-ios-search"></span></div> --}}
                                                        <input required type="text" class="form-control" placeholder="Coût maximal" name='prix_max'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    
                                    <fieldset >
                                        <legend class="text-color text-center">Informations Spécifiques du bien</legend>
                                        <div class="row" id="additionalInputsContainer">
                                            
                                        </div><br>
                                        <div class="row form-group form-field">
                                            <div class="col-md-3 col-sm-3 col-xs-3"><label for="">Photos du bien</label></div>
                                            <div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2 col-xs-5 col-xs-offset-2 btn-text form-control btn btn-primary" style="margin-left: 0% ;">
                                                <div class="">
                                                    <div class="mb-3" style="">
                                                    <input required type="file" value="Photo du lieu" class="" name='photo[]' multiple onchange="previewImages(event)">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <span>Aperçu des images.</span>
                                            <div class="col-md-12 col-sm-12 col-xs-12 mb-3" style="margin-left: 0%; height: 100%;" id="preview">
                                                
                                            </div>
                                            <span id="info"></span>
                                            <input type="hidden" name="main_image" id="main-image-input">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5 col-sm-5 col-xs-5"></div>
                                            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-left: 0% ;">
                                                <div class="form-group">
                                                    <div class="form-field">
                                                        <textarea required name="" id="" cols="30" rows="10" placeholder="Description du bien" class="form-control" name='description'></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </fieldset>
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
    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>

        $(document).ready(function() {
            var selectInput = $('#selectInput') ;
            var additionalInputsContainer = $('#additionalInputsContainer');

            selectInput.on('change', function() {
                var selectedValue = selectInput.val();
                // Envoie de la requête Ajax
                var url = 'show/'+selectedValue; // Endpoint de votre serveur Laravel
                console.log(url);
                $.ajax({
                    url:url,
                    method:'GET',
                    data:'_token = <?php echo csrf_token() ?>',
                    success:function(response) {
                        console.log(response);
                        renderAdditionalInputs(response);
                    },
                    error: function(error) {
                        console.error(error);
                    }
                });
            });

            function renderAdditionalInputs(inputs) {
                additionalInputsContainer.empty();
                // Génération des inputs à partir des données reçues
                inputs.forEach(function(input) {
                    var columnDiv = $('<div>').addClass('col-md-4 col-sm-4 col-xs-4 col-lg-4 align-items-end');
                    var formGroupDiv = $('<div>').addClass('form-group');
                    var formFieldDiv = $('<div>').addClass('form-field');
                    var inputElement = $('<input>').attr({
                        'type': input.type,
                        'class': 'form-control',
                        'placeholder': input.nom,
                        'name': input.nom
                    });

                    formFieldDiv.append(inputElement);
                    formGroupDiv.append(formFieldDiv);
                    columnDiv.append(formGroupDiv);
                    additionalInputsContainer.append(columnDiv);
                });
            }
        });

//Prévisualisation des images
        function previewImages(event){
            var mainImageInput = document.getElementById('main-image-input');
            var preview = document.getElementById('preview');
            var info = document.getElementById('info');
            var files = event.target.files
            preview.innerHTML = '';
            info.textContent = '';
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
                info.textContent="Veuillez sélectionnez l'image principale."
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