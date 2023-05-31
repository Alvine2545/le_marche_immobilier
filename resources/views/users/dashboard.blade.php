@extends('layouts.index_users')
@section('content')
    <div class="container-fluid">
            <h1 class="text-bold">Tableau de bord</h1>
            <hr style="border: solid #EFCF4F 2px; ">
            <div class="row">
              <div class="alert alert-notif alert-dismissible fade show" role="alert">
                <h4 class="color-title">Notification</h4>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus architecto, eveniet, aspernatur blanditiis non dolor.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="color: rgb(17, 240, 55);;">&times;</span>
                </button>
              </div>
            </div>
            <div class="row">
              <div class="alert alert-notif alert-dismissible fade show" role="alert">
                <h4 class="color-title">Notification</h4>
               <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus architecto, eveniet, aspernatur blanditiis non dolor.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true" style="color: rgb(17, 240, 55);">&times;</span>
                </button>
              </div>
            </div>
            <div class=" row animate-box " style="display: flex; justify-content: center; align-items: center;" >
              <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9 div-custom service-custom" style="margin-right: 0.5em; margin-bottom: 2em;">
                <div class=" " style="display:block;" >
                  <div class="single-services ">
                    <img src="images/logo/20945141.jpg" class="img-responsive float-end" alt="">
                  </div>
                  <div class="single-services">
                    <div class="single-services-desc">
                      <a href="{{url('/achat')}}" class="color-title text-center text-bold" style="font-size: 20px; margin-top: 10px !important;">Consulter les Offres d'Achat</a>
                    </div>
                  </div>
                </div>
              </div>         
              <div class="col-lg-3 col-md-3 col-sm-9 col-xs-9 div-custom service-custom" style="margin-right: 0.5em; margin-bottom: 2em;">
                <div class=" " style="display:block;" >
                  <div class="single-services ">
                    <img src="images/logo/20945141.jpg" class="img-responsive float-end" alt="">
                  </div>
                  <div class="single-services">
                    <div class="single-services-desc">
                      <a href="{{url('/location')}}" class="color-title text-center text-bold" style="font-size: 20px; margin-top: 10% !important;">Consulter les Offres de location</a>
                    </div>
                  </div>
                </div>
              </div>    
            </div>
          </div>
@endsection