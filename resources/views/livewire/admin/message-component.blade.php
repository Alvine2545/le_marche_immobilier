<div>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Dashboard - Nos messages</h1> 
    </div>
    <div class="container row">
              <div class="col-md-1">
                {{-- <div class="cardbox">
                  <div class="cardbox-body text-center">
                    <div class="mb-3"><img class="wd-sm rounded-circle img-thumbnail" src="img/user/04.jpg" alt="user"></div>
                    <div class="h3">Eleanor Harper</div>
                    <p>eleanor.harper@myemail.com</p>
                  </div>
                  <div class="list-group bb"><a class="list-group-item d-flex justify-content-between align-items-center active" href="#"><em class="ion-ios-home mr-4"></em>Inbox<span class="ml-auto badge badge-pill">35</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="#"><em class="ion-ios-trash mr-4"></em>Trash<span class="ml-auto badge badge-pill">0</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="#"><em class="ion-ios-redo mr-4"></em>Sent<span class="ml-auto badge badge-pill text-muted">2</span></a><a class="list-group-item d-flex justify-content-between align-items-center" href="#"><em class="ion-ios-help-buoy mr-4"></em>Spam<span class="ml-auto badge badge-pill text-muted">10</span></a></div>
                  <div class="cardbox-body">
                    <button class="btn btn-success btn-block" id="compose" type="button"><em class="ion-md-create mr-2"></em>New message</button>
                  </div>
                </div> --}}
              </div>
              <div class="col-md-10">
                <p class="px">Aujourd'hui</p>
                <div class="cardbox">
                  <table class="table table-hover table-fixed va-middle">
                    <tbody>
                        @foreach ($messages as $message)
                            <tr class="msg-display clickable">
                                <td class="wd-xxs">
                                <div class="initial32 bg-blue-500"> 
                                    @php
                                        echo(Str::substr($message->nom_prenom, 0, 1));
                                    @endphp 
                                </div>
                                </td>
                                <td class="text-ellipsis wd-sm">{{$message->nom_prenom}}</td>
                                <td class="text-ellipsis">{{$message->contenu}}</td>
                                <td class="wd-xxs">
                                <!-- START dropdown-->
                                <div class="float-right dropdown">
                                    <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-md-more"></em></button>
                                    <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"><a class="dropdown-item" href="mailto:{{$message->email}}"><em class="ion-ios-undo icon-fw"></em>Répondre</a><a data-toggle="modal" data-target=".deleteModal" class="dropdown-item" href="#" ><em class="ion-ios-trash icon-fw"></em>Supprimer</a></div>
                                </div>
                                <!-- END dropdown-->
                                </td>
                            </tr>

                            {{-- Modal suppression --}}

                            <div class="modal modal-auto-size fade deleteModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content ">
                                        <div class="modal-body">
                                            <h2>Confirmation de suppression</h2>
                                            <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
                                            <button class="btn btn-danger tn-flat btn-flat-icon" wire:click='delete({{$message->id}})'>Confirmer</button>
                                            <button class="btn btn-info tn-flat btn-flat-icon" data-dismiss="modal">Annuler</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Modal message --}}
                            <div class="modal modal-right modal-auto-size fade modal-message" tabindex="-1" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <div class="media m-0 py fw">
                                        <div class="d-flex mr-3"><a href="javascript:"><img class="rounded-circle thumb64" src="img/user/04.jpg" alt="User"></a></div>
                                        <div class="media-body align-self-center">
                                            <div class="h5">{{$message->nom_prenom}}</div><span class="text-muted">{{$message->email}}</span><br> <span class="text-muted">{{$message->telephone}}</span>
                                        </div>
                                        <div class="align-items-end align-self-center">
                                            <div class="clickable" data-dismiss="modal"><sup><em class="ion-md-close text-muted icon-2x"></em></sup></div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <!-- START dropdown-->
                                        <div class="float-right dropdown">
                                        <button class="btn btn-secondary btn-flat btn-flat-icon" type="button" data-toggle="dropdown"><em class="ion-md-more"></em></button>
                                        <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu"><a class="dropdown-item" href="#"><em class="ion-ios-archive icon-fw"></em>Archiver</a><a data-toggle="modal" data-target=".deleteModal" class="dropdown-item" href="#" data-dismiss="modal"><em class="ion-ios-trash icon-fw"></em>Supprimer</a></div>
                                        </div>
                                        <!-- END dropdown-->
                                        <p class="text-muted">{{$message->created_at}}</p>
                                        {{-- <h4 class="mt-3">Nam vel tristique dolor.</h4> --}}
                                        <div class="reader-block">
                                        <p>{{$message->contenu}}</p>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="d-flex flex-column fw">
                                        {{-- <div class="p-2">Reply</div> --}}
                                        <div class="p-2">
                                            <div class="media m-0 py">
                                            {{-- <div class="d-flex mr-3"><a href="#"><img class="rounded-circle thumb32" src="img/user/01.jpg" alt="User"></a></div>
                                            <div class="media-body">
                                                <form action="#">
                                                <div class="form-group">
                                                    <textarea class="form-control" rows="3" aria-multiline="true" tabindex="0" aria-invalid="false" placeholder="Write here..."></textarea>
                                                </div>
                                                </form>
                                            </div>
                                            </div> --}}
                                            <a href="mailto:{{$message->email}}" class="btn btn-success" type="button" data-dismiss="modal">Répondre par mail</a>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                
            </div>
    </div>
</div>