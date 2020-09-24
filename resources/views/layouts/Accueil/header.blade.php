
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container-fluid">
      <!-- Modal -->
      
      <header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="index.html">
              <!-- <img src="assets/img/demo/logo-header.png" alt=""> -->
              <span class="ms-logo animated zoomInDown animation-delay-5 color-danger">P</span>
              <h1 class="animated fadeInRight animation-delay-6"><span>lateforme<span class="color-warning">E</span> ducatif <span class="color-success">N</span> umerique</span></h1>
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
           
            <form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box"><i class="fa fa-search"></i></label>
            </form>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-primary">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->
              <span class="ms-logo ms-logo-sm">P</span>
              <span class="ms-title"><strong>lateforme Educatif Numerique</strong></span>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="home">Accueil</a>
              </li>

              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Blog <i class="fa fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="blog-sidebar.html"><i class="fa fa-view-compact"></i> Blog Sidebar 1</a></li>
                  <li><a class="dropdown-item" href="blog-sidebar2.html"><i class="fa fa-view-compact"></i> Blog Sidebar 2</a></li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-8" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="portfolio">Portfolio <i class="fa fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="portfolio-filters_sidebar.html"><i class="fa fa-view-compact"></i> Portfolio Sidebar Filters</a></li>
                  <li><a class="dropdown-item" href="portfolio-filters_topbar.html"><i class="fa fa-view-agenda"></i> Portfolio Topbar Filters</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">E-Commerce <i class="fa fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="ecommerce-filters.html">E-Commerce Sidebar</a></li>
                  <li><a class="dropdown-item" href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a></li>
                  
                </ul>
              </li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu"><i class="fa fa-menu"></i></a>
        </div> <!-- container -->
      </nav>
     
        <div>
          @yield('content')
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
                  <li><a href="page-team2.html"><i class="fa fa-accounts"></i> Our Team</a></li>
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
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="...">
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
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="...">
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
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="...">
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
    
