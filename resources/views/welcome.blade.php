@extends('layouts.include')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>PENB</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="Imgages/favicon.png">
  </head>
  <body>

                  <!-- chargement de la page -->
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container-fluid">

                     <!-- Modal pour l'authentification-->
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
              <div class="modal-title text-center">
                <span class="ms-logo ms-logo-white ms-logo-sm mr-1">P</span>
                <h3 class="no-m ms-site-title"><span>PENB</span></h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation"><a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple"><i class="fa fa-user"></i> Connexion</a></li>
                  <li class="nav-item" role="presentation"><a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-user-plus"></i> Nouveau compte</a></li>
                  <li class="nav-item" role="presentation"><a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-key"></i> Mot de passe oublier</a></li>
                </ul>
              </div>
            </div>
                                            <!-- authentification -->
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                  <form  method="POST" action="{{ route('login') }}" autocomplete="off">
                    @csrf
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <label class="control-label" for="email">Adress mail</label>
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <label class="control-label" for="password">Mot de passe</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label  class="form-check-label" for="remember">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>            
                 <!-- création de compte -->
                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                  <form method="POST" action="{{ route('register') }}">
                  @csrf
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <label class="control-label" for="name">Nom</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                           @error('name')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <label class="control-label" for="email">Email</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <label class="control-label" for="password">Mot de passe</label>
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <label class="control-label" for="password-confirm">Confirme mot de passe</label>
                           <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Enregistrer</button>
                      <button class="btn btn-raised btn-block btn-danger">Annuler</button>
                      
                    </fieldset>
                  </form>
                </div>
                <!-- Mot de passe oublier -->
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <label class="control-label" for="ms-form-user-re">Nom d'utilisateur</label>
                        <input type="text" id="ms-form-user-re" class="form-control">
                      </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <label class="control-label" for="ms-form-email-re">Email</label>
                        <input type="email" id="ms-form-email-re" class="form-control">
                      </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Valider</button>
                  </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="index.html">
              <!-- <img src="Images/logo-header.png" alt=""> -->
              <span class="ms-logo animated zoomInDown animation-delay-5">P</span>
              <h1 class="animated fadeInRight animation-delay-6"><span > <span class="color-danger">P</span> lateforme <span class="color-warning">E</span>ducatif <span class="color-success">N</span >umerique <span class="color-danger">B</span>urkinabé </span></h1>
            </a>
          </div>
          <div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                <li class="animated fadeInRight animation-delay-3"><a href="javascript:void(0)" class="btn-circle btn-google"><i class="fa fa-google"></i></a></li>
                <li class="animated fadeInRight animation-delay-2"><a href="javascript:void(0)" class="btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="animated fadeInRight animation-delay-1"><a href="javascript:void(0)" class="btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7"><i class="fa fa-share-alt"></i></a>
            </div>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal"><i class="fa fa-user"></i></a>
            <form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box"><i class="fa fa-search"></i></label>
            </form>
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10"><i class="fa fa-navicon"></i></a>
          </div>
        </div>
      </header>

      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <!-- <img src="Images/logo-navbar.png" alt=""> -->
              <span class="ms-logo ms-logo-sm">P</span>
              <span class="ms-title"><strong>PENB</strong></span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="home">Accueil </a>
              </li>
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Pages <i class="fa fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li class="dropdown-submenu">
                    <a href="javascript:void(0)" class="dropdown-item has_children">About us &amp; Team</a>
                    <ul class="dropdown-menu dropdown-menu-left">
                      <li><a class="dropdown-item" href="page-about.html">About us Option 1</a></li>
                    </ul>
                  </li>
                  <li><a class="dropdown-item" href="page-all.html" class="dropdown-link">All Pages</a></li>
                </ul>
              </li>
              </li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="fa fa-menu"></i></a>
        </div> <!-- container -->
      </nav>

      
      <div class="ms-hero ms-hero-material">
        <span class="ms-hero-bg"></span>
        <div class="container">
          <div class="row">
            <div class="col-xl-6 col-lg-7">
              <div id="carousel-hero" class="carousel slide carousel-fade" data-ride="carousel" data-interval="8000">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">Bienvenu sur La Plateforme Educatif Numérique</h1>
                          <h2 class="animated fadeInLeft animation-delay-18"><span class="color-warning">L' éducation du</span> future</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="fa fa-airplane"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-bike"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="fa fa-album"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="fa fa-settings"></i> Personalize</a>
                            <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="fa fa-download"></i> Download</a>
                          </div>
                        </div>
                      </div> <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15">A template with <strong>infinite</strong> possibilities</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">Unlimited combinations to create <span class="color-warning">unique designs</span> .</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp"><i class="fa fa-city"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp"><i class="fa fa-cake"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="fa fa-coffee"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="fa fa-settings"></i> Personalize</a>
                            <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="fa fa-download"></i> Download</a>
                          </div>
                        </div>
                      </div> <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15">Commitment of <strong>monthly updates</strong>.</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">There will soon be a version for <span class="color-warning">Bootstrap 4</span>.</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="fa fa-cutlery"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp"><i class="fa fa-dns"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-compass"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="fa fa-settings"></i> Personalize</a>
                          <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="fa fa-download"></i> Download</a>
                        </div>
                      </div> <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  <div class="carousel-controls">
                    <!-- Controls -->
                    <a class="left carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="prev">
                      <i class="fa fa-chevron-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="next">
                      <i class="fa fa-chevron-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-hero" data-slide-to="0" class="animated fadeInUpBig animation-delay-27 active"></li>
                      <li data-target="#carousel-hero" data-slide-to="1" class="animated fadeInUpBig animation-delay-28"></li>
                      <li data-target="#carousel-hero" data-slide-to="2" class="animated fadeInUpBig animation-delay-29"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-5">
              <div class="ms-hero-img animated zoomInUp animation-delay-30">
                <img src="Images/mock-imac-material2.png" alt="" class="img-fluid">
                <div id="carousel-hero-img" class="carousel carousel-fade slide" data-ride="carousel" data-interval="3000">
                  <!-- Indicators -->
                  <ol class="carousel-indicators carousel-indicators-hero-img">
                    <li data-target="#carousel-hero-img" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-hero-img" data-slide-to="1"></li>
                    <li data-target="#carousel-hero-img" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="ms-hero-img-slider carousel-item active">
                      <img src="Images/hero1.png" alt="" class="img-fluid">
                    </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="Images//hero3.png" alt="" class="img-fluid">
                    </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="Images/hero2.png" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- container -->
      </div> <!-- ms-hero ms-hero-black -->
      <div class="container mt-4">
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Know our amazing features</h2>
        <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> Lorem ipsum dolor sit amet, <span class="color-primary">consectetur adipisicing</span> elit. Dolor alias provident excepturi eligendi, nam numquam iusto eum illum, ea quisquam.</p>
        <div class="row">
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-4">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info"><i class="fa fa-cloud-outline"></i></span>
              <h4 class="color-info">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-info btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-8">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning"><i class="fa fa-desktop-mac"></i></span>
              <h4 class="color-warning">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-warning btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-10">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success"><i class="fa fa-download"></i></span>
              <h4 class="color-success">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-success btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-6">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger"><i class="fa fa-flower-alt"></i></span>
              <h4 class="color-danger">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-danger btn-raised">Action here</a>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h2 class="text-center text-light mb-6 wow fadeInDown animation-delay-5">Material Design is a <strong>new way</strong> to create designs</h2>
          <div class="row">
            <div class="col-lg-6 order-lg-2 mb-4  center-block">
              <img src="Images/mock.png" alt="" class="img-fluid center-block wow zoomIn animation-delay-12 ">
            </div>
            <div class="col-lg-6 order-lg-1 pr-6">
              <p class="wow fadeInLeft animation-delay-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sint officiis odio tempora natus, sed voluptas facilis ullam suscipit. Ducimus quas, eius ut, dolores mollitia sapiente doloremque aliquid sequi eaque.</p>
              <p class="wow fadeInLeft animation-delay-7">Adipisicing elit. Sapiente porro voluptatem rerum modi quibusdam accusantium nihil facere cupiditate quam! Ipsa.</p>
              <p class="wow fadeInLeft animation-delay-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quasi voluptatem, similique corrupti necessitatibus nihil error, nemo delectus voluptates deserunt ducimus quaerat molestiae labore id repellat exercitationem asperiores neque quibusdam.</p>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14"><i class="fa fa-chart-donut"></i> Action here </a>
                <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16"><i class="fa fa-case"></i> Button</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-6">
        <h1 class="font-light">Technology that brings teams together</h1>
        <p class="lead color-primary">— Intelligent apps that help you do your best work. </p>
        <div class="panel panel-light panel-flat">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation"><a href="#windows" aria-controls="windows" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-windows"></i> <span class="d-none d-md-inline">Windows</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation"><a href="#macos" aria-controls="macos" role="tab" data-toggle="tab" class="nav-link withoutripple active"><i class="fa fa-apple"></i> <span class="d-none d-md-inline">MacOS</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-2" role="presentation"><a href="#linux" aria-controls="linux" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-linux"></i> <span class="d-none d-md-inline">Linux</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation"><a href="#android" aria-controls="android" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-android"></i> <span class="d-none d-md-inline">Android</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation"><a href="#ios" aria-controls="ios" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-smartphone-iphone"></i> <span class="d-none d-md-inline">IOS</span></a></li>
          </ul>
          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div role="tabpanel" class="tab-pane fade" id="windows">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="Images/mock4.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="fa fa-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="fa fa-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane active show fade" id="macos">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="Images/mock2.png" alt="" class="img-fluid wow animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10"><i class="fa fa-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 wow animated zoomIn animation-delay-12"><i class="fa fa-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="linux">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="Images/mock5.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="fa fa-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="fa fa-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="android">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="Images/mock6.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="fa fa-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="fa fa-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="ios">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="Images/mock3.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="fa fa-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="fa fa-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- panel -->
      </div> <!-- container -->
      <div class="container mt-6">
        <div class="text-center mb-4">
          <h2 class="uppercase color-primary">See our subscription plans</h2>
          <p class="lead uppercase">Surprise with our unique features</p>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-4">
            <div class="price-table price-table-info wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Personal</span>
                <h3><sup>$</sup>19.99 <sub>/mo.</sub></h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li><i class="fa fa-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li><i class="fa fa-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li><i class="fa fa-settings"></i> Dignissimos velit reic cumque.</li>
                  <li><i class="fa fa-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li><i class="fa fa-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-info btn-raised"><i class="fa fa-cloud-download"></i> Get Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-table price-table-success prominent wow zoomInDown animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Professional</span>
                <h3><sup>$</sup>49.99 <sub>/mo.</sub></h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li><i class="fa fa-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li><i class="fa fa-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li><i class="fa fa-settings"></i> Dignissimos velit reic cumque.</li>
                  <li><i class="fa fa-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li><i class="fa fa-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-success btn-raised"><i class="fa fa-cloud-download"></i> Get Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-table price-table-warning wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">Business</span>
                <h3><sup>$</sup>99.99 <sub>/mo.</sub></h3>
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li><i class="fa fa-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li><i class="fa fa-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li><i class="fa fa-settings"></i> Dignissimos velit reic cumque.</li>
                  <li><i class="fa fa-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li><i class="fa fa-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-warning btn-raised"><i class="fa fa-cloud-download"></i> Get Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--container -->
      <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">What our customers say</h2>
        <div id="carousel-example-generic" class="carousel carousel-cards carousel-fade slide" data-ride="carousel" data-interval="7000">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-caption">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-2 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control-prev btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="container mt-6">
        <h2 class="text-center color-primary mb-4">Our Latest Works</h2>
        <div class="owl-dots"></div>
        <div class="owl-carousel owl-theme">
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port4.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port24.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port7.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port8.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port9.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port5.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port11.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port3.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/port14.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="fa fa-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="page-blog.html"><i class="fa fa-edit"></i> Blog</a></li>
                  <li><a href="page-blog.html"><i class="fa fa-image-o"></i> Portafolio</a></li>
                  <li><a href="portfolio-filters_sidebar.html"><i class="fa fa-case"></i> Works</a></li>
                  <li><a href="page-timeline_left2.html"><i class="fa fa-time"></i> Timeline</a></li>
                  <li><a href="page-pricing.html"><i class="fa fa-money"></i> Pricing</a></li>
                  <li><a href="page-about.html"><i class="fa fa-favorite-outline"></i> About Us</a></li>
                  <li><a href="page-team2.html"><i class="fa fa-users"></i> Our Team</a></li>
                  <li><a href="page-services.html"><i class="fa fa-face"></i> Services</a></li>
                  <li><a href="page-faq2.html"><i class="fa fa-help"></i> FAQ</a></li>
                  <li><a href="page-login2.html"><i class="fa fa-lock"></i> Login</a></li>
                  <li><a href="page-contact.html"><i class="fa fa-email"></i> Contact</a></li>
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribe</h3>
                <p class="">Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe"><i class="fa fa-email"></i> Email Adress</label>
                      <input type="email" id="ms-subscribe" class="form-control">
                    </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Last Articles</h3>
                <div class="ms-footer-media">
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="Images/p75.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="javascript:void(0)">Lorem ipsum dolor sit expedita cumque amet consectetur adipisicing repellat</a></h4>
                      <div class="media-footer">
                        <span><i class="fa fa-time color-info-light"></i> August 18, 2016</span>
                        <span><i class="fa fa-folder-outline color-warning-light"></i> <a href="javascript:void(0)">Design</a></span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="Images/p75.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="javascript:void(0)">Labore ut esse Duis consectetur expedita cumque ullamco ad dolor veniam velit</a></h4>
                      <div class="media-footer">
                        <span><i class="fa fa-time color-info-light"></i> August 18, 2016</span>
                        <span><i class="fa fa-folder-outline color-warning-light"></i> <a href="javascript:void(0)">News</a></span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="Images/p75.jpg" alt="...">
                      </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="javascript:void(0)">voluptates deserunt ducimus expedita cumque quaerat molestiae labore</a></h4>
                      <div class="media-footer">
                        <span><i class="fa fa-time color-info-light"></i> August 18, 2016</span>
                        <span><i class="fa fa-folder-outline color-warning-light"></i> <a href="javascript:void(0)">Productivity</a></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material<span>Style</span></h3>
                </div>
                <address class="no-mb">
                  <p><i class="color-danger-light fa fa-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p><i class="color-warning-light fa fa-map mr-1"></i> San Francisco, CA 94107</p>
                  <p><i class="color-info-light fa fa-email mr-1"></i> <a href="mailto:joe@example.com">example@domain.com</a></p>
                  <p><i class="color-royal-light fa fa-phone mr-1"></i>+34 123 456 7890 </p>
                  <p><i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter"><i class="fa fa-twitter"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-youtube"><i class="fa fa-youtube-play"></i></a><br>
                  <a href="javascript:void(0)" class="btn-circle btn-google"><i class="fa fa-google"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-instagram"><i class="fa fa-instagram"></i></a>
                  <a href="javascript:void(0)" class="btn-circle btn-github"><i class="fa fa-github"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; Material Style 2017</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i class="fa fa-long-arrow-up"></i></a>
      </div>
    </div> <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple"><i class="fa fa-user"></i> Login</a>
            <a href="javascript:void(0)" class="withripple"><i class="fa fa-user-add"></i> Register</a>
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar"><i class="fa fa-search"></i></label>
            </form>
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">M</span>
              <h3>Material<span>Style</span></h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li class="card" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="fa fa-home"></i> Home </a>
            <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1" data-parent="#slidebar-menu">
              <li><a href="index.html">Default Home</a></li>
              <li><a href="home-generic-2.html">Home Black Slider</a></li>
              <li><a href="home-landing.html">Home Landing Intro</a></li>
              <li><a href="home-landing3.html">Home Landing Video</a></li>
              <li><a href="home-shop.html">Home Shop 1</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="fa fa-desktop-mac"></i> Pages </a>
            <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-parent="#slidebar-menu">
              <li><a href="page-about.html">About US</a></li>
              <li><a href="page-team.html">Our Team</a></li>
              <li><a href="page-product.html">Products</a></li>
              <li><a href="page-services.html">Services</a></li>
              <li><a href="page-faq.html">FAQ</a></li>
              <li><a href="page-timeline_left.html">Timeline</a></li>
              <li><a href="page-contact.html">Contact Option</a></li>
              <li><a href="page-login.html">Login</a></li>
              <li><a href="page-pricing.html">Pricing</a></li>
              <li><a href="page-coming.html">Coming Soon</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="fa fa-edit"></i> Blog </a>
            <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#slidebar-menu">
              <li><a href="blog-sidebar.html">Blog Sidebar 1</a></li>
              <li><a href="blog-sidebar2.html">Blog Sidebar 2</a></li>
              <li><a href="blog-masonry.html">Blog Masonry 1</a></li>
              <li><a href="blog-masonry2.html">Blog Masonry 2</a></li>
              <li><a href="blog-full.html">Blog Full Page 1</a></li>
              <li><a href="blog-full2.html">Blog Full Page 2</a></li>
              <li><a href="blog-post.html">Blog Post 1</a></li>
              <li><a href="blog-post2.html">Blog Post 2</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch5">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc5" aria-expanded="false" aria-controls="sc5">
              <i class="fa fa-shopping-basket"></i> E-Commerce </a>
            <ul id="sc5" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch5" data-parent="#slidebar-menu">
              <li><a href="ecommerce-filters.html">E-Commerce Sidebar</a></li>
              <li><a href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a></li>
              <li><a href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a></li>
              <li><a href="ecommerce-item.html">E-Commerce Item</a></li>
              <li><a href="ecommerce-cart.html">E-Commerce Cart</a></li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc6" aria-expanded="false" aria-controls="sc6">
              <i class="fa fa-collection-image-o"></i> Portfolio </a>
            <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6" data-parent="#slidebar-menu">
              <li><a href="portfolio-filters_sidebar.html">Portfolio Sidebar Filters</a></li>
              <li><a href="portfolio-filters_topbar.html">Portfolio Topbar Filters</a></li>
              <li><a href="portfolio-filters_sidebar_fluid.html">Portfolio Sidebar Fluid</a></li>
              <li><a href="portfolio-filters_topbar_fluid.html">Portfolio Topbar Fluid</a></li>
              <li><a href="portfolio-cards.html">Porfolio Cards</a></li>
              <li><a href="portfolio-masonry.html">Porfolio Masonry</a></li>
              <li><a href="portfolio-item.html">Portfolio Item 1</a></li>
              <li><a href="portfolio-item2.html">Portfolio Item 2</a></li>
            </ul>
          </li>
          <li>
            <a class="link" href="component-typography.html"><i class="fa fa-view-compact"></i> UI Elements</a>
          </li>
          <li>
            <a class="link" href="page-all.html"><i class="fa fa-link"></i> All Pages</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook"><i class="fa fa-facebook"></i> <span class="badge-pill badge-pill-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter"><i class="fa fa-twitter"></i> <span class="badge-pill badge-pill-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google"><i class="fa fa-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram"><i class="fa fa-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="Js/plugins.min.js"></script>
    <script src="Js/app.min.js"></script>
    <script src="Js/configurator.min.js"></script>
    <script>
      (function(i, s, o, g, r, a, m)
      {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-90917746-2', 'auto');
      ga('send', 'pageview');
    </script>
    <script src="Js/index.js"></script>
  </body>
</html>