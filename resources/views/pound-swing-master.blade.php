<x-front-layout>    
    <div class="text-center bg-light">                  
        <div class="row col-mb-50">
          <div class="p-6 col-md-5 d-inline-flex" style="min-height: 350px">
            <img src="{{ url("build/assets/all/images/logo-pound-swing-master.png")}}" alt="logo-pound-swing-master">
          </div>

          <div class="text-center col-md-7 text-md-start bg-light">

            <div id="sini" class="mt-4 heading-block">
              <h2 class="text-black fw-bold">{{ __('messages.poundSwingText1') }}</h2>
              <span>{{ __('messages.poundSwingText2') }}</span>
            </div>

            <p><b>{{ __('messages.poundSwingText1') }}</b> {{ __('messages.poundSwingText3') }}</p>
              <p>{{ __('messages.poundSwingText4') }}</p>
              <p>{{ __('messages.poundSwingText5') }}</p>

            {{-- <a href="{{ route('front.checkout', $item->slug) }}" class="text-black button button-3d button-large bg-golden">Rent Now</a> --}}
            
            @if(app()->getLocale() =='en')             
            <a href="{{ $item->url_en }}" target="_blank" class="text-white button button-3d button-large bg-hijau-stabilo">
              {{ __('messages.poundSwingText6') }}</a>
            @elseif (app()->getLocale() =='id')             
            <a href="{{ $item->url_id }}" target="_blank" class="text-white button button-3d button-large bg-hijau-stabilo">
              {{ __('messages.poundSwingText6') }}</a>
            @elseif (app()->getLocale() =='th')             
            <a href="{{ $item->url_th }}" target="_blank" class="text-white button button-3d button-large bg-hijau-stabilo">
              {{ __('messages.poundSwingText6') }}</a>
            @elseif (app()->getLocale() =='vi')             
            <a href="{{ $item->url_vi }}" target="_blank" class="text-white button button-3d button-large bg-hijau-stabilo">
              {{ __('messages.poundSwingText6') }}</a>
            @endif  

          </div>
        </div>  
        <div class="mt-6 fancy-title title-border title-center">
          <h3>{{ __('messages.poundSwingText7') }}</h3>
        </div>

        <div class="mb-4 row pricing col-mb-30 g-0">

          <div class="col-md-6 col-lg-3">

            <div class="text-center pricing-box">
              <div class="pricing-title text-uppercase title-sm">
                <h3>{{ __('messages.poundSwingText8') }}</h3>
              </div>              
              <div class="pricing-features">
                <ul>
                  <li>{{ __('messages.poundSwingText10') }} &dollar; {{ __('messages.poundSwingText9') }}</li>
                  <li>{{ __('messages.poundSwingText11') }} <strong>{{ __('messages.poundSwingText12') }}</strong></li>
                  <li>{{ __('messages.poundSwingText13') }} <strong>{{ __('messages.poundSwingText14') }}</strong></li>
                  <li>{{ __('messages.poundSwingText15') }} <strong>{{ __('messages.poundSwingText16') }}</strong></li>
                  <li>{{ __('messages.poundSwingText17') }}</li>                                                        
                </ul>
              </div>
              <div class="px-4 pricing-action">
                

                @if(app()->getLocale() =='en')                             
                  <a href="{{ $item->url_en }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='id')                             
                  <a href="{{ $item->url_id }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='th')                             
                  <a href="{{ $item->url_th }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='vi')                             
                  <a href="{{ $item->url_vi }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @endif 

              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-3">

            <div class="text-center pricing-box">
              <div class="pricing-title text-uppercase title-sm">
                <h3>{{ __('messages.poundSwingText18') }}</h3>
              </div>              
              <div class="pricing-features">
                <ul>
                  <li>{{ __('messages.poundSwingText10') }} &dollar; {{ __('messages.poundSwingText19') }}</li>
                  <li>{{ __('messages.poundSwingText11') }} <strong>{{ __('messages.poundSwingText12') }}</strong></li>
                  <li>{{ __('messages.poundSwingText13') }} <strong>{{ __('messages.poundSwingText14') }}</strong></li>
                  <li>{{ __('messages.poundSwingText15') }} <strong>{{ __('messages.poundSwingText20') }}</strong></li>
                  <li>{{ __('messages.poundSwingText17') }}</li>                                                                                                           
                </ul>
              </div>
              <div class="px-4 pricing-action">
                
                @if(app()->getLocale() =='en')                                               
                  <a href="{{ $item->url_en }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='id')                                               
                  <a href="{{ $item->url_id }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='th')                                               
                  <a href="{{ $item->url_th }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='vi')                                               
                  <a href="{{ $item->url_vi }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @endif 
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-3">

            <div class="text-center pricing-box">
              <div class="pricing-title text-uppercase title-sm">
                <h3>{{ __('messages.poundSwingText21') }}</h3>
              </div>              
              <div class="pricing-features">
                <ul>
                  <li>{{ __('messages.poundSwingText10') }} &dollar; {{ __('messages.poundSwingText22') }}</li>
                  <li>{{ __('messages.poundSwingText11') }} <strong>{{ __('messages.poundSwingText12') }}</strong></li>
                  <li>{{ __('messages.poundSwingText13') }} <strong>{{ __('messages.poundSwingText14') }}</strong></li>
                  <li>{{ __('messages.poundSwingText15') }} <strong>{{ __('messages.poundSwingText23') }}</strong></li>
                  <li>{{ __('messages.poundSwingText17') }}</li> 
                </ul>
              </div>
              <div class="px-4 pricing-action">
                
                @if(app()->getLocale() =='en')                                                                 
                  <a href="{{ $item->url_en }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='id')                                                                 
                  <a href="{{ $item->url_id }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='th')                                                                 
                  <a href="{{ $item->url_th }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='vi')                                                                 
                  <a href="{{ $item->url_vi }}" target="_blank" class="btn btn-danger w-100 btn-lg">{{ __('messages.poundSwingText6') }}</a>
                @endif
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-3">

            <div class="text-center pricing-box">
              <div class="pricing-title text-uppercase title-sm">
                <h3>{{ __('messages.poundSwingText24') }}</h3>
              </div>              
              <div class="pricing-features">
                <ul>
                  <li>{{ __('messages.poundSwingText10') }} &dollar; {{ __('messages.poundSwingText25') }}</li>
                  <li>{{ __('messages.poundSwingText11') }} <strong>{{ __('messages.poundSwingText12') }}</strong></li>
                  <li>{{ __('messages.poundSwingText13') }} <strong>{{ __('messages.poundSwingText14') }}</strong></li>
                  <li>{{ __('messages.poundSwingText15') }} <strong>{{ __('messages.poundSwingText26') }}</strong></li>
                  <li>{{ __('messages.poundSwingText17') }}</li>                                                       
                </ul>
              </div>
              <div class="px-4 pricing-action">
                
                @if(app()->getLocale() =='en')                                                                                   
                  <a href="{{ $item->url_en }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='id')                                                                                   
                  <a href="{{ $item->url_id }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='th')                                                                                   
                  <a href="{{ $item->url_th }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @elseif (app()->getLocale() =='vi')                                                                                   
                  <a href="{{ $item->url_vi }}" target="_blank" class="btn btn-danger w-100 btn-lg bg-color border-color">{{ __('messages.poundSwingText6') }}</a>
                @endif
              </div>
            </div>

          </div>

        </div>                        
        <div class="row justify-content-center">
          <div class="col-md-10">                        
            <p class="mb-4 text-black text-uppercase fw-semibold ls-1 font-primary">{{ __('messages.poundSwingText27') }}</p>
            <h1 class="display-3 fw-normal" style="letter-spacing: -1px;">{{ __('messages.poundSwingText28') }}<div class="text-black badge">{{ __('messages.poundSwingText29') }}</div> 
            </h1>
            <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
            <h3>{{ __('messages.poundSwingText30') }}</h3>

            <div class="mb-0 row col-mb-50">
              <div class="col-md-6">
                <ul class="iconlist iconlist-lg">
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText31') }}</span></li>
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText32') }}</span></li>
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText33') }}</span></li>
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText34') }}</span></li>                            
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText35') }}</span></li>
                </ul>
              </div>

              <div class="col-md-6">
                <ul class="iconlist iconlist-lg">
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText36') }}</span></li>
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText37') }}</span></li>
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText38') }}</span></li>                            
                  <li class="px-3 py-2 rounded bg-hijau-stabilo bg-opacity-10">
                    <i class="bi-check-circle-fill"></i> <span>{{ __('messages.poundSwingText39') }}</span></li>
                </ul>
              </div>
            <div class="divider divider-right"><i class="bi-heart-fill"></i></div>
            
            <h3>{{ __('messages.poundSwingText40') }}</h3>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>        
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/pound1.png")}}" alt="Backtest Result">
                  <div class="carousel-caption d-none d-lg-block">
                    <h3 class="mb-2 text-black">Backtest Result</h3>                              
                  </div>
                </div>
                <div class="carousel-item active">
                  <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/pound2.png")}}" alt="Trade Result">
                  <div class="carousel-caption d-none d-lg-block">
                    <h3 class="mb-2 text-black">Trade Result</h3>                              
                  </div>
                </div>
                <div class="carousel-item active">
                  <img class="h-auto d-block w-100" src="{{ url("build/assets/all/images/pound3.png")}}" alt="Trade Result">
                  <div class="carousel-caption d-none d-lg-block">
                    <h3 class="mb-2 text-black">Trade Result</h3>                              
                  </div>
                </div>
               
               
                
               
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>                    
          </div>
        </div>
    </div>  
    <div class="m-0 alert alert-primary rounded-0 fixed-bottom bg-golden" data-animate="fadeInUp faster">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-auto">
            <strong><i class="bi-boxes"></i> {{ __('messages.poundSwingText41') }}</strong> {{ __('messages.poundSwingText42') }}
          </div>
          <div class="mt-3 col-lg-auto mt-lg-0">                       

            @if(app()->getLocale() =='en') 
            <a href="{{ $item->url_en }}" target="_blank" class="btn btn-success">{{ __('messages.poundSwingText6') }}</a>
            @elseif (app()->getLocale() =='id') 
            <a href="{{ $item->url_id }}" target="_blank" class="btn btn-success">{{ __('messages.poundSwingText6') }}</a>
            @elseif (app()->getLocale() =='th') 
            <a href="{{ $item->url_th }}" target="_blank" class="btn btn-success">{{ __('messages.poundSwingText6') }}</a>
            @elseif (app()->getLocale() =='vi') 
            <a href="{{ $item->url_vi }}" target="_blank" class="btn btn-success">{{ __('messages.poundSwingText6') }}</a>
            @endif

            <button type="button" class="btn-close btn btn-link float-lg-none text-dark ms-md-3" data-bs-dismiss="alert" aria-hidden="true"></button>
          </div>
        </div>
      </div>
    </div>
                    
</div>
</x-front-layout>
