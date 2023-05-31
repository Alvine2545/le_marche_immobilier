<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard - Nos partenaires</h1>
<div class="row mb-4">

</div>

<div class="row mb-4">
    <div class="col-6">
        <ul class="nav justify-content-start ">
            <li class="nav-item">
              <a class="nav-link active disabled border border-warning bg-ligth" href="#">Toute les partenaires</a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-bottom border-warning " href="#">Les anciens partenaires</a>
            </li>
        </ul>
    </div>
    <div class="col-6 ">

        <div class="text-right">
            <button type="button" class="btn btn-success px-3" data-toggle="modal" data-target="#exampleModal">
                Ajouter un nouveau partenaire
            </button>
        </div>

        {{-- Ajouter modal --}}
        <div wire:ignore class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <form action="" method="post" wire:submit.prevent='store'>
                    @csrf
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau partenaire</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Nom de l'entité</label>
                                      <input type="text" wire:model="nom" id="" class="form-control" placeholder="" required="">
                                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Numero IFU</label>
                                      <input type="text" wire:model="ifu" id="" class="form-control" placeholder="" required="">
                                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Situation géographique</label>
                                      <input type="text" wire:model="adresse" id="" class="form-control" placeholder="" required="">
                                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Lien du site web de l'entité</label>
                                      <input type="text" wire:model="site" id="" class="form-control" placeholder="" required="">
                                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Adresse email</label>
                                      <input type="email" wire:model="email" id="" class="form-control" placeholder="" required="">
                                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Téléphone</label>
                                      <input type="text" wire:model="tel" id="" class="form-control" placeholder="" required="">
                                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Logo de l'entité</label>
                                      <input type="file" wire:model="logo" id="" class="form-control" placeholder="" required="">
                                      {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Situation géographique</label>
                                      <textarea wire:model="description" id="" class="form-control" placeholder="" required="" cols="30" rows="10"></textarea>
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
    <div class="col-12">
        
            </div>

    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Les partenaires</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Entité</th>
                                <th>Email/Téléphone</th>
                                <th>Site web</th>
                                <th>Statut</th>
                                <!--th>Date Ajout</th-->
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($partenaires as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td><a href="mailto:{{$item->email}}">{{$item->email}}</a> / <a href="tel:{{$item->tel}}">{{$item->tel}}</a></td>
                                    <td>{{$item->site}}</td>
                                    <td>
                                        @if ($item->status)
                                            <span class="text-success">Demande acceptée</span>
                                        @else
                                            <span class="text-success">Demande en attente</span>
                                        @endif
                                        
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            @if ($item->status)
                                                <button class="btn btn-warning" data-toggle="modal" data-target="#voirModal{{$item->id}}">Voir</button>
                                                <button type="button"  class="btn btn-danger" data-toggle="modal" data-target="#supprimerModal{{$item->id}}">
                                                    Supprimer
                                                </button>
                                            @else
                                                <button class="btn btn-primary" wire:click="storeOffre({{$item->id}})">Approuver</button>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ejecterModal{{$item->id}}">
                                                    Rejeter
                                                </button>
                                                <button class="btn btn-warning" data-toggle="modal" data-target="#voirModal{{$item->id}}">Voir</button>
                                            @endif
                                            
                                        </div>

                                        <!-- Supprimer une demande -->
                                        <div class="container modal fade" id="supprimerModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="supprimerModalLabel{{$item->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="supprimerModalLabel">Suppression du partenaire <b class="text-primary">{{$item->name}}</b></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="" method="post">
                                                        <p>
                                                            Cette action est irréverssible !
                                                            Lorsque vous supprimez un partenaire, un mail lui sera envoyé et il est directement supprimer de votre système. <br>
                                                        </p>
                                                        <p>Toutefois, vous pouvez ajouter un nouveau partenaire.</p>
                                                        <input type="hidden" name="idPer" value="{{$item->id}}">
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                            <button type="submit" class="btn btn-danger" wire:click='delete{{$item->id}}'>Confirmer</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Rejeter une demande -->
                                        <div class="container modal fade" id="ejecterModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="ejecterModalLabel{{$item->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ejecterModalLabel">Rejetter la demande de <b class="text-primary">{{$item->name}}</b></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="" method="post">
                                                        <p>
                                                            Lorsque vous rejeter une demande, un mail est envoyé à l'entité et elle est directement considérée comme un ancien dans le système. <br>
                                                            Elle ne pourra pas :
                                                        </p>
                                                        <ul>
                                                            <li>Proposée ses offres</li>
                                                        </ul>
                                                        <p>Toutefois, vous pouvez ajouter un nouveau partenaire.</p>
                                                        <input type="hidden" name="idPer" value="{{$item->id}}">
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                            <button type="button" class="btn btn-primary" wire:click='rejet({{$item->id}})'>Confirmer</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Détals d'une demande --}}
                                        <div class="container modal fade" id="voirModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="voirModalLabel{{$item->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="voirModalLabel">Détails de la demande de <b class="text-primary">{{$item->name}}</b></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <form action="" method="post">
                                                        
                                                        <ul>
                                                            <li>Les services fournis</li>
                                                        </ul>
                                                        <p>{{$item->description}}</p>
                                                        <input type="hidden" name="idPer" value="{{$item->id}}">
                                                        
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                                            {{-- <button type="submit" class="btn btn-primary" wire:click='rejet({{$item->id}})'>Confirmer</button> --}}
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>




                </div>