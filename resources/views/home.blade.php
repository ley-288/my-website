
@extends('layout')

@section('content')

    <div class="mid-section">
        <div class="parallax2" style="margin-left:0; left:0; ">
            <div class="parallax__layer parallax__layer__0" style="height: 100vh; width:100vw; margin-left:0; left:0; background-image:url(https://i.pinimg.com/originals/c8/4c/0a/c84c0aeedf27fb4191b427f1bd9d9f3c.jpg); background-size:cover;">
            </div>
            <div class="parallax__layer parallax__layer__7" style="height: 100vh; width:100vw;display: flex;align-items: flex-end;justify-content: center;z-index: 2;">
               <i class="material-icons-round" style="font-size:100px; color:white;">keyboard_double_arrow_down</i>
            </div>
            <div class="parallax__layer parallax__layer__6">
                <canvas id="canvas" style="filter:brightness(1.1);"></canvas>
            </div>
            <div class="parallax__layer parallax__layer__2">
                <img src="{{ asset('images/hi_r/io.png') }}" id="io-image"/>
            </div>
            <div class="parallax__layer parallax__layer__3">
                <img src="{{ asset('images/hi_r/europa.png') }}" id="europa-image"/>
            </div>
            <div class="parallax__layer parallax__layer__4">
                <img src="{{ asset('images/hi_r/ganymede.png') }}" id="ganymede-image"/>
            </div>
            <div class="parallax__layer parallax__layer__5">
                <img src="{{ asset('images/hi_r/callisto.png') }}" id="callisto-image"/>
            </div>
            <div class="parallax__layer parallax__layer__0">
                <img src="{{ asset('images/hi_r/jupiter.png') }}" id="jupiter-image"/>
            </div>
            <div class="parallax__cover" style="background:#000000d9; top:99%; color:white; backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);">
                <div style="display: flex; flex-direction:column; justify-content: center; align-items: center; z-index:10; text-align:center;">
                    </br></br></br></br></br></br></br>
                    <img src="{{ asset('images/logos/jiant2.png') }}" id="jiant-image"/>
                    </br>



                    <h1 style="color:white; font-family:phosphate-solid; font-size:4rem;">J I A N T</h1><h2>WEB AGENCY ROMA, ITALIA</h2></br>
                    <h6 style="padding:10px;">WEB DEVELOPMENT | SEO | MARKETING | SOCIAL | GRAPHICS</h6>
                    </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
                    <div style="color:white; display:flex; width:100vw; flex-direction:row; flex-wrap:wrap; justify-content:center; margin-top:-100px;">
                        <div style="display: flex;width: 100vw;justify-content: center;align-content: center;align-items: center;">
                            <div id="mainWrapper">
                                <div id="cardsWrapper">
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup1.png') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">rocket_launch</i>
                                                <h3>@lang('applicazione.headline_1')</h3>
                                                <p>@lang('applicazione.description_1')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup2.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                            <i class="material-icons-round box_icon">history_edu</i>
                                                <h3>@lang('applicazione.headline_2')</h3>
                                                <p>@lang('applicazione.description_2')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup3.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">camera</i>
                                                <h3>@lang('applicazione.headline_3')</h3>
                                                <p>@lang('applicazione.description_3')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup4.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">devices</i>
                                                <h3>@lang('applicazione.headline_4')</h3>
                                                <p>@lang('applicazione.description_4')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup5.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">trending_up</i>
                                                <h3>@lang('applicazione.headline_5')</h3>
                                                <p>@lang('applicazione.description_5')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup6.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">extension</i>
                                                <h3>@lang('applicazione.headline_6')</h3>
                                                <p>@lang('applicazione.description_6')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup7.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">bar_chart</i>
                                                <h3>@lang('applicazione.headline_7')</h3>
                                                <p>@lang('applicazione.description_7')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup8.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">handshake</i>
                                                <h3>@lang('applicazione.headline_8')</h3>
                                                <p>@lang('applicazione.description_8')</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup9.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <i class="material-icons-round box_icon">work</i>
                                                <h3>@lang('applicazione.headline_9')</h3>
                                                <p>@lang('applicazione.description_9')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </br></br>
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
                        </br></br>
                        <div class="carousel-holster">
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ul class="carousel-indicators">
                                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                                    <li data-target="#demo" data-slide-to="1"></li>
                                    <li data-target="#demo" data-slide-to="2"></li>
                                </ul>
                                <!-- The slideshow -->
                                <div class="carousel-inner">
                                    <div class="carousel-item active" style="">
                                        <div class="inner-item-layout">
                                            <a href="https://photojournal.jpl.nasa.gov/beta/#q=*%3A*">
                                                <img src="{{ asset('images/misc/nasa.png') }}" class="info-image">
                                                <img src="{{ asset('images/misc/juno.png') }}" class="info-image juno">
                                                </br>
                                                <h3 class="caro-text">Images Courtesy of NASA, Juno mission</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="">
                                        <div class="inner-item-layout">
                                            <a href="https://www.laravel.com">
                                                <img src="{{ asset('images/misc/laravel.png') }}" class="info-image">
                                                </br>
                                                <h3 class="caro-text">Website built with Laravel</h3>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="carousel-item" style="">
                                        <div class="inner-item-layout">
                                            <img src="{{ asset('images/logos/jiant2.png') }}" class="info-image">
                                            </br>
                                            <h3 style="color:white; font-family:phosphate-solid; font-size:2rem;">J I A N T</h3>
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
                        {{--<div style="display: flex;height: 80vh;width: 100vw;justify-content: center;align-content: center;align-items: center;">
                            <div>
                                <h3>@lang('applicazione.built_by')</h3><h1 style="color:white; font-family:phosphate-solid; font-size:2rem;">J I A N T</h1>
                                </br></br>
                                <div>
                                    <a href="https://www.spidergain.com"><img src="{{ asset('images/logos/spidergain.png') }}" style="width:20vw;"></a>
                                </div>
                            </div>
                        </div>--}}
                        <div style="display: flex;height: 80vh;width: 100vw;justify-content: center;align-content: center;align-items: center;">
                            <div>
                                <h3>@lang('applicazione.contact_us_today')</h3>
                                </br></br>
                                <div style="display: flex; justify-content: space-evenly;">
                                    <div>
                                        <a href="mailto:team@jiant.io">
                                            <div>
                                                <img src="{{ asset('images/misc/email.png') }}" class="contact-icon"/>
                                            </div>
                                            <div>
                                                team@jiant.io
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="https://api.whatsapp.com/send?phone=393755499384">
                                            <div>
                                                <img src="{{ asset('images/misc/whatsapp.png') }}" class="contact-icon"/>
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

                    <div class="jiant-footer">
                        <div>
                            <div class="jiant-footer-details">
                                <div>
                                    <h1 style="color:white; font-family:phosphate-solid; font-size:2rem;">J I A N T</h1>
                                </div>
                                <div>
                                    <img src="{{ asset('images/social/facebook.png') }}" class="social_link_icon">
                                    <img src="{{ asset('images/social/instagram.png') }}" class="social_link_icon">
                                    <img src="{{ asset('images/social/youtube.png') }}" class="social_link_icon">
                                    <img src="{{ asset('images/social/linkedin.png') }}" class="social_link_icon">
                                    <img src="{{ asset('images/social/twitter.png') }}" class="social_link_icon">
                                    <img src="{{ asset('images/social/tiktok.png') }}" class="social_link_icon">
                                    <img src="{{ asset('images/social/reddit.png') }}" class="social_link_icon">
                                </div>
                                </br></br>
                                <div>
                                    <h1 style="color:white; font-size:1rem;">2022, All Rights Reserved</h1>
                                </div>
                            </div>
                        </div>



                            <div style="display: flex;justify-content: flex-end;">
                            <div>
                                <a href="#" data-toggle="modal" data-target="#langModal"><img src="{{ asset('images/misc/translate.png') }}" class="footer-app-icon"/></a>
                            </div>
                            <div>
                                <a href="mailto:team@jiant.io"><img src="{{ asset('images/misc/email.png') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                            <div>
                                <a href="https://api.whatsapp.com/send?phone=393755499384"> <img src="{{ asset('images/misc/whatsapp.png') }}" class="footer-app-icon" id="hidden-icon"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="langModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Language</h5>
      </div>
      <div class="modal-body">
        @if(Lang::locale() == 'it')
        <a href="{{ '/lang/en' }}" class="dropdown-item" style="color:black!important;">
            <div class="flag-holster">
                <div>
                    <img src="{{ asset('images/misc/uk.png') }}" class="flag-icon">
                </div>
                <div>
                    EN
                </div>
            </div>
        </a>
        @endif
        @if(Lang::locale() == 'en')
        <a href="{{ '/lang/it' }}" class="dropdown-item" style="color:black!important;">
            <div class="flag-holster">
                <div>
                    <img src="{{ asset('images/misc/italy.png') }}" class="flag-icon">
                </div>
                <div>
                    IT
                </div>
            </div>
        </a>
        @endif
      </div>
    </div>
  </div>
</div>


@endsection




