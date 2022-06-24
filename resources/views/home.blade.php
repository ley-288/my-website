
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
            <div class="parallax__layer parallax__layer__0" style="height: 100vh; width:100vw; margin-left:0; left:0; background-image:url(https://www.pngall.com/wp-content/uploads/2016/07/Space-PNG-Pic.png);">

            </div>
            <div class="parallax__layer parallax__layer__6">
                <canvas id="canvas" style="filter:brightness(1.1);"></canvas>
            </div>
            <div class="parallax__layer parallax__layer__2">
                <img src="{{ asset('images/hi_r/io.png') }}" style="margin-left:53vw; height: 10vw; bottom: 12vh; filter: brightness(0.7); z-index:0;"/>
            </div>
            <div class="parallax__layer parallax__layer__3">
                <img src="{{ asset('images/hi_r/europa.png') }}" style="margin-left:61vw; height: 6vw; bottom: 19vh; filter:brightness(0.9); z-index:1;"/>
            </div>
            <div class="parallax__layer parallax__layer__4">
                <img src="{{ asset('images/hi_r/ganymede.png') }}" style="margin-left:68vw; height: 15vw; bottom: 27vh; filter:brightness(1.1); z-index:2;"/>
            </div>
            <div class="parallax__layer parallax__layer__5">
                <img src="{{ asset('images/hi_r/callisto.png') }}" style="margin-left:80vw; height: 22vw; bottom: 57vh; filter:brightness(1.3); z-index:3;"/>
            </div>
            <div class="parallax__layer parallax__layer__0">
                <img src="{{ asset('images/hi_r/jupiter.png') }}" style="margin-left:-10vw; height: 65vw; bottom: -30vh; filter:brightness(1.3); z-index:4;"/>
            </div>
            <div class="parallax__cover" style="background:#000000d9; top:95%; color:white; backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);">

                <div style="display: flex; flex-direction:column; justify-content: center; align-items: center; z-index:10; text-align:center;">
                    </br></br></br></br></br></br></br>

                    <h3>JIANT WEB AGENCY BASED IN ROMA, ITALIA </br></br> WEB DEVELOPERS - SEO - MARKETING - SOCIAL - GRAPHICS</h3>

                    </br></br></br></br></br></br></br>

                    <div style="background-color:#000000d9; color:white; display:flex; width:100vw; flex-direction:row; flex-wrap:wrap; justify-content:center;">

                        <div class="home_page_box">
                            <h1>COPYWRITING</h1>
                            <h6 class="home_page_box_spiega">
                                Ti aiutiamo a scegliere le parole giuste per dire al tuo lettore tre cose importanti:
                                ha trovato quello che cercava, si può fidare di te e tu hai le competenze giuste.
                            </h6>
                        </div>

                        <div class="home_page_box">
                            <h1>CORPORATE IDENTITY & GRAFICA</h1>
                            <h6 class="home_page_box_spiega">
                                Curiamo la grafica di tutti gli elementi con i quali ti presenti al pubblico, dal biglietto da visita al sito Internet. Ti aiutiamo a trasmettere fiducia, il tuo carattere ed i tuoi valori con il vestito giusto.
                            </h6>
                        </div>

                        <div class="home_page_box">
                            <h1>SERVIZI FOTOGRAFICI</h1>
                            <h6 class="home_page_box_spiega">
                                Facciamo per te le foto che fanno la differenza. David Ogilvy, famoso pubblicitario, ha scoperto che, per ogni tuo contenuto, su 100 persone, 5 leggono il testo, 80 il titolo ma tutte e 100 guardano l’immagine!
                            </h6>
                        </div>

                        <div class="home_page_box">
                            <h1>SITI E APPLICATIVI WEB E MOBILE</h1>
                            <h6 class="home_page_box_spiega">
                                Quante volte hai chiuso un sito perché era troppo lento, poco chiaro o scarso nelle informazioni?
                                Noi facciamo in modo che ai tuoi visitatori del sito tutto questo non capiti mai!
                            </h6>
                        </div>

                        <div class="home_page_box">
                            <h1>SEO</h1>
                            <h6 class="home_page_box_spiega">
                                Quando cerchi un prodotto o la soluzione ad un problema, vai sui motori di ricerca o sui social media? Il 93% delle esperienze online inizia con una ricerca su Google, Bing o Yahoo. Noi ti mettiamo ai primi posti.
                            </h6>
                        </div>

                        <div class="home_page_box">
                            <h1>SOCIAL MEDIA MARKETING</h1>
                            <h6 class="home_page_box_spiega">
                                Attraverso i social media interagisci con i tuoi clienti e mantieni con loro un rapporto di fiducia? Non basta. Devi anche farti conoscere, riconoscere e trovare nuovi potenziali clienti. Noi ti creiamo la giusta strategia.
                            </h6>
                        </div>

                        <div class="home_page_box">
                            <h1>FORMAZIONE</h1>
                            <h6 class="home_page_box_spiega">
                            Se vuoi fare alcune delle attività in autonomia devi sapere come riuscirci. Con i nostri video corsi puoi formare h24 e da dove vuoi te stesso o i tuoi collaboratori per acquisire le competenze necessarie.
                            </h6>
                        </div>

                        <div class="home_page_box">
                            <h1>CONSULENZA</h1>
                            <h6 class="home_page_box_spiega">
                                Se vuoi avere una visione dello stato attuale della tua situazione online, possiamo offrire una analisi approfondita che ti permetterà di ottimizzare le aree che necessitano di intervento e ti proponiamo soluzioni.
                            </h6>
                        </div>



                    </div>

                    <div style="background-color:black; color:white; display:flex; width:100vw; flex-direction:row; flex-wrap:wrap; justify-content:center;">
                        <div>
                            </br>
                            <div>

                                CONTATTACI
                                JIANT

                                Via Libya, 3
                                00195 Roma (RM) – Italia

                                Scrivici
                                leyton@jiant.com

                                Siamo lavorando
                                7 giorni al settimana


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
