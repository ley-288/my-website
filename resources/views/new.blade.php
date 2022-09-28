
@extends('layout')

@section('content')

    <div class="mid-section">
            <div style="display: flex; flex-direction:column; justify-content: center; align-items: center; z-index:10; text-align:center;">
                <div class="home-section">
                    <div class="over-scroll-hero">
                        <div>
                            <video src="{{ asset('images/videos/jupiter.mp4') }}" autoplay loop muted playsinline type="video/mp4" class="hero-background" style="top:0;"></video>
                        </div>
                        <div class="hero-slide-1">
                            <div class="hero-slide-arrow-back">
                                <i class="material-icons-round box_icon">keyboard_arrow_left</i>
                            </div>
                            <h1 class="title-card hero-typeface" id="second-slide">@lang('applicazione.free_consultation')</br> @lang('applicazione.better_it')</h1>
                            <img src="{{ asset('images/videos/jupiter.gif') }}"class="hero-background" style="top:0;">
                        </div>
                    </div>
                    <div style="z-index:4; position:absolute;">
                        <img src="{{ asset('images/logos/jiant2.png') }}" id="jiant-image"/>
                        <h1 class="hero-typeface-logo">J I A N T</h1><h2 class="hero-typeface">@lang('applicazione.web_agency')</h2></br>
                        <h6 class="hero-typeface">WEB DEVELOPMENT | SEO | MARKETING | SOCIAL | GRAPHIC DESIGN</h6>
                        </br>
                        </br>
                        <div class="language-block" id="dont-show-me">
                            <a href="{{url('/')}}/language/it" @if(Lang::locale() == 'it') class="text-muted" style="pointer-events:none;" @endif><h6> IT </h6></a>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="{{url('/')}}/language/en" @if(Lang::locale() == 'en') class="text-muted" style="pointer-events:none;" @endif><h6> EN </h6></a>
                        </div>
                    </div>
                    <div style="position: absolute;right: 0;">
                        <i class="material-icons-round box_icon">keyboard_arrow_right</i>
                    </div>
                    <div style="position: absolute;bottom: 0; z-index: 20;">
                        <i class="material-icons-round box_icon">keyboard_arrow_down</i>
                    </div>
                </div>

                <div class="home-section over-top">
                    <i class="material-icons-round box_icon">question_mark</i>
                    </br>
                    <h2>@lang('applicazione.who_are_we')</h2>
                    </br>
                    </br>
                    <div class="text-mute">
                        <h6>@lang('applicazione.have_you_ever_woken')</h6></br>
                        <h6>@lang('applicazione.have_you_ever_had')</h6></br>
                        <h6>@lang('applicazione.do_you_need_to_modernise')</h6></br>
                        <h6>@lang('applicazione.dont_wait_longer')</h6></br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" id="contact-modal-button" data-toggle="modal" data-target="#contactModal">
                          @lang('applicazione.contact_us')
                        </button>
                    </div>
                </div>

                <div class="home-section mcl">
                    <div class="mobile-card-layout">
                        <div class="carousel-pre-wrap">
                            <div id="mainWrapper">
                                <div id="cardsWrapper">
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup1.png?v=1.1') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">rocket_launch</i>
                                                <h3>@lang('applicazione.headline_1')</h3>
                                                <p class="card-para" >@lang('applicazione.description_1')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup2.jpeg?v=1.1') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                            <i class="material-icons-round box_icon">history_edu</i>
                                                <h3>@lang('applicazione.headline_2')</h3>
                                                <p class="card-para" >@lang('applicazione.description_2')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup3.jpeg?v=1.1') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">camera</i>
                                                <h3>@lang('applicazione.headline_3')</h3>
                                                <p class="card-para" >@lang('applicazione.description_3')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup4.jpeg?v=1.1') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">devices</i>
                                                <h3>@lang('applicazione.headline_4')</h3>
                                                <p class="card-para" >@lang('applicazione.description_4')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup5.jpeg?v=1.1') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">trending_up</i>
                                                <h3>@lang('applicazione.headline_5')</h3>
                                                <p class="card-para" >@lang('applicazione.description_5')</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup7.jpeg?v=1.1') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">bar_chart</i>
                                                <h3>@lang('applicazione.headline_7')</h3>
                                                <p class="card-para" >@lang('applicazione.description_7')</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-section over-top">
                    <i class="material-icons-round box_icon">lightbulb</i>
                    </br>

                    <div class="info-box-container">
                        <div class="info-box">
                            <h6>@lang('applicazione.headline_10')</h6></br>
                            <h6>"GREAT SCOTT!" @lang('applicazione.description_10')</h6>
                        </div>
                        <div class="info-box">
                          <h6>@lang('applicazione.headline_8')</h6></br>
                            <h6>@lang('applicazione.description_8')</h6>
                        </div>
                        <div class="info-box">
                            <h6>@lang('applicazione.headline_9')</h6></br>
                            <h6>@lang('applicazione.description_9')</h6>
                        </div>
                    </div>
                </div>

                <div class="home-section over-top">
                    <i class="material-icons-round box_icon">devices</i>
                    </br>
                    <h2>@lang('applicazione.responsive_websites')</h2>
                    </br>
                    <div class="phone-laptop-layout">
                        <img src="{{ asset('images/bg/macbook.png') }}" class="laptop-image">
                        <img src="{{ asset('images/bg/iphone.png') }}" class="phone-image">
                    </div>
                    </br>
                    <div class="text-mute">
                        <h6>@lang('applicazione.web_or_app')</h6>
                        <h6>@lang('applicazione.whichever')</h6>
                    </div>
                    </br>
                </div>


                <div class="home-section over-top" style="display:none;">
                    <div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/wix.png') }}" alt="wix">
                            <h6>wix</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/wordpress.png') }}" alt="wordpress">
                            <h6>wordpress</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/weebly.png') }}" alt="weebly">
                            <h6>weebly</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/squarespace.png') }}" alt="squarespace">
                            <h6>squarespace</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/shopify.png') }}" alt="shopify">
                            <h6>shopify</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/paypal.png') }}" alt="paypal">
                            <h6>paypal</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/html.png') }}" alt="html">
                            <h6>html</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/mailchimp.png') }}" alt="mailchimp">
                            <h6>mailchimp</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/appstore.png') }}" alt="appstore">
                            <h6>appstore</h6>
                        </div>
                        <div>
                            <img class="image-web" src="{{ asset('images/websites/playstore.png') }}" alt="playstore">
                            <h6>playstore</h6>
                        </div>
                    </div>
                </div>

                <div class="home-section over-top">
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="margin-top: 30vh; display: flex;" class="column-display">
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.brand_awareness')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.brand_reputation')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.social_engagement')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.follower')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.visibility')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.traffic')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.conversions')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.clients')
                                </div>
                                <div class="icon-font-layout">
                                    <i class="material-icons-round arrow_upward">arrow_upward</i>@lang('applicazione.revenue')
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="home-section over-top">
                        <div class="carousel-holster">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                </ul>
                                <!-- The slideshow -->
                                <div class="carousel-inner" style="background-image: url({{ asset('images/bg/stars.jpeg?v=1.1') }});">
                                    <div class="carousel-item active" id="slide-bg">
                                        <div class="inner-item-layout">
                                            <a href="https://photojournal.jpl.nasa.gov/beta/#q=*%3A*">
                                                <img src="{{ asset('images/misc/nasa.png') }}" class="info-image">
                                                <img src="{{ asset('images/misc/juno.png') }}" class="info-image juno">
                                                </br>
                                                <h3 class="caro-text">Images Courtesy of NASA, mission Juno</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="slide-bg">
                                        <div class="inner-item-layout">
                                            <a href="https://www.laravel.com">
                                                <img src="{{ asset('images/misc/laravel.png') }}" class="info-image">
                                                </br>
                                                <h3 class="caro-text">J I A N T </br> built with Laravel</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" id="slide-bg">
                                        <div class="inner-item-layout">
                                            <img src="{{ asset('images/logos/jiant2.png') }}" class="info-image">
                                            </br>
                                            <h3 style="color:white; font-size:2rem;">J I A N T</h3>
                                        </div>
                                    </div>
                                </div>
                                <!-- Left and right controls -->
                                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#demo" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </div>
                        </div>
                </div>

                <div class="home-section over-top">
                    <i class="material-icons-round box_icon">format_quote</i>
                    </br>
                    <h2>@lang('applicazione.food_for_thought')</h2>
                    </br>
                    </br>
                    <div class="text-mute">
                        <h6>"@lang('applicazione.jobs_quote_1')</br>
                        @lang('applicazione.jobs_quote_2')"</br>
                        - Steve Jobs (Founder of Apple computers Inc.)</h6></br>
                        <h6>@lang('applicazione.jobs_quote_cont')</h6></br></br>
                    </div>
                    <h6>@lang('applicazione.what_can_i_do')</h6></br>
                    <i class="material-icons-round" style="font-size:80px;">keyboard_double_arrow_down</i>
                    </br>
                </div>


                        <div class="home-section over-top">
                        <div style="display: flex;height: 80vh;width: 100vw;justify-content: center;align-content: center;align-items: center;">
                            <div>
                                <h3>@lang('applicazione.contact_us_today')</h3>
                                </br></br>
                                <div style="display: flex; justify-content: space-evenly;">
                                    <div>
                                        <a href="mailto:team@jiant.io">
                                            <div>
                                                <img src="{{ asset('images/misc/macm.png?v=1.1') }}" class="contact-icon"/>
                                            </div>
                                            <div>
                                                team@jiant.io
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://api.whatsapp.com/send?phone=393755499384">
                                            <div>
                                                <img src="{{ asset('images/misc/what.png') }}" class="contact-icon"/>
                                            </div>
                                            <div>
                                                Whatsapp
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="jiant-footer">
                            <div class="jiant-footer-details">
                                <h1 class="footer-logo">J I A N T</h1>
                            </div>
                            <div style="display: flex;justify-content: flex-end;">


                            <div>
                                <a href="https://www.facebook.com/jiant.web.agency/"> <img src="{{ asset('images/misc/facebook.png?v=1.1') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                            <div>
                                <a href="#"> <img src="{{ asset('images/misc/instagram.png') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                            <div>
                                <a href="https://www.tiktok.com/@jiant_io"> <img src="{{ asset('images/misc/tiktok.png?v=1.1') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                            <div>
                                <a href="https://twitter.com/jiant_io"> <img src="{{ asset('images/misc/twit.png') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                            <div>
                                <a href="https://www.youtube.com/channel/UCRS5ZvTJi7vpU7L4D6BlypQ"> <img src="{{ asset('images/misc/yout.png') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                            <div>
                                <a href="https://www.linkedin.com/company/jiant-io"> <img src="{{ asset('images/misc/link.png') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                            <div>
                                <a href="https://www.reddit.com/user/jiant_io"> <img src="{{ asset('images/misc/red.png') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                        </div>
                    </div>
                    <div class="privacy-cookies">
                        <div style="margin-right: 10px;">2022</div>
                        <div style="margin-right: 10px;"><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></div>
                        <div><a href="{{url('/')}}/cookie-policy">Cookie Policy</a></div>
                    </div>

            </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">@lang('applicazione.how_can_we_help')</h5>

      </div>
      <div class="modal-body">
         <div>
                                <h6 style="text-align: center;">
                                    @lang('applicazione.whatsapp_email')

                                </h6>
                                </br></br>
                                <div style="display: flex; justify-content: space-evenly;">
                                    <div>
                                        <a href="mailto:team@jiant.io">
                                            <div>
                                                <img src="{{ asset('images/misc/macm.png?v=1.1') }}" class="contact-icon" style="height:120px;"/>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://api.whatsapp.com/send?phone=393755499384">
                                            <div>
                                                <img src="{{ asset('images/misc/what.png') }}" class="contact-icon" style="height:120px;"/>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            </br></br>
                            <h6 style="text-align: center;">@lang('applicazione.always_available')</h6>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>


@endsection
