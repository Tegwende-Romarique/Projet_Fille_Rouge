@extends('layouts.Accueil.liens')

<!DOCTYPE html>
<html lang="en">
  <body>

    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container-fluid">
      <header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="index.html">
              <!-- <img src="assets/img/demo/logo-header.png" alt=""> -->
              <span class="ms-logo animated zoomInDown animation-delay-5 color-danger">P</span>
              <h1 class="animated fadeInRight animation-delay-6"><span>lateforme Educatif Numérique</span></h1>
            </a>
          </div>
          <div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                <li class="animated fadeInRight animation-delay-3"><a href="javascript:void(0)" class="btn-circle btn-google"><i class="fa fa-google"></i></a></li>
                <li class="animated fadeInRight animation-delay-2"><a href="javascript:void(0)" class="btn-circle btn-facebook"><i class="fa fa-facebook"></i></a></li>
                <li class="animated fadeInRight animation-delay-1"><a href="javascript:void(0)" class="btn-circle btn-twitter"><i class="fa fa-twitter"></i></a></li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7"><i class="fa fa-share"></i></a>
            </div>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal"><i class="fa fa-user"></i></a>
            <form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box"><i class="fa fa-search"></i></label>
            </form>
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-8"><i class="fa fa-navicon"></i></a>
            <a href="{{ route('logout') }}" class="btn-ms-menu btn-circle btn-circle-primary  animated zoomInDown animation-delay-10"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div>
        </div>
      </header>
{{-- la partie dropdown du menu qui affiche les icones --}}
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
        <div class="container container-full">
          <div class="collapse navbar-collapse" id="ms-navbar">
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="fa fa-navicon"></i></a>
        </div>
      </nav>
{{-- la section dui contient les autres parties pages du dashboard --}}
        {{-- <div class="container container-full">
            <section class="ms-component-section">
            <div class="wrap"> --}}
            @yield('dashboard')
        {{-- </div>
        </section>
        </div> --}}
{{-- le footer du dashboard commence ici --}}
        <aside class="ms-footbar">
        <div class="container">
            <div class="row">
            <div class="col-lg-4 ms-footer-col">
                <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">A propos</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                </ul>
                </div>
                <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">News letters</h3>
                <p class="">Souscrire au news.</p>
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
                <h3 class="ms-footbar-title text-center mb-2">Nos Services</h3>
                <div class="ms-footer-media">
                    <div class="media">
                    <div class="media-body">
                        <h1 class="media-heading"><a href="javascript:void(0)">Digitalisation des Etablissements</a></h1>
                        <h1 class="media-heading"><a href="javascript:void(0)">Administration des Etablissement</a></h1>
                        <h1 class="media-heading"><a href="javascript:void(0)">Suivie et formation des Elèves</a></h2>
                        <div class="media-footer">
                        {{-- <span><i class="fa fa-time color-info-light"></i> August 18, 2016</span>
                        <span><i class="fa fa-folder-outline color-warning-light"></i> <a href="javascript:void(0)">Design</a></span> --}}
                        </div>
                    </div>
                    </div>

                </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-5 ms-footer-col ms-footer-text-right">
                <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                    <span class="ms-logo ms-logo-white ms-logo-sm mr-1 color-danger">P</span>
                    <h3 class="no-m ms-site-title"><span>Nos Contacts</span></h3>
                </div>
                <address class="no-mb">
                    {{-- <p><i class="color-danger-light fa fa-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                    <p><i class="color-warning-light fa fa-map mr-1"></i> San Francisco, CA 94107</p> --}}
                    <p><i class="color-info-light fa fa-email mr-1"></i> <a href="mailto:joe@example.com">zagr.roma@gmail.com</a></p>
                    <p><i class="color-royal-light fa fa-phone mr-1"></i>+226 77687319 </p>
                    <p><i class="color-success-light fa fa-fax mr-1"></i>+226 62599820 </p>
                </address>
                </div>
                <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                    <a href="javascript:void(0)" class="btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a href="javascript:void(0)" class="btn-circle btn-twitter"><i class="fa fa-twitter"></i></a>
                    {{-- <a href="javascript:void(0)" class="btn-circle btn-youtube"><i class="fa fa-youtube-play"></i></a><br> --}}
                    <a href="javascript:void(0)" class="btn-circle btn-google"><i class="fa fa-google"></i></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </aside>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised "><i class="fa fa-long-arrow-up"></i></a>
      </div>
    </div> <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          {{-- <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple"><i class="fa fa-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple"><i class="fa fa-account-add"></i> Register</a>
          </div> --}}
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar"><i class="fa fa-search"></i></label>
            </form>
            <div class="ms-slidebar-t">
            <h3 class="text-uppercase"><span> </span></h3>
            </div>
          </div>
        </header>

        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
            <li>
                <a class="link" href="{{url('/')}}"><i class="fa fa-home"></i> Accueil</a>
            </li>

          <li>
            <a class="link" href="{{url('liste-etablissement')}}"><i class="fa fa-graduation-cap"></i> Etablissement</a>
          </li>

          <li>
            <a class="link" href="{{url('liste-etablissement')}}"><i class="fa fa-graduation-cap"></i> Photos</a>
          </li>

          <li>
            <a class="link" href="{{url('liste-etablissement')}}"><i class="fa fa-graduation-cap"></i> Postes</a>
          </li>
          <li>
            <a class="link" href="{{url('liste-etablissement')}}"><i class="fa fa-graduation-cap"></i> Evènement</a>
          </li>
          <li>
            <a class="link" href="{{url('liste-etablissement')}}"><i class="fa fa-graduation-cap"></i> Actualités</a>
          </li>
          <li>
            <a class="link" href="{{url('liste-etablissement')}}"><i class="fa fa-graduation-cap"></i> Offres</a>
          </li>
          <li>
            <a class="link" href=""><i class="fa fa-user-plus"></i> Utilisateurs</a>
          </li>


          <li>
            <a class="link" href=""><i class="fa fa-university"></i> Cycles</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-university"></i> Classes</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-bell"></i> Enseignants</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-file-text"></i> Matières</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-bell"></i> Eleves</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-bell"></i> Parents</a>
          </li>


          <li>
            <a class="link" href=""><i class="fa fa-document"></i> Notes</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-document"></i> Absences</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-document"></i> Bibliothéque</a>
          </li>

          <li>
            <a class="link" href=""><i class="fa fa-power-off"></i> Deconnexion</a>
          </li>
        </ul>
      </div>
    </div>

  </body>
</html>
