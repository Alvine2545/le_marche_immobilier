<div class="row">
  @if(session()->has('add'))
    <div class="col-xl-12 alert alert-success">
      {{ session('add') }}
    </div>
    @endif
    <div class="col-xl-12" wire:ignore>
        <div class="welcome">
                  {{-- <div class="float-right mt-1 mr-1 d-none d-sm-block">
                    <a class="text-muted" href="#"><em class="ion-md-apps icon-lg"></em></a>
                  </div> --}}
            <h1>Hello, {{Auth::user()->name}}</h1>
            <p>Bienvenue dans l'espace administrateur du marché de l'immobilier.</p>
        </div>
        <div class="my-4">
            <button class="btn btn-oval btn-primary btn-gradient mr-2">14 Messages</button>
            {{-- <button class="btn btn-secondary btn-oval" type="button"><em class="ion-ios-redo text-success mr-2 icon-lg"></em><span>View requests</span></button> --}}
        </div>
        <div class="h-scroll">
            <div class="row">
                <div class="col-8 col-md-4">
                    <div class="cardbox">
                        <div class="cardbox-body">
                            <div class="clearfix mb-2">
                                <div class="float-right">
                                    <small><em class="ml-2 ion-md-arrow-dropup"></em></small>
                                </div>
                                <div class="float-left">
                                    <small>Acteurs immobilier</small>
                                </div>
                            </div>
                            <div class="h3" data-counter="{{count($users)}}">0</div>
                            <div class="text-center mt-3">
                                <div class="sparkline" id="sparkline1" data-bar-color="#42a5f5"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-4">
                    <div class="cardbox">
                        <div class="cardbox-body">
                            <div class="clearfix mb-2">
                            <div class="float-right">
                                <small><em class="ml-2 ion-md-arrow-dropdown"></em></small>
                            </div>
                            <div class="float-left">
                                <small>Partenaires Officiels</small>
                            </div>
                            </div>
                            <div class="h3" data-counter="{{{count($partners)}}}">0</div>
                            <div class="text-center mt-3">
                            <div class="sparkline" id="sparkline2" data-bar-color="#42a5f5"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-4">
                    <div class="cardbox">
                        <div class="cardbox-body">
                            <div class="clearfix mb-2">
                            <div class="float-right">
                                <small><em class="ml-2 ion-md-arrow-dropup"></em></small>
                            </div>
                            <div class="float-left">
                                <small>Administrateurs</small>
                            </div>
                            </div>
                            <div class="h3" data-counter="{{count($admins)}}">0</div>
                            <div class="text-center mt-3">
                            <div class="sparkline" id="sparkline3" data-bar-color="#42a5f5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
    <div class="col-lg-12">

        <div class="card shadow mb-4">
            <!-- Card Header - Accordion -->
            <a href="#basicInfo" class="d-block card-header py-3" style="text-decoration: none;" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="basicInfo">
                <h6 class="m-0 font-weight-bold text-primary">Informations basiques du sponsor officiel <span class="float-right ion-md-arrow-dropdown"></span></h6>
                
            </a>
            <!-- Card Content - Collapse -->
            <div class="collapse show" id="basicInfo" style="">
                <div class="card-body">
                    <form action="" method="post" wire:submit.prevent='store' enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="">Nom du sponsor</label>
                                  <input required type="hidden" wire:model='identifiant' >                                  
                                  <input required type="text" name="nom" wire:ignore wire:model='nom' value="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                                                  </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                  <label for="">Logo</label> <br>
                                  <input type="file" wire:model='logoSociete' id="" placeholder="" aria-describedby="helpId" required>
                                </div>
                                <img src="../storage/{{$logoSociete}}" alt="logo" class="img-fluid" width="250px">
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                  <label for="">Quelques détails sur le sponsor</label> <br>
                                  <textarea class="form-control" name="description" wire:model='description' id="" cols="80" rows="5"></textarea>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-rounded-md px-3">Sauvegarder</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
                {{-- <div class="cardbox">
                  <!-- START table-responsive-->
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Assignments</th>
                          <th class="text-center">Lead</th>
                          <th class="text-center">Evolution</th>
                          <th class="text-center">No. Tasks</th>
                          <th class="text-right">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p class="m-0">Hendrerit.
                              <br>
                              <small class="text-thin">Sed porta fermentum felis in molestie.</small>
                            </p>
                          </td>
                          <td class="va-middle text-center">
                            <img class="wd-xxs2 rounded-circle shadow-z2" src="img/user/02.jpg" alt="Team lead" data-toggle="tooltip" data-title="Marion Woods">
                          </td>
                          <td class="text-right va-middle text-center"><em class="ion-md-trending-up text-success"></em></td>
                          <td class="va-middle text-center">25/50</td>
                          <td class="va-middle text-right">
                            <div class="badge badge-info">in progress</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p class="m-0">Vestibulum mauris
                              <br>
                              <small class="text-thin">Sed porta fermentum felis in molestie.</small>
                            </p>
                          </td>
                          <td class="va-middle text-center">
                            <img class="wd-xxs2 rounded-circle shadow-z2" src="img/user/03.jpg" alt="Team lead" data-toggle="tooltip" data-title="Camila Martinez">
                          </td>
                          <td class="text-right va-middle text-center"><em class="ion-md-trending-down text-warning"></em></td>
                          <td class="va-middle text-center">7/50</td>
                          <td class="va-middle text-right">
                            <div class="badge badge-success">completed</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p class="m-0">Common Pictures
                              <br>
                              <small class="text-thin">Sed porta fermentum felis in molestie.</small>
                            </p>
                          </td>
                          <td class="va-middle text-center">
                            <img class="wd-xxs2 rounded-circle shadow-z2" src="img/user/04.jpg" alt="Team lead" data-toggle="tooltip" data-title="Carrie Romero">
                          </td>
                          <td class="text-right va-middle text-center"><em class="ion-md-trending-up text-success"></em></td>
                          <td class="va-middle text-center">65/100</td>
                          <td class="va-middle text-right">
                            <div class="badge badge-info">in progress</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p class="m-0">Workaround
                              <br>
                              <small class="text-thin">Sed porta fermentum felis in molestie.</small>
                            </p>
                          </td>
                          <td class="va-middle text-center">
                            <img class="wd-xxs2 rounded-circle shadow-z2" src="img/user/05.jpg" alt="Team lead" data-toggle="tooltip" data-title="Gregory Payne">
                          </td>
                          <td class="text-right va-middle text-center"><em class="ion-md-trending-down text-warning"></em></td>
                          <td class="va-middle text-center">29/50</td>
                          <td class="va-middle text-right">
                            <div class="badge badge-danger">canceled</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <p class="m-0">Workaround
                              <br>
                              <small class="text-thin">Sed porta fermentum felis in molestie.</small>
                            </p>
                          </td>
                          <td class="va-middle text-center">
                            <img class="wd-xxs2 rounded-circle shadow-z2" src="img/user/07.jpg" alt="Team lead" data-toggle="tooltip" data-title="Gregory Payne">
                          </td>
                          <td class="text-right va-middle text-center"><em class="ion-md-trending-down text-warning"></em></td>
                          <td class="va-middle text-center">29/50</td>
                          <td class="va-middle text-right">
                            <div class="badge badge-info">in progress</div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- END table-responsive-->
                </div> --}}
    </div>
</div>