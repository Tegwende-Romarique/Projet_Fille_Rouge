
@extends('layouts.Accueil.include')
@section('content')

  <!-- Modal -->
  <!-- script pour la gestion des erreurs sur la validation du formulaire    -->
          </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                         @endforeach
                    </ul>
                 </div><br />
            @endif
        </div>
        <div class=""> <!-- script pour l'affichage du flash message ou message de confirmation    -->
            @if(session()->get('success'))
                <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}  
        </div>
            @endif
        </div> <!--fin du script de validation du formulaire-->


 <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fa fa-close"></i></span></button>
              <div class="modal-title text-center">
                <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                <h3 class="no-m ms-site-title">Material<span>Style</span></h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation"><a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple"><i class="fa fa-user"></i> Connexion</a></li>
                  <li class="nav-item" role="presentation"><a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-user-plus"></i> Créer compte</a></li>
                  <li class="nav-item" role="presentation"><a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-key"></i> Mot de passe oublier</a></li>
                </ul>
              </div>
            </div>
            <div class="modal-body"> <!--authentfication pour la connexion à la base de données-->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <fieldset>
                      <div class="form-group label-floating">

                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-envelop"></i></span>
                          <label class="control-label" for="email">Email</label>
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                          <label class="control-label" for="password">Password</label>
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
                              <label>
                              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                 Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right" type="submit">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
                <!-- formulaire pour la création d'u nouveau compte administrateur -->
                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-account"></i></span>
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
                          <span class="input-group-addon"><i class="fa fa-email"></i></span>
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
                          <label class="control-label" for="password">Password</label>
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
                          <label class="control-label" for="password_confirmation">Re-type Password</label>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Enregistrer</button>
                      <button class="btn btn-raised btn-block btn-danger">Annuler</button>
                    </fieldset>
                  </form> <!--fin du formulaire pour la création d'un nouveau cimpte administrateur -->
                </div>
                <!-- formulaire pour la récupération du mot de passe oublier -->
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-account"></i></span>
                        <label class="control-label" for="ms-form-user-re">Username</label>
                        <input type="text" id="ms-form-user-re" class="form-control">
                      </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-email"></i></span>
                        <label class="control-label" for="ms-form-email-re">Email</label>
                        <input type="email" id="ms-form-email-re" class="form-control">
                      </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                  </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- end of the modal -->
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
                          <h1 class="animated fadeInLeft animation-delay-15 font-smoothing">The <strong>power design</strong> amazing projects</h1>
                          <h2 class="animated fadeInLeft animation-delay-18">The most customizable <span class="color-warning">material design</span> template.</h2>
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="zmdi zmdi-airplane"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="zmdi zmdi-bike"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="zmdi zmdi-album"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2" data-target="ms-account-modal" data-toggle="modal" data-target="#ms-account-modal"><i class="zmdi zmdi-settings"></i> Personalize</a>
                            <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"  ><i class="zmdi zmdi-download"></i> Download</a>
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
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp"><i class="zmdi zmdi-city"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-royal shadow-3dp"><i class="zmdi zmdi-cake"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="zmdi zmdi-coffee"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2" data-toggle="modal" data-target="#ms-account-modal"><i class="zmdi zmdi-settings"></i> Personalize</a>
                            <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="zmdi zmdi-download"></i> Download</a>
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
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="zmdi zmdi-cutlery"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, fugit sit nesciunt cum rerum iusto.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-info shadow-3dp"><i class="zmdi zmdi-dns"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi laborum dignissimos fuga maxime facere.</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="zmdi zmdi-compass"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit sequi est repudianda.</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="zmdi zmdi-settings"></i> Personalize</a>
                          <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="zmdi zmdi-download"></i> Download</a>
                        </div>
                      </div> <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  <div class="carousel-controls">
                    <!-- Controls -->
                    <a class="left carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="prev">
                      <i class="zmdi zmdi-chevron-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control animated zoomIn animation-delay-30" href="#carousel-hero" role="button" data-slide="next">
                      <i class="zmdi zmdi-chevron-right"></i>
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
                <img src="Images/Accueil/mock-imac-material2.png" alt="" class="img-fluid">
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
                      <img src="Images/Accueil/hero1.png" alt="" class="img-fluid">
                    </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="Images/Accueil/hero3.png" alt="" class="img-fluid">
                    </div>
                    <div class="ms-hero-img-slider carousel-item">
                      <img src="Images/Accueil/hero2.png" alt="" class="img-fluid">
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
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info"><i class="zmdi zmdi-cloud-outline"></i></span>
              <h4 class="color-info">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-info btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-8">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning"><i class="zmdi zmdi-desktop-mac"></i></span>
              <h4 class="color-warning">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-warning btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-10">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success"><i class="zmdi zmdi-download"></i></span>
              <h4 class="color-success">A feature title</h4>
              <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
              <a href="javascript:void(0)" class="btn btn-success btn-raised">Action here</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-6">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger"><i class="zmdi zmdi-flower-alt"></i></span>
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
              <img src="Images/Accueil/mock.png" alt="" class="img-fluid center-block wow zoomIn animation-delay-12 ">
            </div>
            <div class="col-lg-6 order-lg-1 pr-6">
              <p class="wow fadeInLeft animation-delay-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam sint officiis odio tempora natus, sed voluptas facilis ullam suscipit. Ducimus quas, eius ut, dolores mollitia sapiente doloremque aliquid sequi eaque.</p>
              <p class="wow fadeInLeft animation-delay-7">Adipisicing elit. Sapiente porro voluptatem rerum modi quibusdam accusantium nihil facere cupiditate quam! Ipsa.</p>
              <p class="wow fadeInLeft animation-delay-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quasi voluptatem, similique corrupti necessitatibus nihil error, nemo delectus voluptates deserunt ducimus quaerat molestiae labore id repellat exercitationem asperiores neque quibusdam.</p>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14"><i class="zmdi zmdi-chart-donut"></i> Action here </a>
                <a href="javascript:void(0)" class="btn btn-info btn-raised wow flipInX animation-delay-16"><i class="zmdi zmdi-case"></i> Button</a>
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
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation"><a href="#windows" aria-controls="windows" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="zmdi zmdi-windows"></i> <span class="d-none d-md-inline">Windows</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation"><a href="#macos" aria-controls="macos" role="tab" data-toggle="tab" class="nav-link withoutripple active"><i class="zmdi zmdi-apple"></i> <span class="d-none d-md-inline">MacOS</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-2" role="presentation"><a href="#linux" aria-controls="linux" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-linux"></i> <span class="d-none d-md-inline">Linux</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation"><a href="#android" aria-controls="android" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="zmdi zmdi-android"></i> <span class="d-none d-md-inline">Android</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation"><a href="#ios" aria-controls="ios" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="zmdi zmdi-smartphone-iphone"></i> <span class="d-none d-md-inline">IOS</span></a></li>
          </ul>
          <div class="panel-body">
            <!-- Tab panes -->
            <div class="tab-content mt-4">
              <div role="tabpanel" class="tab-pane fade" id="windows">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="Images/Accueil/mock4.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane active show fade" id="macos">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="Images/Accueil/mock2.png" alt="" class="img-fluid wow animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10"><i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 wow animated zoomIn animation-delay-12"><i class="zmdi zmdi-chart-donut" data-toggle="modal" data-target="#ms-account-modal"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="linux">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="Images/Accueil/mock5.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="android">
                <div class="row">
                  <div class="col-lg-6">
                    <img src="Images/Accueil/mock6.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="zmdi zmdi-chart-donut"></i> Action here </a>
                    </div>
                  </div>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="ios">
                <div class="row">
                  <div class="col-lg-6 order-lg-2">
                    <img src="Images/Accueil/mock3.png" alt="" class="img-fluid animated zoomIn animation-delay-8">
                  </div>
                  <div class="col-lg-6 order-lg-1">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Bring ideas together faster</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="zmdi zmdi-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="zmdi zmdi-chart-donut"></i> Action here </a>
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
                  <li><i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li><i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li><i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li><i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li><i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-info btn-raised"><i class="zmdi zmdi-cloud-download"></i> Get Now</a>
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
                  <li><i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li><i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li><i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li><i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li><i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-success btn-raised"><i class="zmdi zmdi-cloud-download"></i> Get Now</a>
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
                  <li><i class="zmdi zmdi-code"></i> Lorem ipsum dolor sit amet.</li>
                  <li><i class="zmdi zmdi-globe"></i> Voluptate ex quam autem dolor.</li>
                  <li><i class="zmdi zmdi-settings"></i> Dignissimos velit reic cumque.</li>
                  <li><i class="zmdi zmdi-cloud"></i> Nihil corrupti soluta vitae non.</li>
                  <li><i class="zmdi zmdi-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  <a href="javascript:void(0)" class="btn btn-warning btn-raised"><i class="zmdi zmdi-cloud-download"></i> Get Now</a>
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
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
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
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
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
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante ultricies nisi vel augue quam semper libero.</p>
                          <footer>Brian Krzanich, Intel CEO.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
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
            <i class="zmdi zmdi-arrow-left"></i>
          </a>
          <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="zmdi zmdi-arrow-right"></i>
          </a>
        </div>
      </div>
      <div class="container mt-6">
        <h2 class="text-center color-primary mb-4">Our Latest Works</h2>
        <div class="owl-dots"></div>
        <div class="owl-carousel owl-theme">
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port4.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port24.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port7.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port8.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port9.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port5.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-6">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port11.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card card-dark-inverse animation-delay-8">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port3.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-info btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
          <div class="card animation-delay-10">
            <div class="withripple zoom-img">
              <a href="javascript:void()"><img src="Images/Accueil/port14.jpg" alt="..." class="img-fluid"></a>
            </div>
            <div class="card-body">
              <h3 class="color-primary">Thumbnail label</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem, repellat, vitae porro ex expedita cumque nulla.</p>
              <p class="text-right">
                <a href="javascript:void()" class="btn btn-primary btn-raised text-right" role="button"><i class="zmdi zmdi-collection-image-o"></i> View More</a>
              </p>
            </div>
          </div>
        </div>
      </div>
@endsection