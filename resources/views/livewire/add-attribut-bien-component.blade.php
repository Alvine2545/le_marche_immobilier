<div>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Dashboard - Biens immobiliers</h1> 
        
    <div class="row mb-4">
       <button class="float-right btn btn-primary" style="float: right" data-toggle="modal" data-target=".showModal">Nouvelle caractéristique</button>
       <div>
        <div wire:ignore class="modal fade showModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form action="" method="post" wire:submit.prevent='store'>
                        @csrf
                        <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="exampleModalLabel">Nouvelle caractéristique</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="">Désignation</label>
                                        <input type="text" wire:model="nom" id="" class="form-control" placeholder="" required="">
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <select required wire:model="types" name="" id="" class="form-control form-control-header" style="height: 45px !important;">
                                                <option value="">Types </option>
                                                <option value="VARCHAR">Chaîne de caractères de longueur variable</option>
                                                <option value="CHAR">Chaîne de caractères de longueur fixe</option>
                                                <option value="TEXT">Texte de longueur variable </option>
                                                <option value="INT">Nombre entier</option>
                                                <option value="SMALLINT">Nombre entier court</option>
                                                <option value="BIGINT">Nombre entier long</option>
                                                <option value="FLOAT">Nombre à virgule flottant</option>
                                                <option value="DOUBLE">Nombre à virgule flottante double précision</option>
                                                <option value="DECIMAL">Nombre décimal précis</option>
                                                <option value="DATE">Date sans heure</option>
                                                <option value="DATETIME">Date et heure</option>
                                                <option value="TIME">Heure sans date</option>
                                                <option value="TIMESTAMP">Date et heure avec information de fuseau horaire</option>
                                                <option value="BOOLEAN">Valeur booléenne (VRAI ou FAUX)</option>
                                            </select>
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="">Type de bien</label>
                                            <select required wire:model="bien" name="" id="" class="form-control form-control-header" style="height: 45px !important;">
                                                <option value="">Types de bien</option>
                                                @foreach ($biens as $item)
                                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                    
                                                @endforeach
                                            </select>
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label for="">Description</label>
                                        <textarea wire:model="description" id="" class="form-control" placeholder="" required="" cols="30" rows="5"></textarea>
                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                        </div>
                                    </div>

                                </div>

                        </div>
                        <div class="modal-footer bg-primary text-white">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-success">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       </div>
    </div>
    <div class="row">
              <div class="col-xl-12 col-xs-12 col-md-12">
                <div class="cardbox">
                    <div class="cardbox-heading">Caractéristisques des biens immobiliers</div>
                    <div class="cardbox-body">
                        <div class="table-responsive" wire:ignore>
                            <table class="table footable toggle-arrow-tiny">
                                <thead>
                                <tr>
                                    <th data-toggle="true">#</th>
                                    <th>Désignation</th>
                                    <th>Types</th>
                                    <th>Opérations</th>
                                    <th data-hide="all">Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 0;
                                    @endphp
                                    @foreach ($colonnes as $colonne)
                                    @php $i++; @endphp
                                        <tr data-expanded="true">
                                            <td>{{$i}}</td>
                                            <td>{{$colonne ->nom}}</td>
                                            <td>{{$colonne ->type}}</td>
                                            <td><button class="btn btn-danger" wire:click='delete({{$colonne->id}})'>supprimer</button> <button class="btn btn-info" data-toggle="modal" data-target=".showModal1">modifier</button></td>
                                            <td>{{$colonne ->description}}</td>
                                        </tr>

                                        <div wire:ignore class="modal fade showModal1" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="" method="post" wire:submit.prevent='update({{$colonne->id}})'>
                                                        @csrf
                                                        <div class="modal-header bg-primary text-white">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">

                                                                <div class="row">
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                        <label for="">Désignation</label>
                                                                        <input value="{{$colonne ->nom}}" type="text" wire:model="nom" id="" class="form-control" placeholder="" required="">
                                                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="">Type</label>
                                                                            <select required wire:model="types" name="" id="" class="form-control form-control-header" style="height: 45px !important;">
                                                                                <option value="">Types </option>
                                                                                <option value="VARCHAR">Chaîne de caractères de longueur variable</option>
                                                                                <option value="CHAR">Chaîne de caractères de longueur fixe</option>
                                                                                <option value="TEXT">Texte de longueur variable </option>
                                                                                <option value="INT">Nombre entier</option>
                                                                                <option value="SMALLINT">Nombre entier court</option>
                                                                                <option value="BIGINT">Nombre entier long</option>
                                                                                <option value="FLOAT">Nombre à virgule flottant</option>
                                                                                <option value="DOUBLE">Nombre à virgule flottante double précision</option>
                                                                                <option value="DECIMAL">Nombre décimal précis</option>
                                                                                <option value="DATE">Date sans heure</option>
                                                                                <option value="DATETIME">Date et heure</option>
                                                                                <option value="TIME">Heure sans date</option>
                                                                                <option value="TIMESTAMP">Date et heure avec information de fuseau horaire</option>
                                                                                <option value="BOOLEAN">Valeur booléenne (VRAI ou FAUX)</option>
                                                                            </select>
                                                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                            <label for="">Type de bien</label>
                                                                            <select required wire:model="bien" name="" id="" class="form-control form-control-header" style="height: 45px !important;">
                                                                                <option value="">Types de bien</option>
                                                                                @foreach ($biens as $item)
                                                                                <option value="{{$item->id}}">{{$item->libelle}}</option>
                                                                                    
                                                                                @endforeach
                                                                            </select>
                                                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12">
                                                                        <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea wire:model="description" id="" class="form-control" placeholder="" required="" cols="30" rows="5">{{$colonne ->description}}</textarea>
                                                                        {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                        </div>
                                                        <div class="modal-footer bg-primary text-white">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                            <button type="submit" class="btn btn-success">Modifer</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                
                                <tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
              @push('ctyles')
                  <style>
                    .footable{
                        overflow: scroll !important;
                    }
                  </style>
              @endpush
              @push('scripts')
                  <script>
                    // $(document).ready(function(){
                    //     $('.footable').
                    // });
                  </script>
              @endpush
    </div>
</div>