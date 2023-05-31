<div>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Dashboard - Les types de bien immobiliers</h1> 
    </div>
    <div class="row">
              <div class="col-xl-8 col-xs-12">
                <div class="cardbox">
                  <div class="cardbox-heading">Type des biens</div>
                    <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Désignation</th>
                        <th>Date d'ajout</th>
                        <th>Opérations</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->libelle}}</td>
                                <td>{{$item->created_at}}</td>
                                <td><button class="btn btn-md btn-primary" wire:click='edit({{$item->id}})'>Modifier</button> <button wire:click='delete({{$item->id}})' class="btn btn-md btn-danger">Supprimer</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="col-xl-4 col-xs-12">
                @if ($updateForm == true)
                    <div class="cardbox">
                        <div class="cardbox-heading"><h5 class="text-bold "> Modification</h5></div>
                        <div class="container">
                            <form action="" method="post" wire:submit.prevent='update'>
                                @csrf
                                @method('post')
                                <input type="hidden" wire:model='idType' value="{{$idType}}">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="icon"><label for="">Nom</label></div>
                                        <input wire:model="libelle" type="text" class="form-control " required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-4 col-sm-2"></div>
                                    <div class="col-sm-4">
                                    <button type="submit" class="btn btn-info btn-md">Modifier</button>
                                    </div>
                                    <div class="col-sm-4">
                                    <button type="reset" class="btn btn-danger btn-md float-right">Annuler</button>
                                    </div>
                                </div><br>
                            </form>
                        </div>
                        </div>
                @else
                    <div class="cardbox">
                    <div class="cardbox-heading"><h5 class="text-bold "> Ajouter un nouveu type de bien immobilier</h5></div>
                    <div class="container">
                        <form action="" method="post" wire:submit.prevent='addType'>
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <div class="form-field">
                                    <div class="icon"><label for="">Nom</label></div>
                                    <input wire:model="libelle" type="text" class="form-control " required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-2"></div>
                                <div class="col-sm-4">
                                <button type="submit" class="btn btn-info btn-md">Enregister</button>
                                </div>
                                <div class="col-sm-4">
                                <button type="reset" class="btn btn-danger btn-md float-right">Annuler</button>
                                </div>
                            </div><br>
                        </form>
                    </div>
                    </div>
                    
                @endif
              </div>
    </div>
</div>