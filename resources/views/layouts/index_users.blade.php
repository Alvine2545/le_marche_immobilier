<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from themicon.co/theme/dasha/v1.5/html5jquery/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 02:51:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Dashboard - Le marché de l'immobilier</title>
    <!-- Vendor styles-->
    <!-- Animate.CSS-->
    <link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.css')}}">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{asset('admin/vendor/bootstrap/dist/css/bootstrap.css')}}">
    <!-- Ionicons-->
    <link rel="stylesheet" href="{{asset('admin/vendor/ionicons/dist/css/ionicons.css')}}">
    <!-- Material Colors-->
    <link rel="stylesheet" href="{{asset('admin/vendor/material-colors/dist/colors.css')}}">
    <!-- Application styles-->
    <link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
    <script src="{{asset('admin/ga.js')}}"></script>
    <link rel="shortcut icon" href="images/Logo-1.png">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 

    {{-- Header css --}}
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    {{-- <link rel="stylesheet" href="css/bootstrap.css"> --}}
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Flexslider  -->
    {{-- <link rel="stylesheet" href="css/flexslider.css"> --}}
    <!-- Magnific Popup -->
    {{-- <link rel="stylesheet" href="css/magnific-popup.css"> --}}
    <!-- Date Picker -->
    <!-- CS Select -->
    {{-- <link rel="stylesheet" href="css/cs-select.css"> --}}
    {{-- <link rel="stylesheet" href="css/cs-skin-border.css"> --}}
    <link rel="stylesheet" href="css/style.css">
    {{-- <script src="js/modernizr-2.6.2.min.js"></script> --}}
    <link rel="stylesheet" href="css/lestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
  .sidebar-nav>ul>li>div, .sidebar-nav>ul>li>a, .sidebar-subnav>li>a {
    color: #ffff!important;
    font-size: 18px;
    font-weight: bold;
  }
  .alert-notif{
    background-color: rgba(242, 242, 245, 0.7);
    border-radius: 10px;
}
.color-title{
  color: #1F9908;
    font-weight: bold;
}
.img-responsive {
  display: block;
  max-width: 100%;
  height: auto;
}
  
