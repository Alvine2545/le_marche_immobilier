<div class="container">
    <h1 class="h3 mb-4 text-gray-800">Dashbord - Administrateurs</h1>
    <div class="text-right">
            <button type="button" class="btn btn-success px-3" data-toggle="modal" data-target="#exampleModal">
                Ajouter un nouveau administrateur
            </button>
    </div>
    <div class="col-6 ">

        {{-- Ajouter modal --}}
        <div wire:ignore class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <form action="" method="post" wire:submit.prevent='store'>
                    @csrf
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Nouveau administrateur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                      <label for="">Nom</label>
                                      <input type="text" wire:model="name" id="" class="form-control" placeholder="" required="">
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
    <div class="card-columns">
        @foreach ($admins as $admin)
            <div class="card mb-4">
                <div class="card-body pb-0 clearfix">
                    <!-- START dropdown-->
                    {{-- <div class="float-right dropdown d-none d-lg-block">
                        <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-ios-more"></em></button>
                        <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"><a class="dropdown-item" href="#">Call</a><a class="dropdown-item" href="#">Locate</a><a class="dropdown-item" href="#">Edit</a></div>
                    </div> --}}
                    <!-- END dropdown-->
                </div>
                <div class="card-body pt-0">
                    <div class="text-center">
                    <div class="mb-3"><img class="wd-sm rounded-circle img-thumbnail" src="img/user/01.jpg" alt="user"></div>
                    <div class="h3">{{$admin->name}}</div>
                    <p><em class="ion-ios-briefcase mr-2"></em><small class="text-muted">Administrateur</small></p>
                    <a href="mailto:{{$admin->email}}" class="text-muted text-bold"><em class="ion-ios-mail mr-2"></em>{{$admin->email}}</a>
                    </div>
                    {{-- <p class="mt-3">Proin est sapien, convallis non hendrerit nec, laoreet ut ipsum. Sed pharetra euismod dolor, id feugiat ante volutpat eget. Etiam at enim quis nulla facilisis lacinia.</p> --}}
                    {{-- <p><em class="ion-ios-mail mr-2"></em>mail@contact.com</p> --}}
                </div>
                <div class="card-footer text-center">
                    <a id="swal-demo5" class="btn btn-sm btn-danger text-white" type="button"><em class="ion-ios-trash icon-lg icon-fw"></em></a>
                    <button class="btn btn-sm btn-info" wire:click='edit({{$admin->id}})' type="button" data-toggle="modal" data-target=".showModal"><em class="ion-ios-person-add icon-lg icon-fw"></em></button>
                    
                    {{-- Updated Modal --}}
                    <div wire:ignore class="modal fade showModal" id="" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <form action="" method="post" wire:submit.prevent='update({{$admin->id}})'>
                                @csrf
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="showModalLabel">Modification</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                <label for="">Nom</label>
                                                <input type="text" wire:model="name" id="" class="form-control" value="{{$admin->name}}" required="">
                                                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                <label for="">Adresse email</label>
                                                <input type="email" wire:model="email" id="" class="form-control" value="{{$admin->email}}" required="">
                                                {{-- <small id="helpId" class="text-muted">Help text</small> --}}
                                                </div>
                                            </div>

                                        </div>

                                </div>
                                <div class="modal-footer bg-primary text-white">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        @endforeach
    </div>
</div>
@push('scripts')
    <script>swal-button--confirm
        $(document).ready(function(){
            $('.swal-button--confirm').click({
                @this.delete();
            });
        });
    </script>
@endpush