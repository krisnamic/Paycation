<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleap0is.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        @include('Template/head')
    </head>
    <body class="antialiased">
        <div class="parallax">
            <div id="group2" class="parallax__group">
                <div class="parallax__layer parallax__layer--base">
                    <img src="{{ asset('img/paycation/paycation-2.svg')}}" class="title">
                </div>
                <div class="parallax__layer parallax__layer--back"></div>
            </div>
        </div>
        <header class="menu">
            <img src="{{ asset('img/paycation/paycation-2.svg')}}" style="width: 100px;">
        </header>
        <section class="test">  
            <div class="d-flex flex-column container">
                <div class="row d-flex justify-content-between">
                    <div class="card-location">
                        <figure class="card__thumbnail">
                        <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 400px;">
                        <span class="card__title">Tangerang</span>
                        </figure>
                    </div>
                    <div class="card-location">
                        <figure class="card__thumbnail">
                        <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 400px;">
                        <span class="card__title">Tangerang</span>
                        </figure>
                    </div>
                    <div class="card-location">
                        <figure class="card__thumbnail">
                        <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 400px;">
                        <span class="card__title">Tangerang</span>
                        </figure>
                    </div>
                    <div class="card-location">
                        <figure class="card__thumbnail">
                        <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 400px;">
                        <span class="card__title">Tangerang</span>
                        </figure>
                    </div>
                </div>
            </div>

            <!-- <div class="d-flex flex-column container">  
                <div class="card-location">
                    <figure class="card__thumbnail">
                    <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ">
                    <span class="card__title">Tangerang</span>
                    </figure>
                </div>
            </div> -->
        </section>
        <section>
            <h2 class="text-center my-4">List of Paycation Hotels</h2>
            <div class="d-flex flex-column container">
                <div class="row row-cols-1" style="display: flex;">
                    @foreach($hotel as $h)
                    <div class="card mb-3" style="width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4 gambar-hotel">
                            <img src="{{asset('img/hotel/'.$h->gambarHotel)}}" class="card-img-top" alt="hotel_image">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$h->namaHotel}}</h5>
                                <p class="card-text">Rating :
                                    @php ($lol = 5)
                                    @for($i = 0; $i < $h->bintang; $i++)
                                        <span class="fas fa-star checked"></span>
                                        @php ($lol -= 1)
                                        @endfor
                                        @while($lol > 0)
                                        <span class="fas fa-star unchecked"></span>
                                        @php ($lol -= 1)
                                        @endwhile
                                </p>
                                <p class="card-text py-0 my-0">Price : {{$h->hargaKamar}}</p>
                                <p class="card-text">{{$h->deskripsiHotel}}</p>
                                <p class="card-text text-muted small">{{$h->lokasi}}</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Pantai -->

        <div id="footer-transition">

            <svg id="transition" viewBox="0 0 1440 232" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="-6" width="1452" height="232" fill="url(#paint0_linear)"/>
                <defs>
                    <linearGradient id="paint0_linear" x1="720" y1="0" x2="720" y2="232" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#FFFFFF"/>
                        <stop offset="0.47708" stop-color="#F5FFFE"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>

            <img id="beach" src="{{asset('img/home/beach.svg')}}" alt="">

        </div>

        @include('Template/footer')
        
        <script>
            $(window).scroll(function() {
                var sticky = $('.menu'), scroll = $(window).scrollTop(); 
                var text = $('.test');
                
                if (scroll >= window.innerHeight) { 
                    sticky.addClass('fixed'); 
                    text.css('margin-top', '6rem');
                    sticky.css('width', '100%');
                } else { 
                    sticky.removeClass('fixed');
                    text.css('margin-top', '2rem');
                    sticky.css('width', '');
                }
            });
        </script>
        @include('Template/script')
    </body>
</html>