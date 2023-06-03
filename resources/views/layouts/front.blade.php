<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Font Imports -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />  
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,700;1,400&family=Maitree:wght@300;400;500;600;700&family=Crete+Round:ital,wght@1,400&display=swap" rel="stylesheet">


  <!-- Core Style -->
  <link rel="stylesheet" href="{{ url("build/assets/all/style.css")}}" />
  <!-- Font Icons -->
  <link rel="stylesheet" href="{{ url("build/assets/all/css/font-icons.css")}}" />
  <!-- Plugins/Components CSS -->
  <link rel="stylesheet" href="{{ url("build/assets/all/css/swiper.css")}}" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="{{ url("build/assets/all/css/custom.css")}}" />

  <!-- Styles -->
  @livewireStyles

</head>

<body class="stretched block-nav-header-2">
  <!-- Document Wrapper ============================== -->
  <div id="wrapper">
    <!-- Top Bar
  ============================================= -->    
    <!-- Header
  ============================================= -->
  <header id="header" class="full-header">
    <div id="header-wrap">
      <div class="container">
        <div class="header-row">

          <!-- Logo
          ============================================= -->
          <div id="logo">
            <a href="/">
              <img class="logo-default" srcset="{{ url("build/assets/all/images/logo-trading-journey-footer.png")}}, {{ url("build/assets/all/images/logo-trading-journey-footer.png")}}" src="{{ url("build/assets/all/images/logo-trading-journey-footer.png")}}" alt="TMGM Logo">
              <img class="logo-dark" srcset="{{ url("build/assets/all/images/logo-trading-journey-footer.png")}}, {{ url("build/assets/all/images/logo-trading-journey-footer.png")}}" src="{{ url("build/assets/all/images/logo-trading-journey-footer.png")}}" alt="TMGM Logo">
            </a>
          </div><!-- #logo end -->                        

          <div class="primary-menu-trigger">
            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
              <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
            </button>
          </div>

          <div class="header-misc">

            <!-- Language
            ============================================= -->
            <div class="col-12 col-lg-3 col-md-2">
              <div
                class="top-links d-flex justify-content-center justify-content-lg-start"
              >
              <ul class="top-links-container">
                @if(app()->getLocale() =='en') 
                <li class="top-links-item">
                  <a href="{{ route('front.changeLang','en') }}">en</a>
                  <ul class="top-links-sub-menu" style="width: 53px; left: 0">
                    <li class="top-links-item"><a href="{{ route('front.changeLang','id') }}">id</a></li>
                  </ul>
                </li>
                @else
                <li class="top-links-item">
                  <a href="{{ route('front.changeLang','id') }}">id</a>
                  <ul class="top-links-sub-menu" style="width: 53px; left: 0">
                    <li class="top-links-item"><a href="{{ route('front.changeLang','en') }}">en</a></li>
                  </ul>
                </li>
                @endif
                
              </ul>
              </div>
              <!-- .Language end -->
            </div><!-- #language end -->    

          </div>

          <!-- Primary Navigation
          ============================================= -->
          <nav class="primary-menu">

            <ul class="menu-container">
              <li class="menu-item">
                <a class="menu-link" href="/"><div>Home</div></a>                
              </li>
              <li class="menu-item">
                <a class="menu-link" href="#"><div>Packages</div></a>
                <ul class="sub-menu-container">
                  <li class="menu-item">
                    <a class="menu-link" href="/euro-swing-master/euro-swing-master-n2i8j"><div><i class="bi-currency-euro"></i>Euro Swing Master</div></a>                   
                  </li>
                  <li class="menu-item">
                    <a class="menu-link" href="/pound-swing-master/pound-swing-master-8kkbd"><div><i class="bi-currency-pound"></i>Pound Swing Master</div></a>                    
                  </li>                                                      
                </ul>
              </li>                                                        
            </ul>
          </nav><!-- #primary-menu end -->         
        </div>
      </div>
    </div>
    <div class="header-wrap-clone"></div>
  </header><!-- #header end -->

 

  <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-50 min-vh-md-75">
    <div class="slider-inner">

      <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
          <div class="swiper-slide dark">
            <div class="container">
              <div class="slider-caption slider-caption-center">
                <h1 data-animate="fadeInUp">{{ __('messages.frontText1') }}</h1>
                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{{ __('messages.frontText2') }} <h1> <span class="text-white bg-white rounded">{{ __('messages.frontText3') }}</span></h1></p>
              </div>
            </div>
            <div class="swiper-slide-bg" style="background-image: url('{{ url("build/assets/all/images/slider/swiper/1.jpg")}}');"></div>
          </div>
          {{-- <div class="swiper-slide dark">
            <div class="container">
              <div class="slider-caption slider-caption-center">
                <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
              </div>
            </div>
            <div class="video-wrap no-placeholder">
              <video poster="{{ url("build/assets/all/images/videos/explore-poster.jpg")}}" preload="auto" loop autoplay muted playsinline>
                <source src='{{ url("build/assets/all/images/videos/explore.mp4")}}' type='video/mp4'>
                <source src='{{ url("build/assets/all/images/videos/explore.webm")}}' type='video/webm'>
              </video>
              <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container">
              <div class="slider-caption">
                <h2 data-animate="fadeInUp">Great Performance</h2>
                <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
              </div>
            </div>
            <div class="swiper-slide-bg" style="background-image: url('{{ url("build/assets/all/images/slider/swiper/3.jpg")}}'); background-position: center top;"></div>
          </div> --}}
        </div>
        <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
        <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
        <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
      </div>

    </div>
  </section>

  <!-- Content
  ============================================= -->
  <section id="content">
    <div class="content-wrap">
      <!-- #blade content start -->
      {{ $slot }}  
      <!-- #blade content end -->
    </div>
  </section><!-- #content end -->
   

    <!-- Footer  ========================= -->
    <footer id="footer" class="dark">
      <div class="container">
        <!-- Footer Widgets
      ============================================= -->
        <div class="footer-widgets-wrap">
          <div class="row col-mb-50">
            <div class="col-lg-8">
              <div class="row col-mb-50">
                <div class="col-md-4">
                  <div class="widget">                    

                    <p>
                      Industry-leading   <strong>Expert Advisors</strong>
                      <strong>For MetaTrader 4</strong> &amp;
                      <strong>MetaTrader 5</strong>
                    </p>

                    <div
                      style="
                        background: url('{{ url("build/assets/all/images/world-map.png")}}') no-repeat
                          center center;
                        background-size: 100%;
                      "
                    >                      
                    </div>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="widget widget_links">
                    <h4>Jump In</h4>

                    <ul>
                      <li>
                        <a href="/"
                          >Home</a
                        >
                      </li>
                      <li>
                        <a
                          href="/euro-swing-master/euro-swing-master-n2i8j"
                          >Euro Swing Master</a
                        >
                      </li>
                      <li>
                        <a
                          href="/pound-swing-master/pound-swing-master-8kkbd"
                          >Pound Swing Master</a
                        >
                      </li>
                      {{-- <li>
                        <a href="/faqs"
                          >FAQs</a
                        >
                      </li>                         --}}
                    </ul>
                  </div>
                </div>

                <div class="col-md-4">                  
                  <div class="counter counter-small">
                    <span
                      data-from="0"
                      data-to="100"
                      data-refresh-interval="80"
                      data-speed="3000"
                      data-comma="true"
                    ></span>
                  </div>
                  <h5 class="mb-0">Clients</h5>
                </div>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="row col-mb-50">
                <div class="col-md-4 col-lg-12">
                  <div class="widget">
                    <div class="row col-mb-30">
                      <div class="col-lg-6">                        
                      </div>                      
                    </div>
                  </div>
                </div>          
              </div>
            </div>
          </div>
        </div>
        <!-- .footer-widgets-wrap end -->
      </div>

       <!-- Copyrights
    ============================================= -->
    <div id="copyrights">
      <div class="container">
        <div class="row col-mb-30">
          <div class="text-center col-md-6 text-md-start">
            Copyrights &copy; 2023 All Rights Reserved by tmgmsocial.com.<br />
            <div class="copyright-links">
              <a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
            </div>
          </div>

          <div class="text-center col-md-6 text-md-end">
            <div class="mb-2 d-flex justify-content-center justify-content-md-end">              
              <a href="https://t.me/TradingJourneyDiscussion" class="border-transparent social-icon si-small h-bg-telegram">
                <i class="fa-brands fa-telegram"></i>
                <i class="fa-brands fa-telegram"></i>
              </a>
            </div>

            <i class="bi-envelope"></i> admin@tmgmsocial.com            
          </div>
          
        </div>
        <div class="text-center col-md-12 text-md-start">
          Disclaimer<br />
          The information provided on this website is general in nature only and does not constitute personal financial advice. Before acting on any information on this website you should consider the appropriateness of the information having regard to your objectives, financial situation and needs. Investing in CFDs and Margin FX Contracts carries significant risks and is not suitable for all investors. You may lose more than your initial deposit. You don’t own, or have, any interest in the underlying assets. We recommend that you seek independent advice and ensure fully understand the risks involved before trading. It is important that you read and consider disclosure documents before you acquire any product listed on the website.
        </div>
      </div>
    </div>
    <!-- #copyrights end -->
    </footer>
    <!-- #footer end -->
  </div>
  <!-- #wrapper end -->

  <!-- Go To Top
	============================================= -->
  <div id="gotoTop" class="uil uil-angle-up"></div>
<!-- JavaScripts
	============================================= -->
  <script src="{{ url("build/assets/all/js/jquery.js")}}"></script>
  <script src="{{ url("build/assets/all/js/functions.js")}}"></script>  
  <script src="{{ url("build/assets/all/js/plugins.swiper.js")}}"></script>
  <script src="{{ url("build/assets/all/js/plugins.counter.js")}}"></script>
  <script src="{{ url("build/assets/all/js/plugins.bootstrap.js")}}"></script>
  
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <!--  Placeholder JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.min.js"></script>
  {{ $script ?? '' }}
  {{ $modal ?? '' }}
  

</body>

</html>
