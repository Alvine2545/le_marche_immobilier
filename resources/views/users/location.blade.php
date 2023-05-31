@extends('layouts.index_users')
@section('content')
    <div class="container-fluid">
        <h1 class="text-bold">Offres envoyées - Offres de Locations</h1>
        <hr style="border: solid #EFCF4F 2px; ">
        <a class="btn btn-round-custom" href="{{route('create-location')}}">Ajouter une offre</a>
        @foreach ($biens as $item)
            <div class="row mt-5">
                <div class="offre ">
                    <div class="partner" >
                        <img src="Images/banniere.jpg" alt="" class="img-responsive img-fluide" style="height: 100%; border-radius: 15px !important;">
                    </div>
                    <div class="services container" style="margin-left: 3vh;">
                        <div class="row">
                            <h1 class="title text-color text-bold">Nom de la propriété</h1>
                        </div>
                        <div class="row">
                            
                            <h3 class="text-bold">1 000 000 FCFA</h3>
                        </div>
                        <p>Offre postée le 01/06/2023</p>
                        <hr style="height: 5px; background-color: black;">
                        <div class="row p-1">
                            <div class="col-md-3 col-sm-2 col-xs-2"><span> <i class="icon-edit" style="color: #EFCF4F; font-size: 24px;"></i> Modifier</span>
                            </div>
                            <div class="col-md-3 col-sm-2 col-xs-2"><span> <i class="icon-trash" style="color: #EFCF4F; font-size: 24px;"></i> Supprimer</span>
                            </div>
                            <div class="col-md-offset-2 col-md-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-5 d-flex justify-content-end">
                                <span class=""> <input type="submit" value="Consulter l'offre" class="float-end btn btn-round-custom"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection