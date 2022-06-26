
@extends('layout')

@section('content')

    <div class="mid-section">
        {{--<div class="ItemCard">
            <figure class="ItemCard__thumb">
                <img src="https://www.izkiz.net/wp-content/uploads/2017/12/DSC_4364.jpg" height="340" width="510" alt="">
            </figure>
            <div class="ItemCard__layer cover"></div>
            <div class="ItemCard__summary cover">
                <span class="ItemCard__meta category">Test</span>
                <h2 class="ItemCard__title">Leyton Nightingale</h2>
                <address class="ItemCard__meta designer">June 2020</address>
            </div>
        </div>--}}
        {{--<main>
            <section class="no-parallax hvr-reveal">
                <h1 id="demo">Hello</h1>
            </section>
            <section class="parallax fg">
                <h1>Roma</h1>
            </section>
            <section class="no-parallax">
                <h1>Welcome</h1>
            </section>
        </main>--}}
        {{--<main>
            <section class="no-parallax">
                <h1>Ciao</h1>
            </section>
            <section class="parallax sg">
                <h1>Egypt</h1>
            </section>
            <section class="no-parallax">
                <h1>Have a nice day!</h1>
            </section>
        </main>--}}




        <div class="parallax2" style="margin-left:0; left:0; ">
            <div class="parallax__layer parallax__layer__0" style="height: 100vh; width:100vw; margin-left:0; left:0; background-image:url(https://i.pinimg.com/originals/c8/4c/0a/c84c0aeedf27fb4191b427f1bd9d9f3c.jpg); background-size:cover;">

            </div>

            <div class="parallax__layer parallax__layer__7" style="height: 100vh; width:100vw;display: flex;align-items: flex-end;justify-content: center;z-index: 2;">
               <i class="material-icons-round" style="font-size:100px">keyboard_double_arrow_down</i>
            </div>

            <div class="parallax__layer parallax__layer__6">
                <canvas id="canvas" style="filter:brightness(1.1);"></canvas>
            </div>
            <div class="parallax__layer parallax__layer__2">
                <img src="{{ asset('images/hi_r/io.png') }}" style="margin-left:53vw; height: 3vw; bottom: 12vh; filter: brightness(0.7); z-index:0;"/>
            </div>
            <div class="parallax__layer parallax__layer__3">
                <img src="{{ asset('images/hi_r/europa.png') }}" style="margin-left:61vw; height: 2vw; bottom: 19vh; filter:brightness(0.9); z-index:1;"/>
            </div>
            <div class="parallax__layer parallax__layer__4">
                <img src="{{ asset('images/hi_r/ganymede.png') }}" style="margin-left:68vw; height: 3vw; bottom: 27vh; filter:brightness(1.1); z-index:2;"/>
            </div>
            <div class="parallax__layer parallax__layer__5">
                <img src="{{ asset('images/hi_r/callisto.png') }}" style="margin-left:80vw; height: 4vw; bottom: 57vh; filter:brightness(1.3); z-index:3;"/>
            </div>
            <div class="parallax__layer parallax__layer__0">
                <img src="{{ asset('images/hi_r/jupiter.png') }}" style="margin-left:-10vw; height: 65vw; bottom: -30vh; filter:brightness(1.3); z-index:4;"/>
            </div>
            <div class="parallax__cover" style="background:#000000d9; top:99%; color:white; backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);">

                <div style="display: flex; flex-direction:column; justify-content: center; align-items: center; z-index:10; text-align:center;">
                    </br></br></br></br></br></br></br>
                    <img src="{{ asset('images/logos/jiant3.png') }}" style="height: 8vw; z-index:4;"/>
                    </br>
                    <h3>JIANT WEB AGENCY BASED IN ROMA, ITALIA </br></br> WEB DEVELOPERS | SEO | MARKETING | SOCIAL | GRAPHICS</h3>

                    </br></br></br></br></br></br></br>

                    <div style="color:white; display:flex; width:100vw; flex-direction:row; flex-wrap:wrap; justify-content:center;">

                        </br></br>

                        <div class="home_page_box">
                            <h1>CORPORATE IDENTITY & GRAFICA</h1>
                            <h6 class="home_page_box_spiega">
                                Curiamo la grafica di tutti gli elementi con i quali ti presenti al pubblico, dal biglietto da visita al sito Internet. Ti aiutiamo a trasmettere fiducia, il tuo carattere ed i tuoi valori con il vestito giusto.
                            </h6>
                            <i class="material-icons-round box_icon">rocket_launch</i>
                        </div>
                        </br></br>
                        <div class="home_page_box">
                            <h1>COPYWRITING</h1>
                            <h6 class="home_page_box_spiega">
                                Ti aiutiamo a scegliere le parole giuste per dire al tuo lettore tre cose importanti:
                                ha trovato quello che cercava, si può fidare di te e tu hai le competenze giuste.
                            </h6>
                            <i class="material-icons-round box_icon">history_edu</i>
                        </div>
                        </br></br>
                        <div class="home_page_box">
                            <h1>SERVIZI FOTOGRAFICI</h1>
                            <h6 class="home_page_box_spiega">
                                Facciamo per te le foto che fanno la differenza. David Ogilvy, famoso pubblicitario, ha scoperto che, per ogni tuo contenuto, su 100 persone, 5 leggono il testo, 80 il titolo ma tutte e 100 guardano l’immagine!
                            </h6>
                            <i class="material-icons-round box_icon">camera</i>
                        </div>
                        </br></br>
                        <div class="home_page_box">
                            <h1>SITI E APPLICATIVI WEB E MOBILE</h1>
                            <h6 class="home_page_box_spiega">
                                Quante volte hai chiuso un sito perché era troppo lento, poco chiaro o scarso nelle informazioni?
                                Noi facciamo in modo che ai tuoi visitatori del sito tutto questo non capiti mai!
                            </h6>
                            <i class="material-icons-round box_icon">devices</i>
                        </div>
                        </br></br>
                        <div class="home_page_box">
                            <h1>SEO</h1>
                            <h6 class="home_page_box_spiega">
                                Quando cerchi un prodotto o la soluzione ad un problema, vai sui motori di ricerca o sui social media? Il 93% delle esperienze online inizia con una ricerca su Google, Bing o Yahoo. Noi ti mettiamo ai primi posti.
                            </h6>
                            <i class="material-icons-round box_icon">trending_up</i>
                        </div>
                        </br></br>
                        <div class="home_page_box">
                            <h1>UX / UI</h1>
                            <h6 class="home_page_box_spiega">
                                User Experience / User interface.
                            </h6>
                            <i class="material-icons-round box_icon">extension</i>
                        </div>



                        </br></br>
                        <div class="home_page_box">
                            <h1>SOCIAL MEDIA MARKETING</h1>
                            <h6 class="home_page_box_spiega">
                                Attraverso i social media interagisci con i tuoi clienti e mantieni con loro un rapporto di fiducia? Non basta. Devi anche farti conoscere, riconoscere e trovare nuovi potenziali clienti. Noi ti creiamo la giusta strategia.
                            </h6>
                            <i class="material-icons-round box_icon">bar_chart</i>
                        </div>
                        </br></br>
                        <div class="home_page_box">
                            <h1>CONSULENZA</h1>
                            <h6 class="home_page_box_spiega">
                                Se vuoi avere una visione dello stato attuale della tua situazione online, possiamo offrire una analisi approfondita che ti permetterà di ottimizzare le aree che necessitano di intervento e ti proponiamo soluzioni.
                            </h6>
                            <i class="material-icons-round box_icon">handshake</i>
                            </br></br></br></br>
                        </div>

                        </br></br>



                        <div style="display: flex;width: 100vw;justify-content: center;align-content: center;align-items: center; background-color:white; color:black;">

                            <div id="mainWrapper">
                                <div id="cardsWrapper">

                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup1.png') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <img src="{{ asset('images/logos/jiant2.png') }}" style=" height: 4vw;"/>
                                                <h1>Jupiter</h1>
                                                <p>description</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup2.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                                <img src="{{ asset('images/logos/jiant3.png') }}" style=" height: 4vw;"/>
                                                <h1>Jupiter</h1>
                                                <p>description</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup3.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                            <img src="{{ asset('images/logos/jiant2.png') }}" style=" height: 4vw;"/>
                                                <h1>Jupiter</h1>
                                                <p>description</p>
                                            </div>
                                        </div>
                                    </div>

                                    {{--<div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup3.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                            <img src="{{ asset('images/logos/jiant2.png') }}" style=" height: 4vw;"/>
                                                <h1>Jupiter</h1>
                                                <p>description</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup2.jpeg') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                            <img src="{{ asset('images/logos/jiant2.png') }}" style=" height: 4vw;"/>
                                                <h1>Jupiter</h1>
                                                <p>description</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="image first" style="background-image: url({{ asset('images/bg/jup1.png') }});">
                                            <div class="screen"></div>
                                            <div class="text">
                                            <img src="{{ asset('images/logos/jiant2.png') }}" style=" height: 4vw;"/>
                                                <h1>Jupiter</h1>
                                                <p>description</p>
                                            </div>
                                        </div>
                                    </div>--}}

                                </div>
                            </div>
                        </div>




                        <div style="display: flex;height: 100vh;width: 100vw;justify-content: center;align-content: center;align-items: center;">

                        <div>
                            <h3 style="width:90vw;">
                                At JIANT we only want to build your websites and apps! We want to enjoy working with you on your projects, and we want you to enjoy our end results!
                                </br></br></br></br>
                                If youre interested in having us onboard..
                                </br></br></br></br>
                                If you want to take your activity online..
                                </br></br></br></br>
                                If you would like to start a new online project..
                                </br></br></br></br>
                                Send an email immediately to begin talking about what your next step should be!
                            </h3>
                        </div>

                        </div>

                    </div>






                    <div style="background-color:black; color:white; display:flex; width:100vw; flex-direction:row; flex-wrap:wrap; justify-content:center;">
                        <div>
                            </br>
                            <img src="{{ asset('images/logos/jiant3.png') }}" style="height: 8vw; z-index:4;"/>
                            </br>
                            <h1>CONTATTACI</h1>
                            <div style="display: flex;justify-content: space-evenly;width: 100vw;">
                                <div>
                                    <h5>
                                        JIANT
                                        Via Libia
                                        00199 Roma, RM, Italia
                                    </h5>
                                </div>
                                <div>
                                    <h5>
                                        Scrivici
                                        team@jiant.io
                                    </h5>
                                </div>
                                <div>
                                    <h5>
                                        Whatsapp
                                        +39 375 5499384
                                    </h5>
                                </div>
                                <div>
                                    <h5>
                                        Siamo lavorando
                                        7 giorni al settimana
                                    </h5>
                                </div>

                            </div>
                            </br>
                            <div>
                                <img src="{{ asset('images/social/facebook.png') }}" class="social_link_icon">
                                <img src="{{ asset('images/social/instagram.png') }}" class="social_link_icon">
                                <img src="{{ asset('images/social/youtube.png') }}" class="social_link_icon">
                                <img src="{{ asset('images/social/linkedin.png') }}" class="social_link_icon">
                                <img src="{{ asset('images/social/twitter.png') }}" class="social_link_icon">
                                <img src="{{ asset('images/social/tiktok.png') }}" class="social_link_icon">
                                <img src="{{ asset('images/social/reddit.png') }}" class="social_link_icon">
                            </div>
                            </br>
                            <div>
                                <h1 style="color:white; font-family:phosphate-solid; font-size:2rem;">J I A N T</h1>
                            </div>
                        </div>
                    </div>



                    </br>

                </div>
            </div>

        </div>




    </div>



@endsection
