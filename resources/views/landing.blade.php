<x-front-layout>
    <div class="p-5 mb-6 promo promo-full promo-border header-stick">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12 col-lg">
              {{-- <h3>Try Premium Free for <span>30 Days</span> and you'll never regret it!</h3> --}}
              <h3>{{ __('messages.landingText1') }}</h3>
              <span>{{ __('messages.landingText2') }} <em>{{ __('messages.landingText3') }}</em> {{ __('messages.landingText4') }}</span>
            </div>
            <div class="mt-4 col-12 col-lg-auto mt-lg-0">
              <a href="#" class="m-0 button button-reveal button-large button-circle text-end"><i class="uil uil-angle-right-b"></i><span>{{ __('messages.landingText5') }}</span></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">

        <div class="row col-mb-50">

          <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-effect">
              <div class="fbox-icon">
                <a href=""><i class="uil-chart-line i-alt"></i></a>
              </div>
              <div class="fbox-content">
                <h3>{{ __('messages.landingText7') }}</h3>
                <p>{{ __('messages.landingText6') }}</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-effect">
              <div class="fbox-icon">
                <a href="#"><i class="bi-sign-stop i-alt"></i></a>
              </div>
              <div class="fbox-content">
                <h3>{{ __('messages.landingText8') }}</h3>
                <p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all others graphics are optimized.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-effect">
              <div class="fbox-icon">
                <a href="#"><i class="bi-box i-alt"></i></a>
              </div>
              <div class="fbox-content">
                <h3>Powerful Performance</h3>
                <p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-effect">
              <div class="fbox-icon">
                <a href="#"><i class="bi-layers-half i-alt"></i></a>
              </div>
              <div class="fbox-content">
                <h3>Premium Sliders Included</h3>
                <p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-effect">
              <div class="fbox-icon">
                <a href="#"><i class="bi-droplet-half i-alt"></i></a>
              </div>
              <div class="fbox-content">
                <h3>Unlimited Color Options</h3>
                <p>Change the color scheme of the Theme in a flash just by changing the 6-digit HEX code in the colors.php file.</p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-lg-4">
            <div class="feature-box fbox-effect">
              <div class="fbox-icon">
                <a href="#"><i class="bi-textarea-t i-alt"></i></a>
              </div>
              <div class="fbox-content">
                <h3>Customizable Fonts</h3>
                <p>Use any Font you like from Google Web Fonts, Typekit or other Web Fonts. They will blend in perfectly.</p>
              </div>
            </div>
          </div>

        </div>

        <div class="clear"></div><div class="line"></div>

        <div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-margin="30" data-nav="false" data-loop="true" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

          <a href="#"><img src="{{ url("build/assets/all/images/clients/1.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/2.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/3.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/4.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/5.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/6.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/7.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/8.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/9.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/10.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/11.png")}}" alt="Clients"></a>
          <a href="#"><img src="{{ url("build/assets/all/images/clients/12.png")}}" alt="Clients"></a>

        </div>

      </div>
</x-front-layout>
