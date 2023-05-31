<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from themicon.co/theme/dasha/v1.5/html5jquery/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 02:51:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin Template">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Admin - Le marché de l'immobilier</title>
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
    <!-- FooTable-->
    <link rel="stylesheet" href="{{asset('admin/vendor/footable/css/footable.core.css')}}">
     <!-- Summernote-->
    <link rel="stylesheet" href="{{asset('admin/vendor/summernote/dist/summernote.css')}}">
    <script src="{{asset('admin/ga.js')}}"></script>
    <link rel="shortcut icon" href="{{asset('images/Logo-1.png')}}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> 

    @stack('styles')
    @livewireStyles
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
          <h2 class="header-title">Tableau de bord</h2>
          <ul class="float-right">
            {{-- <li class="dropdown">
              <a class="dropdown-toggle has-badge" href="#" data-toggle="dropdown">
                <img class="header-user-image" src="{{asset('admin/img/user/01.jpg')}}" alt="header-user-image">
                <sup class="badge bg-danger">3</sup>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-scale">
                <h6 class="dropdown-header">User menu</h6>
                <a class="dropdown-item" href="#"><span class="float-right badge badge-primary">4</span><em class="ion-ios-mail icon-lg text-primary"></em>Messages</a>
                <a class="dropdown-item" href="#"><em class="ion-ios-cog icon-lg text-primary"></em>Paramètre</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="{{route('admin.logout')}}"><em class="ion-ios-log-out icon-lg text-primary"></em>Déconnecter</a>
              </div>
            </li>--}}
            <li>
              <a id="header-search" href="#"><em class="ion-ios-search"></em></a>
            </li>
            <li>
              <a id="header-settings" href="#"><em class="ion-ios-more"></em></a>
            </li> 
          </ul>
        </nav>
      </header>
      <!-- sidebar-->
      <aside class="sidebar-container">
        <div class="brand-header">
          <div class="float-left pt-4 text-muted sidebar-close"><em class="ion-ios-arrow-round-back icon-lg"></em></div>
          <a class="brand-header-logo" href="#">
            <!-- Logo Imageimg(src="img/logo.png", alt="logo")
            --><span class="brand-header-logo-text">Dasha</span></a>
        </div>
        <div class="sidebar-content">
          <div class="sidebar-toolbar">
            <div class="sidebar-toolbar-background"></div>
            <div class="sidebar-toolbar-content text-center">
              <a href="#">
                <img class="rounded-circle thumb64" src="img/user/01.jpg" alt="Profile">
              </a>
              <div class="mt-3">
                <div class="lead">{{Auth::user()->name}}</div>
                <div class="text-thin">Administrateur</div>
              </div>
            </div>
          </div>
          <nav class="sidebar-nav">
            <ul>
              <li>
                <div class="sidebar-nav-heading">MENU</div>
              </li>
              <li>
                <a href="{{route('admin.home')}}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-speedometer"></em></span><span>Tableau de bord</span></a>
              </li>
              <li>
                <div class="sidebar-nav-heading">Interfaces</div>
              </li>
              <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-options"></em></span><span>Mes pages</span></a>
                <ul class="sidebar-subnav" id="elements">
                  <li>
                    <a href="{{route('admin.actualites')}}"><span class="float-right nav-label"></span><span>Les actualités</span></a>
                  </li>
                  {{-- <li>
                    <a href=""><span class="float-right nav-label"></span><span>Les services</span></a>
                  </li> --}}
                  {{-- <li>
                    <a href=""><span class="float-right nav-label"></span><span>Les offres de partenaires</span></a>
                  </li> --}}
                </ul>
              </li>
              <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-cog"></em></span><span>Les biens</span></a>
                <ul class="sidebar-subnav">
                  <li>
                    <a href="{{route('admin.bien-immobiliers')}}"><span class="float-right nav-label"></span><span>Biens immobiliers</span></a>
                  </li>
                  <li>
                    <a href="{{route('admin.type')}}"><span class="float-right nav-label"></span><span>Types de bien</span></a>
                  </li>
                  <li>
                    <a href="{{route('admin.add-attr')}}"><span class="float-right nav-label"></span><span>Caractéristiques</span></a>
                  </li>
                  <li>
                    <a href="{{route('admin.affectation')}}"><span class="float-right nav-label"></span><span>Interessé</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <div class="sidebar-nav-heading">Les utilisateurs</div>
              </li>
              <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-options"></em></span><span>Nos partenaires</span></a>
                <ul class="sidebar-subnav" id="elements">
                  <li>
                    <a href="{{route('admin.partenaires')}}"><span class="float-right nav-label"></span><span>Liste</span></a>
                  </li>
                  <li>
                    <a href=""><span class="float-right nav-label"></span><span>Leurs offres</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="{{route('admin.immobiliers')}}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-mail"></em></span><span>Immobiliers</span></a>
              </li>
              <li>
                <a href="{{route('admin.show')}}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-mail"></em></span><span>Administrateurs</span></a>
              </li>
              <li>
                <a href="{{route('admin.messages')}}"><span class="float-right nav-label badge ">4</span><span class="nav-icon"><em class="ion-ios-mail"></em></span><span>Messages</span></a>
              </li>
              <li>
                <a href="{{route('admin.setting')}}"><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-cog icon-lg "></em></span><span>Paramètre</span></a>
              </li>
              <li>
                <a href=""><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-log-out"></em></span></a>
                <form id="mon-form" action="{{route('admin.logout')}}" method="POST" style="margin-left: 23%; margin-top: -15%!important;">
                  @csrf
                  <button class="text-white text-bold" style="display: inline; background-color: transparent; border: none; "><span>Déconnexion</span></button>
                </form>
              </li>
              {{-- <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-list"></em></span><span>Tables</span></a>
                <ul class="sidebar-subnav" id="tables">
                  <li>
                    <a href="tables.classic.html"><span class="float-right nav-label"></span><span>Classic</span></a>
                  </li>
                  <li>
                    <a href="tables.responsive.html"><span class="float-right nav-label"></span><span>Responsive</span></a>
                  </li>
                  <li>
                    <a href="datatable.html"><span class="float-right nav-label"></span><span>Datatable</span></a>
                  </li>
                  <li>
                    <a href="footable.html"><span class="float-right nav-label"></span><span>FooTable</span></a>
                  </li>
                  <li>
                    <a href="bootgrid.html"><span class="float-right nav-label"></span><span>Bootgrid</span></a>
                  </li>
                </ul>
              </li> --}}
              {{-- <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-pulse"></em></span><span>Charts</span></a>
                <ul class="sidebar-subnav">
                  <li>
                    <a href="flot.html"><span class="float-right nav-label"></span><span>Flot</span></a>
                  </li>
                  <li>
                    <a href="peity.html"><span class="float-right nav-label"></span><span>Peity</span></a>
                  </li>
                  <li>
                    <a href="rickshaw.html"><span class="float-right nav-label"></span><span>Rickshaw</span></a>
                  </li>
                  <li>
                    <a href="radial.html"><span class="float-right nav-label"></span><span>Radial</span></a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-pin"></em></span><span>Maps</span></a>
                <ul class="sidebar-subnav" id="maps">
                  <li>
                    <a href="google-map.html"><span class="float-right nav-label"></span><span>Google Maps</span></a>
                  </li>
                  <li>
                    <a href="datamaps.html"><span class="float-right nav-label"></span><span>Datamaps</span></a>
                  </li>
                  <li>
                    <a href="vector-map.html"><span class="float-right nav-label"></span><span>Vector Maps</span></a>
                  </li>
                </ul>
              </li> --}}
              {{-- <li>
                <div class="sidebar-nav-heading">MORE</div>
              </li>
              <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-person"></em></span><span>User</span></a>
                <ul class="sidebar-subnav" id="user">
                  <li>
                    <a href="signin.html"><span class="float-right nav-label"></span><span>Signin</span></a>
                  </li>
                  <li>
                    <a href="signup.html"><span class="float-right nav-label"></span><span>Signup</span></a>
                  </li>
                  <li>
                    <a href="signin2.html"><span class="float-right nav-label"></span><span>Signin v2</span></a>
                  </li>
                  <li>
                    <a href="signup2.html"><span class="float-right nav-label"></span><span>Signup v2</span></a>
                  </li>
                  <li>
                    <a href="recover.html"><span class="float-right nav-label"></span><span>Recover</span></a>
                  </li>
                  <li>
                    <a href="lock.html"><span class="float-right nav-label"></span><span>Lock</span></a>
                  </li>
                </ul>
              </li> --}}
              {{-- <li>
                <a href="#"><span class="float-right nav-caret"><em class="ion-ios-arrow-forward"></em></span><span class="float-right nav-label"></span><span class="nav-icon"><em class="ion-ios-keypad"></em></span><span>Pages</span></a>
                <ul class="sidebar-subnav" id="pages">
                  <li>
                    <a href="forum.html"><span class="float-right nav-label"></span><span>Forum</span></a>
                  </li>
                  <li>
                    <a href="calendar.html"><span class="float-right nav-label"></span><span>Calendar</span></a>
                  </li>
                  <li>
                    <a href="timeline.html"><span class="float-right nav-label"></span><span>Timeline</span></a>
                  </li>
                  <li>
                    <a href="invoice.html"><span class="float-right nav-label"></span><span>Invoice</span></a>
                  </li>
                  <li>
                    <a href="fullmap.html"><span class="float-right nav-label"></span><span>Fullmap</span></a>
                  </li>
                  <li>
                    <a href="settings.html"><span class="float-right nav-label"></span><span>Settings</span></a>
                  </li>
                  <li>
                    <a href="pricing.html"><span class="float-right nav-label"></span><span>Pricing</span></a>
                  </li>
                  <li>
                    <a href="people.html"><span class="float-right nav-label"></span><span>People</span></a>
                  </li>
                  <li>
                    <a href="contact.html"><span class="float-right nav-label"></span><span>Contact</span></a>
                  </li>
                  <li>
                    <a href="wall.html"><span class="float-right nav-label"></span><span>Wall</span></a>
                  </li>
                  <li>
                    <a href="mailbox.html"><span class="float-right nav-label"></span><span>Mailbox</span></a>
                  </li>
                </ul>
              </li> --}}
            </ul>
          </nav>
        </div>
      </aside>
      <div class="sidebar-layout-obfuscator"></div>
      <!-- Main section-->
      <main class="main-container">
        <!-- Page content-->
        <section class="section-container">
          <div class="container-fluid">
            {{$slot}}
          </div>
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
    <!-- Sweet Alert-->
    <script src="{{asset('admin/vendor/sweetalert/dist/sweetalert.min.js')}}"></script>
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
    <!-- FooTable-->
    <script src="{{asset('admin/vendor/footable/dist/footable.all.min.js')}}"></script>
    <!-- jQuery Knob charts-->
    <script src="{{asset('admin/vendor/jquery-knob/js/jquery.knob.js')}}"></script>
    <!-- App script-->
    <script src="{{asset('admin/js/app.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
    <!-- Summernote-->
    <script src="{{asset('admin/vendor/summernote/dist/summernote.js')}}"></script>
    <script>
        window.addEventListener('alert', event => { 
             toastr[event.detail.type](event.detail.message, 
             event.detail.title ?? ''), toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                }
            });
    </script>
    @stack('scripts')
    @livewireScripts
  </body>


<!-- Mirrored from themicon.co/theme/dasha/v1.5/html5jquery/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 02:55:42 GMT -->
</html>