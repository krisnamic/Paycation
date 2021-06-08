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
                <div class="row">
                    <div class="col-4" style="background-color: red;">
                        <!-- <div class="card-location"> -->
                            <figure class="card__thumbnail">
                            <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 400px;">
                            <span class="card__title">Tangerang</span>
                            </figure>
                        <!-- </div> -->
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6" style="background-color: green;">
                            <!-- <div class="card-location"> -->
                                <figure class="card__thumbnail">
                                <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 200px;">
                                <span class="card__title">Tangerang</span>
                                </figure>
                            <!-- </div> -->
                            </div>
                            <div class="col-6" style="background-color: blue;">
                            <!-- <div class="card-location"> -->
                                <figure class="card__thumbnail">
                                <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 200px;">
                                <span class="card__title">Tangerang</span>
                                </figure>
                            <!-- </div> -->
                            </div>
                        <div class="col-12" style="background-color: yellow;">
                        <!-- <div class="card-location"> -->
                            <figure class="card__thumbnail">
                            <img src="https://images.unsplash.com/photo-1447752875215-b2761acb3c5d?ixlib=rb-1.2.1&q=85&fm=jpg&crop=entropy&cs=srgb&ixid=eyJhcHBfaWQiOjE0NTg5fQ" style="max-width: 100%; height: 200px;">
                            <span class="card__title">Tangerang</span>
                            </figure>
                        <!-- </div> -->
                        </div>
                        </div>
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
                <div class="row row-cols-4" style="display: flex;">
                    @foreach($hotel as $h)
                    <div class="col d-flex">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('img/hotel/'.$h->gambarHotel)}}" class="card-img-top" alt="hotel_image">
                            <div class="card-body">
                                <p>{{$h->id}}</p>
                                <p>{{$h->namaHotel}}</p>
                                <p>{{$h->lokasi}}</p>
                                <p>Rating :
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
                                <p>Price : {{$h->hargaKamar}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
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