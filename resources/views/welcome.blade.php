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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
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
            <div id="hotel-list">

            <input class="search" />

            <h5>Sort by:</h5> 
            <button type="checkbox" class='sort' data-sort='nama' data-default-order='asc'>Name</button><br/>
            <button type="checkbox" class='sort' data-sort='bintang' data-default-order='asc'>Star</button><br/>
            <button type="checkbox" class='sort' data-sort='lokasi' data-default-order='asc'>Location</button><br/>

            <h5>Filter by:</h5>
            <p>Star:</p>
            <ul style="list-style-type: none;">
                <li><input type="checkbox" class='filter-5star'/>                 
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                </li>
                <li><input type="checkbox" class='filter-45star'/>  
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star fa-stack-1x" style="color: #CECECE;"></i>
                        <i class="fas fa-star-half checked fa-stack-1x"></i>  
                    </span>           
                </li>
                <li><input type="checkbox" class='filter-4star'/>                 
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star unchecked"></i>
                    </span> 
                </li>
                <li><input type="checkbox" class='filter-35star'/>                 
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star fa-stack-1x" style="color: #CECECE;"></i>
                        <i class="fas fa-star-half checked fa-stack-1x"></i>  
                    </span>    
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star unchecked"></i>
                    </span> 
                </li>
                <li><input type="checkbox" class='filter-3star'/>                 
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star checked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star unchecked"></i>
                    </span>
                    <span class="fa-stack" style="width:1em;">     
                        <i class="fas fa-star unchecked"></i>
                    </span>
                </li>
            </ul>
            <p>Price:</p>
            <ul style="list-style-type: none;">
                <li><input type="checkbox" class='filter-1500'/> < Rp. 1.500.000</li>
                <li><input type="checkbox" class='filter-1750'/> Rp. 1.500.000 - Rp. 2.000.000</li>
                <li><input type="checkbox" class='filter-2250'/> Rp. 2.000.000 - Rp. 2.500.000</li>
                <li><input type="checkbox" class='filter-2750'/> Rp. 2.500.000 - Rp. 3.000.000</li>
                <li><input type="checkbox" class='filter-3000'/> > Rp. 3.000.000</li>
            </ul>
            <p>Location:</p>
            <ul style="list-style-type: none;">
                <li><input type="checkbox" class='filter-tangerang'/> Tangerang</li>
                <li><input type="checkbox" class='filter-bandung'/> Bandung</li>
                <li><input type="checkbox" class='filter-jakarta'/> Jakarta Timur</li>
                <li><input type="checkbox" class='filter-bali'/> Bali</li>
            </ul>

                <div class="row row-cols-1" style="display: flex;">
                    <ul class="list" style="list-style-type: none; padding: 0;">
                    @foreach($hotel as $h)
                    <li>
                    <a href="/{{$h->id}}" style="color: black;">
                    <div class="card mb-3" style="width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-4 gambar-hotel">
                                <img style="position: absolute;" src="{{asset('img/hotel/'.$h->gambarHotel1)}}" class="card-img-top" alt="hotel_image">                                   
                                <img style="position: absolute; width: 15%; margin: 0.5em 1em;" class="shadoww" src="{{asset('img/Logo/'.$h->logoHotel.'-h-light.svg')}}" alt="hotel_image">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <div class="home-logo-desc d-flex flex-row align-items-center">
                                    <div class="home-logo">
                                        <img src="{{asset('img/Logo/'.$h->logoHotel.'-v.svg')}}" alt="hotel_image">
                                    </div>
                                    <div class="home-desc">
                                        <h5 class="card-title nama">{{$h->namaHotel}}</h5>
                                        <p>Rating :
                                        @php $rating = $h->bintang; @endphp
                                        @foreach(range(1,5) as $i)
                                        <span class="fa-stack" style="width:1em">
                                            <i class="fas fa-star fa-stack-1x" style="color: #CECECE;"></i>
                                            @if($rating >0)
                                            @if($rating >0.5)
                                            <i class="fas fa-star checked fa-stack-1x"></i>
                                            @else
                                            <i class="fas fa-star-half checked fa-stack-1x"></i>
                                            @endif
                                            @endif
                                            @php $rating--; @endphp
                                        </span>
                                        @endforeach
                                        </p>
                                        <p class="bintang" hidden>{{$h->bintang}}</p>
                                        <p class="harga" hidden>{{$h->hargaKamar}}</p>
                                        <p class="card-text py-0 my-0">Price : {{$h->hargaKamar}}</p>
                                    </div>
                                </div>
                                <div class="home-desc2">
                                    <p class="card-text">{{$h->deskripsiHotel}}</p>
                                    <p class="card-text text-muted small lokasi">{{$h->lokasi}}</p>
                                </div>
                                
                            </div>
                            </div>
                        </div>
                    </div>
                    </a>
                    </li>
                    @endforeach
                    </ul>
                </div>
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
                        <stop offset="0.47708" stop-color="#FFFFFF"/>
                        <stop offset="1" stop-color="white" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>

            <img id="beach" src="{{asset('img/home/beach.svg')}}" alt="">

        </div>

        @include('Template/footer')
        
        <script>
            var options = {
                valueNames: ['nama', 'lokasi', 'bintang', 'harga']
            };

            var hotelList = new List('hotel-list', options);

            $('.filter-5star').on('click',function(){
                star = 5;
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 5);
                    });
                    $(this).addClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                    $('.filter-2star').prop("checked", false);
                    $('.filter-2star').removeClass('selected');
                    $('.filter-1star').prop("checked", false);
                    $('.filter-1star').removeClass('selected');
                }
            }); 
            $('.filter-45star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 4.5);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                    $('.filter-2star').prop("checked", false);
                    $('.filter-2star').removeClass('selected');
                    $('.filter-1star').prop("checked", false);
                    $('.filter-1star').removeClass('selected');
                }
            }); 
            $('.filter-4star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 4);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-3star').prop("checked", false);
                    $('.filter-3star').removeClass('selected');
                    $('.filter-2star').prop("checked", false);
                    $('.filter-2star').removeClass('selected');
                    $('.filter-1star').prop("checked", false);
                    $('.filter-1star').removeClass('selected');
                }
            }); 
            $('.filter-35star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 3.5);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-2star').prop("checked", false);
                    $('.filter-2star').removeClass('selected');
                    $('.filter-1star').prop("checked", false);
                    $('.filter-1star').removeClass('selected');
                }
            }); 
            $('.filter-3star').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().bintang == 3);
                    });
                    $(this).addClass('selected');
                    $('.filter-5star').prop("checked", false);
                    $('.filter-5star').removeClass('selected');
                    $('.filter-4star').prop("checked", false);
                    $('.filter-4star').removeClass('selected');
                    $('.filter-2star').prop("checked", false);
                    $('.filter-2star').removeClass('selected');
                    $('.filter-1star').prop("checked", false);
                    $('.filter-1star').removeClass('selected');
                }
            }); 
            

            $('.filter-1500').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga < 1500000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            }); 
            $('.filter-1750').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga >= 1500000 && item.values().harga <= 2000000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            });  
            $('.filter-2250').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga >= 2000000 && item.values().harga <= 2500000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            });  
            $('.filter-2750').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga >= 2500000 && item.values().harga <= 3000000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-3000').prop("checked", false);
                    $('.filter-3000').removeClass('selected');
                }
            }); 
            $('.filter-3000').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().harga > 3000000);
                    });
                    $(this).addClass('selected');
                    $('.filter-1500').prop("checked", false);
                    $('.filter-1500').removeClass('selected');
                    $('.filter-1750').prop("checked", false);
                    $('.filter-1750').removeClass('selected');
                    $('.filter-2250').prop("checked", false);
                    $('.filter-2250').removeClass('selected');
                    $('.filter-2750').prop("checked", false);
                    $('.filter-2750').removeClass('selected');
                }
            }); 
        
            
            $('.filter-tangerang').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Tangerang");
                    });
                    $(this).addClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                }
            }); 
            $('.filter-bandung').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Bandung");
                    });
                    $(this).addClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                }
            }); 
            $('.filter-jakarta').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Jakarta Timur");
                    });
                    $(this).addClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-bali').prop("checked", false);
                    $('.filter-bali').removeClass('selected');
                }
            }); 
            $('.filter-bali').on('click',function(){
                if($(this).hasClass( 'selected' )){
                    hotelList.filter();
                    $(this).removeClass('selected');
                } else {
                    hotelList.filter(function(item) {
                    return (item.values().lokasi == "Bali");
                    });
                    $(this).addClass('selected');
                    $('.filter-tangerang').prop("checked", false);
                    $('.filter-tangerang').removeClass('selected');
                    $('.filter-bandung').prop("checked", false);
                    $('.filter-bandung').removeClass('selected');
                    $('.filter-jakarta').prop("checked", false);
                    $('.filter-jakarta').removeClass('selected');
                }
            }); 
        </script>
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