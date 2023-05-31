@extends('layouts.index_users')
@section('content')
    <div class="container-overlap bg-gradient-info text-center">
            <div class="mb-3"><img class="wd-sm rounded-circle img-thumbnail" src="{{asset('admin/img/user/03.jpg')}}" alt="user"></div>
            <div class="text-white">
              <div class="h3">Jane Frazier</div><small>Aenean condimentum augue sapien.</small>
            </div>
          </div>
          <div class="container container-md mb-3">
            <form class="cardbox">
              <h5 class="cardbox-heading pb-0">Informations Personnelles</h5>
              <div class="cardbox-body">
                <table class="table table-striped mb-0">
                  <tbody>
                    <tr>
                      <td><em class="ion-ios-document-text icon-fw mr-3"></em>Titre</td>
                      <td>Research &amp; development</td>
                    </tr>
                    <tr>
                      <td><em class="ion-ios-egg icon-fw mr-3"></em>Birthday</td>
                      <td><span class="is-editable text-inherit">10/11/2000</span></td>
                    </tr>
                    <tr>
                      <td><em class="ion-ios-body icon-fw mr-3"></em>Membre depuis</td>
                      <td><span class="is-editable text-inherit">05/11/2015</span></td>
                    </tr>
                    <tr>
                      <td><em class="ion-ios-man icon-fw mr-3"></em>Genre</td>
                      <td><a class="text-inherit" id="gender" href="#"></a></td>
                    </tr>
                    <tr>
                      <td><em class="ion-ios-home icon-fw mr-3"></em>Address</td>
                      <td><span class="is-editable text-inherit">Some street, 123</span></td>
                    </tr>
                    <tr>
                      <td><em class="ion-ios-mail icon-fw mr-3"></em>Email</td>
                      <td><span class="is-editable text-inherit"><a href="#">user@mail.com</a></span></td>
                    </tr>
                    <tr>
                      <td><em class="ion-ios-call icon-fw mr-3"></em>Contact téléphonique</td>
                      <td><span class="is-editable text-inherit">13-123-46578</span></td>
                    </tr>
                  </tbody>
                </table>
                <button class="btn btn-info btn-lg float-right mb-3">Modifier mon profil</button>
              </div>
            </form>
            <div class="cardbox">
              <h5 class="cardbox-heading">Activité du compte</h5>
              <div class="cardbox-body pb-0">
                <p class="float-left mr-3"><em class="p-1 rounded-circle bg-info d-inline-block"></em></p>
                <div class="oh">
                  <p><strong class="mr-2">Nombre d'offre de location de biens posté</strong><span class="mr-2">a new issue</span><a href="#">#5478</a></p>
                  <div class="clearfix">
                    <div class="float-left text-muted"><em class="ion-ios-timer mr-2"></em><span>an hour ago</span></div>
                  </div>
                </div>
              </div>
              <div class="cardbox-body pb-0">
                <p class="float-left mr-3"><em class="p-1 rounded-circle bg-danger d-inline-block"></em></p>
                <div class="oh">
                  <p><strong class="mr-2">Nombre d'offre d'achat de biens posté</strong><span class="mr-2"> on the project</span><a href="#">Material</a></p>
                  <p class="bl pl-3"><i>That's awesome!</i></p>
                  <div class="clearfix">
                    <div class="float-left text-muted"><em class="ion-ios-timer mr-2"></em><span>2 hours ago</span></div>
                  </div>
                </div>
              </div>
              <div class="cardbox-body pb-0">
                <p class="float-left mr-3"><em class="p-1 rounded-circle bg-success d-inline-block"></em></p>
                <div class="oh">
                  <p><strong class="mr-2">Nombre d'offre dejà traitée</strong><span> all tasks asigned this week</span></p>
                  <div class="clearfix">
                    <div class="float-left text-muted"><em class="ion-ios-timer mr-2"></em><span>3 hours ago</span></div>
                  </div>
                </div>
              </div>
              {{-- <div class="cardbox-body pb-0">
                <p class="float-left mr-3"><em class="p-1 rounded-circle bg-info d-inline-block"></em></p>
                <div class="oh">
                  <p><strong class="mr-2">Published</strong><span class="mr-2"> new photos on the album</span><a href="#">WorldTrip</a></p>
                  <p><a href="#"><img class="mr-2 thumb48" src="img/pic4.jpg" alt="Pic"></a><a href="#"><img class="mr-2 thumb48" src="img/pic5.jpg" alt="Pic"></a><a href="#"><img class="mr-2 thumb48" src="img/pic6.jpg" alt="Pic"></a></p>
                  <div class="clearfix">
                    <div class="float-left text-muted"><em class="ion-ios-timer mr-2"></em><span>4 hours ago</span></div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="cardbox-body">
                <div class="clearfix">
                  <p class="float-left mr-3"><em class="p-1 rounded-circle bg-primary d-inline-block"></em></p>
                  <div class="oh">
                    <p><strong class="mr-2">Following</strong><span class="mr-2">Jane Kuhn</span></p>
                    <p><span class="image-list"><a href="#"><img class="rounded-circle thumb32" src="img/user/03.jpg" alt="User"></a><a href="#"><img class="rounded-circle thumb32" src="img/user/04.jpg" alt="User"></a><a href="#"><img class="rounded-circle thumb32" src="img/user/05.jpg" alt="User"></a><a href="#"><img class="rounded-circle thumb32" src="img/user/06.jpg" alt="User"></a><a href="#"><img class="rounded-circle thumb32" src="img/user/07.jpg" alt="User"></a><strong><a class="ml-2 link-unstyled" href="#">+200</a></strong></span></p>
                    <div class="clearfix">
                      <div class="float-left text-muted"><em class="ion-ios-timer mr-2"></em><span>yesterday</span></div>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
    </div>
@endsection