</style>

  </head>

  <body class="theme-default">
    <div class="layout-container">
      <!-- top navbar-->
      <header class="header-container">
        <nav>
          <ul class="d-lg-none">
            <li>
              <a class="sidebar-toggler menu-link menu-link-close" href="#"><span><em></em></span></a>
            </li>
          </ul>
          <ul class="d-none d-sm-block">
            <li>
              <a class="covermode-toggler menu-link menu-link-close" href="#"><span><em></em></span></a>
            </li>
          </ul>
          <h2 class="header-title"><img class="icon-home img-responsive" style="height: 14vh;" src="images/Logo-1.png" alt=""
            id="navLogo"></h2>
          <ul class="float-right sf-menu" id="fh5co-primary-menu">
            <li class="active" style=""><a href="{{url('/')}}" style="">Acceuil</a></li>
            <li style="">
              <a href="" class="fh5co-sub-ddown">Services</a>
              <ul class="fh5co-sub-menu">
                <li class=""><a href="{{url('services/0')}}">Achetez</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a href="{{url('services/2')}}">Vendez</a></li>
                <li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a href="{{url('services/1')}}">Mettez en location</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a href="{{url('services/3')}}">Louez</a></li>
              </ul>
            </li>
            <li style=""><a href="{{url('/offres')}}">Offres des partenaires</a></li>
            <li style=""><a href="{{route('contact')}}">Contact</a></li>
            <li class="dropdown">
              <a href="" class="dropdown-toggle has-badge" data-toggle="dropdown" data-target="#exampleModal">
                <i class="fa-solid fa-circle-user" style="font-size: 3em; color: #EFCF4F ;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                <a class="dropdown-item" href="{{route('logout')}}"><em class="ion-ios-log-out icon-lg text-primary"></em>Déconnecter </a>
              </div>
            </li>
            {{-- <li>
              <a id="header-search" href="#"><em class="ion-ios-search"></em></a>
            </li>
            <li>
              <a id="header-settings" href="#"><em class="ion-ios-more"></em></a>
            </li> --}}
          </ul>
        </nav>
      </header>

      <!-- sidebar-->
      <aside class="sidebar-container" style="height: 100%; background-image: url('../../../../admin/img/fond_1.png'); background-size: cover; background-repeat: no-repeat;">
        <div class="brand-header">
          <div class="float-left pt-4 text-muted sidebar-close"><em class="ion-ios-arrow-round-back icon-lg"></em></div>
          <a class="brand-header-logo" href="#">
            <!-- Logo Imageimg(src="img/logo.png", alt="logo")
            --><span class="brand-header-logo-text">{{Auth::user()->titre}}</span></a>
        </div>
        <div class="sidebar-content">
          <div class="sidebar-toolbar">
            <div class="sidebar-toolbar-background"></div>
            <div class="sidebar-toolbar-content text-center">
              <a href="#">
                <img class="rounded-circle thumb64" src="{{asset('admin/img/user/01.jpg')}}" alt="Profile">
              </a>
              <div class="mt-3">
                <div class="lead">{{Auth::user()->name}} {{Auth::user()->prenoms}} {{Auth::user()->nameAgence}}</div>
                {{-- <div class="text-thin">California, CA</div> --}}
              </div>
            </div>
          </div>
          <nav class="sidebar-nav">
            <hr style="border: solid white 3px; margin-left: 10px; margin-right: 10px;">
            <ul>
              <li>
                <div class="sidebar-nav-heading">MENU</div>
              </li>
              <li class="active">
                <a href="{{url('home')}}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-home" style="color: white;"></em></span><span>Tableau de bord</span></a>
              </li>
              <li>
                <a href="{{url('profil-setting')}}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-person" style="color: white;"></em></span><span>Profil</span></a>
              </li>
              <li class="active">
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward" ></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-options" style="color: white;"></em></span><span>Mes offres</span></a>
                <ul class="sidebar-subnav" id="elements">
                  <li>
                    <a href="{{url('achat')}}"><span class="float-right nav-label"></span><span>Achats</span></a>
                  </li>
                  <li>
                    <a href="{{url('location')}}"><span class="float-right nav-label"></span><span>Location</span></a>
                  </li>
                  
                </ul>
              </li>
              <li>
                <a href="{{url('notification')}}"><span class="float-right nav-label"><span class="badge-rounded badge-primary">!</span></span><span class="nav-icon"><em class="ion-ios-notifications" style="color: white;"></em></span><span>Notifications</span></a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>
      {{-- <div class="sidebar-layout-obfuscator"></div> --}}
      <!-- Main section-->
      <main class="main-container container" style="background-color: #ffffff;">
        
        <!-- Page content-->
        <section class="section-container" style="margin-left: 30px; margin-right: 30px;">
          @yield('content')
        </section>
        <!-- Page footer-->
        {{-- <footer class="footer-container">
          <div class="d-flex justify-content-between fh">
            <a class="footer-icon" href="#"><em class="ion-ios-chatboxes"></em><span>Messages</span></a>
            <a class="footer-icon" href="#"><em class="ion-ios-albums"></em><span>Widgets</span></a>
            <a class="footer-icon footer-icon-lg" href="#"><em class="ion-ios-home"></em><span>Dashboard</span></a>
            <a class="footer-icon" href="#"><em class="ion-ios-map"></em><span>Maps</span></a>
            <a class="footer-icon" href="#"><em class="ion-ios-pie"></em><span>Charts</span></a>
          </div>
        </footer> --}}
      </main>
    </div>
    <!-- Search template-->
    <div class="modal modal-top fade modal-search" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <div class="modal-search-form">
              <form action="#">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button class="btn btn-flat" type="button" data-dismiss="modal"><em class="ion-md-arrow-back icon-lg text-muted"></em></button>
                  </div>
                  <input class="form-control header-input-search" type="text" placeholder="Search..">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Search template-->
    <!-- Settings template-->
    <div class="modal-settings modal modal-right fade" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="mt-0 modal-title"><span>Settings</span></h4>
            <div class="float-right clickable" data-dismiss="modal"><em class="ion-md-close text-soft"></em></div>
          </div>
          <div class="modal-body">
            <p>Dark sidebar</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-default">
                  <input type="radio" checked name="setting-theme" value="theme-default"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-2">
                  <input type="radio" name="setting-theme" value="theme-2"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-3">
                  <input type="radio" name="setting-theme" value="theme-3"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-4">
                  <input type="radio" name="setting-theme" value="theme-4"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-5">
                  <input type="radio" name="setting-theme" value="theme-5"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-6">
                  <input type="radio" name="setting-theme" value="theme-6"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>White sidebar</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-default">
                  <input type="radio" name="setting-theme" value="theme-default-w"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-2">
                  <input type="radio" name="setting-theme" value="theme-2-w"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-3">
                  <input type="radio" name="setting-theme" value="theme-3-w"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-4">
                  <input type="radio" name="setting-theme" value="theme-4-w"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-5">
                  <input type="radio" name="setting-theme" value="theme-5-w"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-6">
                  <input type="radio" name="setting-theme" value="theme-6-w"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>Sidebar Gradients</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-gradient-1">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-1"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-2">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-2"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-3">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-3"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-4">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-4"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-5">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-5"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-6">
                  <input type="radio" name="setting-theme" value="theme-gradient-sidebar-6"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>Header Gradients</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-gradient-1">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-1"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-2">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-2"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-3">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-3"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-4">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-4"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-5">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-5"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-gradient-6">
                  <input type="radio" name="setting-theme" value="theme-gradient-header-6"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <p>Dark content</p>
            <div class="d-flex flex-wrap mb-3">
              <div class="setting-color">
                <label class="preview-theme-dark">
                  <input type="radio" name="setting-theme" value="theme-dark"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
              <div class="setting-color">
                <label class="preview-theme-dark-2">
                  <input type="radio" name="setting-theme" value="theme-dark-2"><span class="ion-md-checkmark"></span><span class="square24 b"></span>
                </label>
              </div>
            </div>
            <hr>
            <div class="custom-control custom-checkbox mb-3">
              <input class="custom-control-input" id="sidebar-cover" type="checkbox">
              <label class="custom-control-label" for="sidebar-cover">Sidebar Cover</label>
            </div>
            <div class="custom-control custom-checkbox mb-3">
              <input class="custom-control-input" id="sidebar-showtoolbar" type="checkbox" checked>
              <label class="custom-control-label" for="sidebar-showtoolbar">Sidebar profile</label>
            </div>
            <div class="custom-control custom-checkbox mb-3">
              <input class="custom-control-input" id="fixed-footer" type="checkbox">
              <label class="custom-control-label" for="fixed-footer">Fixed Footer</label>
            </div>
            <hr>
            <button class="btn btn-secondary" type="button" data-toggle-fullscreen="">Toggle fullscreen</button>
            <hr>
            <p>Change language</p>
            <!-- START Language list-->
            <select class="language-select custom-select form-control">
              <option value="en" selected="">English</option>
              <option value="es">Spanish</option>
              <option value="fr">French</option>
            </select>
            <!-- END Language list-->
            <div class="mt-3" data-localize="translate.EXAMPLE">This is an example text using English as selected language.</div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Settings template-->
    <!-- Modernizr-->
    <script src="{{asset('admin/vendor/modernizr/modernizr.custom.js')}}"></script>
    <!-- PaceJS-->
    <script src="{{asset('admin/vendor/pace-progress/pace.min.js')}}"></script>
    <!-- jQuery-->
    <script src="{{asset('admin/vendor/jquery/dist/jquery.js')}}"></script>
    <!-- Bootstrap-->
    <script src="{{asset('admin/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/dist/js/bootstrap.js')}}"></script>
    <!-- Material Colors-->
    <script src="{{asset('admin/vendor/material-colors/dist/colors.js')}}"></script>
    <!-- Screenfull-->
    <script src="{{asset('admin/vendor/screenfull/dist/screenfull.js')}}"></script>
    <!-- jQuery Localize-->
    <script src="{{asset('admin/vendor/jquery-localize/dist/jquery.localize.js')}}"></script>
    <!-- Google Maps API-->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBNs42Rt_CyxAqdbIBK0a5Ut83QiauESPA"></script>
    <!-- Google Maps-->
    <script src="vendor/gmaps/gmaps.js"></script>
    <!-- Flot charts-->
    <script src="{{asset('admin/vendor/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('admin/vendor/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery.flot.spline/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js')}}"></script>
    <script src="{{asset('admin/vendor/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('admin/vendor/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('admin/vendor/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('admin/vendor/sidebysideimproved/jquery.flot.orderBars.js')}}"></script>
    <!-- Sparkline-->
    <script src="{{asset('admin/vendor/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <!-- jQuery Knob charts-->
    <script src="{{asset('admin/vendor/jquery-knob/js/jquery.knob.js')}}"></script>
    <!-- App script-->
    <script src="{{asset('admin/js/app.js')}}"></script>
    <script>
        window.addEventListener('alert', event => { 
             toastr[event.detail.type](event.detail.message, 
             event.detail.title ?? ''), toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                }
            });
    </script>
  </body>

{{-- js  --}}
<!-- jQuery -->
    {{-- <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/sticky.js"></script>
    <!-- Superfish -->
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.js"></script>
    <!-- Flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Date Picker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <!-- CS Select -->
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>

    <!-- Main JS -->
    <script src="js/main.js"></script>   --}}
<!-- Mirrored from themicon.co/theme/dasha/v1.5/html5jquery/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 02:55:42 GMT -->
</html>