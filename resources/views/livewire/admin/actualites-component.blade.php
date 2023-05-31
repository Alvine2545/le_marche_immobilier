<div>
    <div class="container">
        <h1 class="h3 mb-4 text-gray-800">Dashbord - Actualités</h1>
        {{-- <h1 class="text-bold"></h1> --}}
        {{-- <hr style="border: solid #EFCF4F 2px; "> --}}
        @if(session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if(session('publication'))
            <div class="alert alert-success">
                {{ session('publication') }}
            </div>
        @endif
        @if(session()->has('delete'))
            <div class="alert alert-danger">
                {{ session('delete') }}
            </div>
        @endif
    </div>
    @if ($listMode == true)
        <div class="float-right" wire:ignore>
            <button id="myBtn" class="float-right btn btn-primary" wire:click='create'>Créer une actualité</button>
        </div><br><br>
        <div class="cardbox" id="list">
            <div class="cardbox-heading">
                <div class="float-right"><span class="nr-2">Trier par: </span>
                    <div class="btn-group btn-group-sm" role="group"><a class="wd-xxs btn btn-secondary sort-column" href="#sort" data-index="0">ID</a><a class="wd-xxs btn btn-secondary sort-column" href="#sort" data-index="1">Ecrit par</a><a class="wd-xxs btn btn-secondary sort-column" href="#sort" data-index="4">Date</a><a class="wd-xxs btn btn-secondary sort-column" href="#sort" data-index="5">Status</a></div>
                </div>
                <div class="cardbox-title">Liste des actualités</div><small>Choisissez comment trier chaque colonne</small>
                </div>
                <div class="cardbox-body">
                <div class="table-responsive" wire:ignore>
                    <table wire:ignore class="table footable-sort">
                        <thead>
                        <tr>
                            <th data-type="numeric" data-sort-initial="true">ID</th>
                            <th>Référence</th>
                            <th data-sort-ignore="true">Description</th>
                            <th>Ecrit par</th>
                            <th data-type="numeric">Date</th>
                            <th>Status</th>
                            <th data-sort-ignore="true">Opérations</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($actualites as $key => $item)
                            <tr>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['reference']}}</td>
                                <td><?php echo explode(' ', $item['description'])[0] ?>....</td>
                                <td>{{$admin[$key]}}</td>
                                <td data-value="78025368997">{{$item['created_at']}}</td>
                                @if ($item['statut'] == true)
                                    <td data-value="1"><span class="status-metro status-active" title="Publier">Publier</span></td>
                                    <td><button class="btn btn-danger" wire:click="delete({{ $item['id'] }}, '{{ $item['id'] }}')">supprimer</button> <button class="btn btn-primary" data-toggle="modal" data-target=".showModal" wire:click="show({{ $item['id'] }})">voir</button></td> 
                                @else
                                    <td data-value="1"><span class="status-metro status-active bg-warning" title="En attente">En attente</span></td>
                                    <td><button class="btn btn-danger" wire:click="delete({{ $item['id'] }}, '{{ $item['id'] }}')">supprimer</button> <button class="btn btn-info"  wire:click="update({{ $item['id'] }})" >modifier</button> <button class="btn btn-success" wire:click="pub({{ $item['id'] }})">publier</button> <button class="btn btn-primary" data-toggle="modal" data-target=".showModal" wire:click="show({{ $item['id'] }})">voir</button></td>    
                                @endif                           
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
    <div wire:ignore.self class="modal fade demo-modal-std showModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mt-0 modal-title">Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <span>{{$ref}}</span>
            <div><?php echo $content ?></div>
          </div>
        </div>
      </div>
    </div>
    @if ($createMode == true)
    <h3></h3>
        <br><div class="cardbox">
            <div class="cardbox-heading">
                <div class="cardbox-title">Formulaire d'ajout d'actualités</div><small>Ajout et mise en forme d'une actualité</small>
            </div>
                <div class="cardbox-body">
                    <form wire:ignore style="display: none;" id="myForm" wire:submit.prevent='store'> 
                        <div class="form-group">
                            <label class="label text-bold" for="">Référence de l'article</label><br>
                            <input type="text" class="form-control" name="" id="" wire:model='ref'>
                        </div>
                        <div class="form-group">
                        <label for="" class="label text-bold">Rédiger votre article <span class="text-danger">*</span></label><br>
                        <textarea wire:ignore wire:model='content' name='content' id='summernote' cols='30' rows='10' style='display: hidden;'></textarea>
                        @error('content') <span class="error">{{ $message }}</span> @enderror
                        </div><br>
                        <label for="file" class="label text-bold mb-2">Joindre une image ou une vidéo </label><br>
                        <div class="form-group">
                            <input type="file" wire:model="file" id="file" name="file" >
                            @if ($file)
                                <img src="{{$file->temporaryUrl()}}" alt="Aperçu">
                            @endif
                            @error('file') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-md-2"></div>
                            <button class="col-md-2 mr-4 btn btn-primary" type="submit">Enregistrer</button>
                            <a class="col-md-2 mr-4 btn btn-success" type="button" wire:click='store_and_pub' >Enregistrer et publier</a>
                            <button class="col-md-2 btn btn-danger" type="reset" wire:click='closeForm'>Annuler</button>
                        </div>
                    </form>
                </div>
        </div>
    @endif
    @if ($updateMode == true)
        <h3></h3>
        <br><div class="cardbox">
            <div class="cardbox-heading">
                <div class="cardbox-title">Modifier l'actualités</div><small>Ajout et mise en forme d'une actualité</small>
            </div>
                <div class="cardbox-body">
                    <form wire:ignore style="display: none;" id="myForm" wire:submit.prevent='edit'> 
                        <div class="form-group">
                            <label class="label text-bold" for="">Référence de l'article</label><br>
                            <input type="text" class="form-control" name="" id="" wire:model='ref'>
                        </div>
                        <div class="form-group">
                        <label for="" class="label text-bold">Rédiger votre article <span class="text-danger">*</span></label><br>
                        <textarea wire:ignore wire:model='content' name='content' id='summernote' cols='30' rows='10' style='display: hidden;'></textarea>
                        @error('content') <span class="error">{{ $message }}</span> @enderror
                        </div><br>
                        <label for="file" class="label text-bold mb-2">Joindre une image ou une vidéo </label><br>
                        <div class="form-group">
                            <input type="file" wire:model="file" id="file" name="file" >
                            @error('file') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group row mt-5">
                            <div class="col-md-2"></div>
                            <button class="col-md-2 mr-4 btn btn-primary" type="submit">Modifier</button>
                            <button class="col-md-2 btn btn-danger" type="reset" wire:click='closeForm'>Annuler</button>
                        </div>
                    </form>
                </div>
        </div>
    @endif
    @push('styles')
        <link rel="stylesheet" href="{{asset('admin/vendor/summernote/dist/summernote.css')}}">
    @endpush
    @push('scripts')
        <script src="{{asset('admin/vendor/summernote/dist/summernote.js')}}"></script>
        <script>
            $(document).ready(function(){
                Livewire.on('itemAdded', function () {
                $('#summernote').summernote({
                    height: 200,
                    toolbar: [
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['font', ['strikethrough',]],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph', 'table']],
                        ['insert', ['link']],
                        ['view', ['fullscreen', 'codeview']]
                    ],
                    callbacks: {
                        onChange: function(contents, $editable) {
                            @this.set('content', contents);
                        }
                    }
                });
                    $('#myForm').show();
                    $('#list').hide();
                });
                
            });


            
        </script>
        @endpush
</div>
