<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard - Les acteurs immobiliers</h1>
    @if ($form == true)
        @include('livewire.admin.immobilier.create')
    @else
        <div class="row mb-4"></div>

        <div class="row mb-4">
            <div class="col-6">
                <ul class="nav justify-content-start ">
                    <li class="nav-item">
                    <a class="nav-link active disabled border border-warning bg-ligth" href="#">Tous les acteurs</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link border-bottom border-warning " href="#">Les anciens </a>
                    </li>
                </ul>
            </div>
            <div class="col-6 ">
                <div class="text-right">
                    <button type="button" class="btn btn-success px-3" wire:click='new'>
                        Ajouter un nouveau
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12"></div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Les acteurs</h6>
                    </div>
                    <div class="card-body">
                        <div class="">
                        <!-- START table-responsive-->
                        <div class="table-responsive">
                            <table class="table">
                            <thead>
                                <tr>
                                <th >Photo</th> 
                                <th class="text-center">Nom</th>
                                <th class="text-center">Adresse</th>
                                <th class="text-center">Email/Téléphone</th>
                                <th class="text-center">Titre</th>
                                <th class="text-center">Opérations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="va-middle ">
                                            <img class="wd-xxs2 rounded-circle shadow-z2" src="img/user/02.jpg" alt="Team lead" data-toggle="tooltip" data-title="Marion Woods">
                                        </td>
                                        <td class="text-center">
                                            <p class="m-0">{{$user->name}} {{$user->prenoms}} {{$user->nameAgence}}</p>
                                            {{-- <p class="m-0">Hendrerit.
                                            <br>
                                            <small class="text-thin">Sed porta fermentum felis in molestie.</small>
                                            </p> --}}
                                        </td>
                                        <td class="text-right va-middle text-center"><p>{{$user->residence}}</p></td>
                                        <td class="text-right va-middle text-center"><p>{{$user->telephone}} {{$user->email}}</p></td>
                                        {{-- <td class="text-right va-middle text-center"><em class="ion-md-trending-up text-success"></em></td> --}}
                                        <td class="va-middle text-center">{{$user->titre}}</td>
                                        <td class="va-middle text-right">
                                            <button class="btn btn-danger" wire:click='delete({{$user->id}})'>Supprimer</button> <button class="btn btn-info">Modifier</button> <button class="btn btn-primary" data-toggle="modal" data-target=".showModal">voir</button>
                                            {{-- <div class="badge badge-info">in progress</div> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- END table-responsive-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>