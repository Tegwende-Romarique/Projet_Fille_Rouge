
@extends('layouts.Accueil.include')
@section('content')
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
                            <h1 class="animated fadeInLeft animation-delay-15 font-smoothing"><strong>IMPORTEZ VOTRE ETABLISSEMENT SUR LE NET EN UN CLIC </strong>.</h1>
                          {{-- <h1 class="animated fadeInLeft animation-delay-15 font-smoothing"></strong> Importez votre Etablissement sur le net en clic</h1> --}}
                          {{-- <h2 class="animated fadeInLeft animation-delay-18">The most customizable <span class="color-warning">material design</span> template.</h2> --}}
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="fa fa-book"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">L' EDUCATION PARTOUT ET POUR TOUS</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-graduation-cap"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">AMELIORER LE RESULTATS DE VOS ELEVES</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">AIDER VOTRE ETABLISSEMENT A GANGER DU TEMPS</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                          <div class="ms-hero-material-buttons text-right">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2"><i class="fa fa-graduation-cap"></i>Digitalizer votre Etablissement</a>
                          </div>
                        </div>
                      </div> <!-- ms-hero-material-text-container -->
                    </div>
                  </div>
                  {{-- <div class="carousel-item">
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
                            <a href="javascript:void(0);" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2" data-toggle="modal" data-target="#ms-account-modal"><i class="fa fa-settings"></i> Personalize</a>
                            <a href="javascript:void(0);" class="btn btn-success btn-raised animated fadeInRight animation-delay-24"><i class="fa fa-download"></i> Download</a>
                          </div>
                        </div>
                      </div> <!-- ms-hero-material-text-container -->
                    </div>
                  </div> --}}
                  <div class="carousel-item">
                    <div class="carousel-caption">
                      <div class="ms-hero-material-text-container">
                        <header class="ms-hero-material-title animated slideInLeft animation-delay-5">
                          <h1 class="animated fadeInLeft animation-delay-15"><strong>GERE EFFICACEMENT VOTRE ETABLISSEMENT</strong>.</h1>
                          {{-- <h2 class="animated fadeInLeft animation-delay-18">There will soon be a version for <span class="color-warning">Bootstrap 4</span>.</h2> --}}
                        </header>
                        <ul class="ms-hero-material-list">
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-18">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-danger shadow-3dp"><i class="fa fa-hand-o-right"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-19">GANGNER EN EFFICACITE</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-20">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-warning shadow-3dp"><i class="fa fa-hand-rock-o"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-21">GAGNER EN EFFICIENCE</div>
                          </li>
                          <li class="">
                            <div class="ms-list-icon animated zoomInUp animation-delay-22">
                              <span class="ms-icon ms-icon-circle ms-icon-xlg color-success shadow-3dp"><i class="fa fa-money"></i></span>
                            </div>
                            <div class="ms-list-text animated fadeInRight animation-delay-23">GAGNER EN ECONOMIE</div>
                          </li>
                        </ul>
                        <div class="ms-hero-material-buttons text-right">
                            <a href="{{ route('register') }}" class="btn btn-warning btn-raised animated fadeInLeft animation-delay-24 mr-2" ><i class="fa fa-graduation-cap"></i>Digitalizer votre Etablissement</a>
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
        <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Gestion de la Vie Scolaire et de la Scolarite pour Chaque Ecole</h2>
        {{-- <p class="lead text-center aco wow fadeInDown animation-delay-5 mw-800 center-block mb-4"> Lorem ipsum dolor sit amet, <span class="color-primary">consectetur adipisicing</span> elit. Dolor alias provident excepturi eligendi, nam numquam iusto eum illum, ea quisquam.</p> --}}
        <div class="row">
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-4">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-danger"><i class="fa fa-cog"></i></span>
              <h4 class="">Gérer intélligement votre établissement</h4>
              <p class="">Simplifiez la gestion de votre etablissement</p>
              <a href="javascript:void(0)" class="btn btn-danger btn-raised">Etablissement</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-8">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning"><i class="fa fa-wrench"></i></span>
              <h4 class="">Fini les retards dans le calcul des moyennes</h4>
              <p class="">Booster le resultats de vos élèves</p>
              <a href="javascript:void(0)" class="btn btn-warning btn-raised">Enseignant</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-10">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success"><i class="fa fa-book"></i></span>
              <h4 class="">Plus besoin d'aller loin pour apprendre</h4>
              <p class="">Les ressources necessaires à votre apprentissage ici</p>
              <a href="javascript:void(0)" class="btn btn-success btn-raised">Eleves</a>
            </div>
          </div>
          <div class="ms-feature col-xl-3 col-lg-6 col-md-6 card wow flipInX animation-delay-6">
            <div class="text-center card-body">
              <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-primry"><i class="fa fa-eye"></i></span>
              <h4 class="">A dieu la falsification des bullletins</h4>
              <p class="">Les notes et les absences des élèves en temps réel</p>
              <a href="javascript:void(0)" class="btn btn-primary btn-raised">Parents</a>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
      <div class="wrap wrap-mountain mt-6">
        <div class="container">
          <h2 class="text-center text-light mb-6 wow fadeInDown animation-delay-5"><strong>Digitalisation de votre etablissement</strong></h2>
          <div class="row">
            <div class="col-lg-6 order-lg-2 mb-4  center-block">
              <img src="Images/Accueil/imac.png" alt="" class="img-fluid center-block wow zoomIn animation-delay-12 ">
            </div>
            <div class="col-lg-6 order-lg-1 pr-6">
              <p class="wow fadeInLeft animation-delay-6">Allouer une espace privée pour votre Etablissement </p>
              <p class="wow fadeInLeft animation-delay-7">Publier les évènements, les Postes, les actualités, les réunions ou toutes autres informations y afférente.</p>
              <div class="text-center">
                <a href="javascript:void(0)" class="btn btn-warning btn-raised mr-1 wow flipInX animation-delay-14"><i class="fa fa-graduation-cap"></i>Etablissement, commencer ici </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mt-6">
        <h1 class="font-light">Pour les Parents les Apprenants et les Enseignants !</h1>
        {{-- <p class="lead color-primary">— Intelligent apps that help you do your best work. </p> --}}
        <div class="panel panel-light panel-flat">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation"><a href="#windows" aria-controls="windows" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-windows"></i> <span class="d-none d-md-inline">Enseignats</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-4" role="presentation"><a href="#macos" aria-controls="macos" role="tab" data-toggle="tab" class="nav-link withoutripple active"><i class="fa fa-apple"></i> <span class="d-none d-md-inline">Parents</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-2" role="presentation"><a href="#linux" aria-controls="linux" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-linux"></i> <span class="d-none d-md-inline">Eleves</span></a></li>
            {{-- <li class="nav-item wow fadeInDown animation-delay-4" role="presentation"><a href="#android" aria-controls="android" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-android"></i> <span class="d-none d-md-inline">Android</span></a></li>
            <li class="nav-item wow fadeInDown animation-delay-6" role="presentation"><a href="#ios" aria-controls="ios" role="tab" data-toggle="tab" class="nav-link withoutripple"><i class="fa fa-smartphone-iphone"></i> <span class="d-none d-md-inline">IOS</span></a></li> --}}
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
                    <h3 class="text-normal animated fadeInUp animation-delay-4"></h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6"> </p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7"></p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="fa fa-info"></i>Parent, suivez vortre enfant</a>
                      {{-- <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="fa fa-chart-donut"></i> Action here </a> --}}
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
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">Parents</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">L'objectif est non seulement d'améliorer l'expérience d'apprentissage des apprenants,</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">mais également d'enrichir le niveau d’information des parents afin d'avoir une visibilité sur les activités scolaires et universitaires de leurs enfants.</p>
                    <div class="">
                      <a href="javascript:void(0)" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10"><i class="fa fa-info"></i> Parent, suivez votre enfant</a>
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
                      <a href="javascript:void(0)" class="btn btn-info btn-raised animated zoomIn animation-delay-10"><i class="fa fa-info"></i> More info</a>
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised mr-1 animated zoomIn animation-delay-12"><i class="fa fa-chart-donut"></i> Action here </a>
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
          <h2 class="uppercase color-primary">QUELQUES FONCTIONNALITES DE FACTO</h2>
          {{-- <p class="lead uppercase">Surprise with our unique features</p> --}}
        </div>
        <div class="row no-gutters">
          <div class="col-lg-4">
            <div class="price-table price-table-danger wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">VISION PARENT</span>
                {{-- <h3><sup>$</sup>19.99 <sub>/mo.</sub></h3> --}}
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li><i class="fa fa-code"></i> Consultation de l'emplois de temps</li>
                  <li><i class="fa fa-globe"></i> Consultation des absences</li>
                  <li><i class="fa fa-settings"></i> Consultation des notes </li>
                  <li><i class="fa fa-cloud"></i> Contacter permanent avec l'administration</li>
                  <li><i class="fa fa-star"></i> Suivie des remarques des Enseignants.</li>
                </ul>
                <div class="text-center">
                  {{-- <a href="javascript:void(0)" class="btn btn-info btn-raised"><i class="fa fa-cloud-download"></i> Get Now</a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-table price-table-success prominent wow zoomInDown animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">VISION ADMINISTRATION</span>
                {{-- <h3><sup>$</sup>49.99 <sub>/mo.</sub></h3> --}}
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li><i class="fa fa-code"></i> Gestion des Classes.</li>
                  <li><i class="fa fa-globe"></i> Gestion des enseignant.</li>
                  <li><i class="fa fa-settings"></i> Gestion des élèves.</li>
                  <li><i class="fa fa-cloud"></i> Gestion du personnels.</li>
                  <li><i class="fa fa-star"></i> Gestion des payements
                    .</li>
                </ul>
                <div class="text-center">
                  {{-- <a href="javascript:void(0)" class="btn btn-success btn-raised"><i class="fa fa-cloud-download"></i> Get Now</a> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="price-table price-table-warning wow zoomInUp animation-delay-2">
              <header class="price-table-header">
                <span class="price-table-category">VISION ENSEIGNANTS</span>
                {{-- <h3><sup>$</sup>99.99 <sub>/mo.</sub></h3> --}}
              </header>
              <div class="price-table-body">
                <ul class="price-table-list">
                  <li><i class="fa fa-code"></i> Notification des absences.</li>
                  <li><i class="fa fa-globe"></i> La Publication des ressources .</li>
                  <li><i class="fa fa-settings"></i> Mise en ligne des notes des élèves.</li>
                  <li><i class="fa fa-cloud"></i> La gestion automatique des bulletin.</li>
                  <li><i class="fa fa-star"></i> Atque molestiae, blanditiis ratione.</li>
                </ul>
                <div class="text-center">
                  {{-- <a href="javascript:void(0)" class="btn btn-warning btn-raised"><i class="fa fa-cloud-download"></i> Get Now</a> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--container -->
      <div class="wrap wrap-danger mt-6">
        <h2 class="text-center no-m">CE QUE DISENT NOS MEMBRES</h2>
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
                          <p>La PEN est la seule plateforme associant l’enseignement sur-mesure et le bien-être couplé á un suivi complet.</p>
                          <footer>Beogo Arstid, Developpeur web.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-3 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>La PEN c'est le tout en un spécial éducation
                            capable de maîtriser de fonctionnement de
                            toutes les facettes de vos Etablissements.</p>
                          <footer>Nanema Armelle, Développeuse web.</footer>
                        </blockquote>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card animated flipInX animation-delay-4 mb-4">
                        <blockquote class="blockquote blockquote-avatar withripple">
                          <img src="Images/Accueil/avatar.png" alt="" class="avatar d-none d-sm-block">
                          <p>Les interfaces de la PEN sont à la fois ergonomiques et intuitives adaptées aux utilisateurs débutants et initiés.</p>
                          <footer>Bado Jean , Développeur Web.</footer>
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
            <i class="fa fa-arrow-left"></i>
          </a>
          <a class="right carousel-control-next btn btn-white btn-raised" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-arrow-right"></i>
          </a>
        </div>
      </div>

@endsection
