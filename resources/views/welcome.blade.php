<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Paycation | Home</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleap0is.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/2.3.1/list.min.js"></script>
    <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/assets/owl.theme.default.css')}}">
    <script src="{{asset('OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js')}}"></script>
    <script src="{{asset('OwlCarousel2-2.3.4/docs/assets/owlcarousel/owl.carousel.js')}}"></script>
    <script src="{{asset('OwlCarousel2-2.3.4/test/unit/autoplay.js')}}"></script>
    @include('Template/head')
</head>

<body class="antialiased">
    <div id="load" style="background-color: #169eda;">
            <div class="d-flex flex-column justify-content-center align-items-center" style="margin-top: 40vh;">
                <div class="lds-ring">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p style="font-size: 3em; color: white;">Loading</p>
            </div>
    </div>
    <div class="parallax">
        <div id="group2" class="parallax__group">
            <div class="parallax__layer parallax__layer--base">
                <img src="{{ asset('img/paycation/paycation-2-light.svg')}}" class="title shadoww">
            </div>
            <div class="parallax__layer parallax__layer--back"></div>
        </div>
    </div>
    <div class="menu">
        @include('Template/userNavbar')
    </div>
        <section class="test container">
        <h2 class="subtext1 text-center" style="margin-bottom: 0.5em;">Book a Hotel!</h2>
        <p class="text-center"><svg style="width: 8em;" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 922.87 330.91"><defs><style>.cls-1{fill:#252526;}.cls-2{fill:#189cc2;}.cls-2,.cls-3,.cls-4{fill-rule:evenodd;}.cls-3{fill:#0a7fa7;}.cls-4{fill:#169eda;}</style></defs><title>paycation-2-dark</title><path class="cls-1" d="M84.38,167.31c0,24.31-16,43.39-39.51,43.39C32.38,210.7,22.59,204.79,16,196v47.27H.13V125.1H16v13.51c6.59-8.78,16.38-14.69,28.87-14.69C68.34,123.92,84.38,143,84.38,167.31Zm-16.38,0c0-15.53-10.64-28-25.83-28S16,152.45,16,167.31s11,27.86,26.17,27.86S68,182.67,68,167.31Z"/><path class="cls-1" d="M183.3,125.1v84.42H167.43V196c-6.58,8.78-16.37,14.69-28.87,14.69-23.46,0-39.5-19.08-39.5-43.39s16-43.39,39.5-43.39c12.5,0,22.29,5.91,28.87,14.69V125.1Zm-15.87,42.21c0-14.86-11-27.86-26.17-27.86s-25.82,12.5-25.82,27.86c0,15.53,10.63,28,25.82,28S167.43,182.17,167.43,167.31Z"/><path class="cls-1" d="M283.24,125.1,233.78,243.28H217.57l14.85-34.44L197.31,125.1h17.22L240.36,191,266,125.1Z"/><path class="cls-1" d="M287.63,167.31c0-23.47,16.88-43.56,43.05-43.56,11.65,0,19.75,3.21,26.33,8.44V150.6a34,34,0,0,0-25-11c-16.72,0-28.2,12.33-28.2,27.69,0,15.19,11.48,27.69,28.2,27.69a34,34,0,0,0,25-11v18.4c-6.58,5.24-14.68,8.45-26.33,8.45C304.51,210.87,287.63,190.78,287.63,167.31Z"/><path class="cls-1" d="M457.29,125.1v84.42H441.42V196c-6.58,8.78-16.37,14.69-28.87,14.69-23.46,0-39.5-19.08-39.5-43.39s16-43.39,39.5-43.39c12.5,0,22.29,5.91,28.87,14.69V125.1Zm-15.87,42.21c0-14.86-11-27.86-26.17-27.86s-25.83,12.5-25.83,27.86c0,15.53,10.64,28,25.83,28S441.42,182.17,441.42,167.31Z"/><path class="cls-1" d="M519.08,140.3H501.69v69.22H485.82V140.3H475V125.1h10.81V102.48h15.87V125.1h17.39Z"/><path class="cls-1" d="M534.1,98.26a10.81,10.81,0,1,1,10.8,11A10.52,10.52,0,0,1,534.1,98.26ZM537,125.1h15.87v84.42H537Z"/><path class="cls-1" d="M575.63,167.31c0-23.47,17.56-43.56,43-43.56s43.05,20.09,43.05,43.56-17.56,43.56-43.05,43.56S575.63,190.78,575.63,167.31Zm69.72-.17c0-14.86-10.47-27.52-26.67-27.52-15.87,0-26.85,12.66-26.85,27.52,0,15,11,27.86,26.85,27.86C634.88,195,645.35,182.17,645.35,167.14Z"/><path class="cls-1" d="M754.41,161.06v48.46H738.54V163.43c0-16.72-8.61-25.5-20.6-25.5-11.82,0-20.6,8.78-20.6,25.5v46.09H681.48V125.1h15.86v11.82c4.9-7.93,13.85-13.5,25.5-13.5C739.38,123.42,754.41,135.91,754.41,161.06Z"/><path class="cls-2" d="M855.51,134.75l.4-.25c-6.16-18.42,19.48-49.56,67-101.63Q865.28,40,833.71,62.16,836.79,107.42,855.51,134.75Z"/><path class="cls-3" d="M855.51,134.75l.4-.25a17.3,17.3,0,0,1-.51-1.91q-9-34.23-7.3-79.08a121,121,0,0,0-14.39,8.65Q836.79,107.42,855.51,134.75Z"/><path class="cls-4" d="M871.34,161.16c10.16,5.2,18.57,7.89,26,6.6Q822.19,138.3,835,8c-18,3.54-32.61,11.77-42.79,25.5-8.86,12-6,27.15,1.25,47.42,1,2.72,2.15,17.38-3.92,22.83-2.23,2-5.82.41-8.92-1.61q-16-9.08-26.57.18Q724.85,97.42,711.75,97c12.45,3.92,26.83,8,43,12.66,6.89,2,12.81,6.74,17.47,13.91,9.54,14.66,36.57,22.62,62.76,26.39A118.79,118.79,0,0,1,871.34,161.16Z"/></svg>
 is a website that gives you a curated list of high-quality hotels for your pleasure.</p>
        <div id="owl-demo" class="owl-carousel owl-theme">
            @foreach($hotel as $h)
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel2)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel3)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel4)}}" style="border-radius: 10px;"/></div>
                <div class="item"><img src="{{asset('img/hotel/'.$h->gambarHotel5)}}" style="border-radius: 10px;"/></div>
            @endforeach
        </div>
        </section>
        <section>
            <h2 class="subtext1 text-center" style="margin-top: 1em; margin-bottom: 0.5em;">Hotel Catalogue</h2>
            <div class="d-flex flex-column container">
                <div id="hotel-list">

                    <div class="row">
                        <div class="col-3 mt-3">
                            <div style="background-color: #9ce0ff; padding: 1rem; border-radius: 10px;">
                                <div>
                                    <h6>Search:</h6>
                                    <input class="form-control search" style="font-size: 17px;" />
                                </div>

                            <div class="my-2">
                                <h6>Sort by:</h6>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class='btn btn-primary sort' data-sort='nama' data-default-order='asc' style="font-size: 17px;">Name</button>
                                    <button type="button" class='btn btn-primary sort' data-sort='bintang' data-default-order='asc' style="font-size: 17px;">Star</button>
                                    <button type="button" class='btn btn-primary sort' data-sort='lokasi' data-default-order='asc' style="font-size: 17px;">Location</button>
                                </div>
                            </div>

                            <h6>Filter by:</h6>
                            <select name="filterOpt" id="filterOpt" class="form-control filterOpt" style="font-size: 17px;">
                                <option selected disabled hidden></option>
                                <option value="star" style="font-size: 17px;">Star</option>
                                <option value="price" style="font-size: 17px;">Price</option>
                                <option value="location" style="font-size: 17px;">Location</option>
                            </select>

                            <div class="starPage">
                                <ul style="list-style-type: none; padding: 0;">
                                    <li><input type="checkbox" class='filter-5star' />
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
                                    <li><input type="checkbox" class='filter-45star' />
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
                                    <li><input type="checkbox" class='filter-4star' />
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
                                    <li><input type="checkbox" class='filter-35star' />
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
                                    <li><input type="checkbox" class='filter-3star' />
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
                            </div>

                            <div class="pricePage">
                                <ul style="list-style-type: none; padding: 0;">
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-1500' />
                                        < Rp. 1.500.000</li>
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-1750' /> Rp. 1.500.000 - Rp. 2.000.000</li>
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-2250' /> Rp. 2.000.000 - Rp. 2.500.000</li>
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-2750' /> Rp. 2.500.000 - Rp. 3.000.000</li>
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-3000' /> > Rp. 3.000.000</li>
                                </ul>
                            </div>

                            <div class="locationPage">
                                <ul style="list-style-type: none; padding: 0;">
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-tangerang' /> Tangerang</li>
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-bandung' /> Bandung</li>
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-jakarta' /> Jakarta Timur</li>
                                    <li style="font-size: 17px;"><input type="checkbox" class='filter-bali' /> Bali</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <br /><br />
                    <div class="col-9">
                        <div class="row row-cols-1" style="display: flex;">
                            <ul class="list" style="list-style-type: none; padding: 0;">
                                @foreach($hotel as $h)
                                <li>
                                    <a href="/{{$h->id}}" style="color: black;">
                                        <div class="card mb-3" style="width: 100%;">
                                            <div class="row no-gutters">
                                                <div class="col-md-6 gambar-hotel">
                                                    <img style="position: relative; border-top-left-radius: 10px; border-bottom-left-radius: 10px;" src="{{asset('img/hotel/'.$h->gambarHotel1)}}" class="card-img-top" alt="hotel_image">
                                                    <img style="position: absolute; width: 15%; margin: 0.5em 1em;" class="shadoww" src="{{asset('img/Logo/'.$h->logoHotel.'-h-light.svg')}}" alt="hotel_image">
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="card-body" style="padding: 0;">
                                                        <div class="home-logo-desc d-flex flex-row align-items-center" style="margin: 0;">
                                                            <div class="home-desc">
                                                                <div class="row">
                                                                    <div class="col-8">
                                                                        <h5 class="card-title nama" style="font-size: 1.35em; text-shadow: 1px 0 0 black;">{{$h->namaHotel}}</h5><br />
                                                                        <p class="mb-0 mt-2" style="font-size: 0.9em;">Rating :
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
                                                                        <p class="card-text py-0 mt-1 mb-0" style="font-size: 0.9em;">Price : {{$h->hargaKamar}}</p>
                                                                        <p class="card-text py-0 mt-1 mb-0" style="font-size: 0.9em;">Available Rooms : {{$h->stokKamar}}</p>
                                                                    </div>
                                                                    <div class="col-4 d-flex justify-content-end">
                                                                        <div class="home-logo">
                                                                            <img src="{{asset('img/Logo/'.$h->logoHotel.'-v.svg')}}" alt="hotel_image">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <p class="bintang" hidden>{{$h->bintang}}</p>
                                                                <p class="harga" hidden>{{$h->hargaKamar}}</p>
                                                                <hr />
                                                                <p class="card-text pt-2 m-0" style="text-align: justify; text-justify: inter-word; font-size: 0.9em;">{{$h->deskripsiHotel}}</p>
                                                                <div class="d-flex justify-content-end">
                                                                    <p class="card-text text-muted small lokasi pt-3">{{$h->lokasi}}</p>
                                                                </div>
                                                            </div>
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
            </div>
        </div>
    </section>

    <!-- Pantai -->



    @include('Template/footer')
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                items: 3,
                lazyLoad: true,
                navigation: true,
                autoplayTimeout: 3000
            });
            $('.owl-carousel').trigger('play.owl.autoplay', [3000])
        });
    </script>
    <script>
        $('select.filterOpt').change(function() {
            var selectedOpt = $(this).children("option:selected").val();

            if (selectedOpt == "star") {
                hotelList.filter();
                $('.starPage').css("display", "inline-block");
                $('.pricePage').css("display", "none");
                $('.locationPage').css("display", "none");
                $('.filter-1500').prop("checked", false);
                $('.filter-1500').removeClass('selected');
                $('.filter-1750').prop("checked", false);
                $('.filter-1750').removeClass('selected');
                $('.filter-2250').prop("checked", false);
                $('.filter-2250').removeClass('selected');
                $('.filter-2750').prop("checked", false);
                $('.filter-2750').removeClass('selected');
                $('.filter-3000').prop("checked", false);
                $('.filter-3000').removeClass('selected');
                $('.filter-tangerang').prop("checked", false);
                $('.filter-tangerang').removeClass('selected');
                $('.filter-bandung').prop("checked", false);
                $('.filter-bandung').removeClass('selected');
                $('.filter-jakarta').prop("checked", false);
                $('.filter-jakarta').removeClass('selected');
                $('.filter-bali').prop("checked", false);
                $('.filter-bali').removeClass('selected');
            } else if (selectedOpt == "price") {
                hotelList.filter();
                $('.pricePage').css("display", "inline-block");
                $('.starPage').css("display", "none");
                $('.locationPage').css("display", "none");
                $('.filter-5star').prop("checked", false);
                $('.filter-5star').removeClass('selected');
                $('.filter-45star').prop("checked", false);
                $('.filter-45star').removeClass('selected');
                $('.filter-4star').prop("checked", false);
                $('.filter-4star').removeClass('selected');
                $('.filter-35star').prop("checked", false);
                $('.filter-35star').removeClass('selected');
                $('.filter-3star').prop("checked", false);
                $('.filter-3star').removeClass('selected');
                $('.filter-tangerang').prop("checked", false);
                $('.filter-tangerang').removeClass('selected');
                $('.filter-bandung').prop("checked", false);
                $('.filter-bandung').removeClass('selected');
                $('.filter-jakarta').prop("checked", false);
                $('.filter-jakarta').removeClass('selected');
                $('.filter-bali').prop("checked", false);
                $('.filter-bali').removeClass('selected');
            } else if (selectedOpt == "location") {
                hotelList.filter();
                $('.locationPage').css("display", "inline-block");
                $('.starPage').css("display", "none");
                $('.pricePage').css("display", "none");
                $('.filter-5star').prop("checked", false);
                $('.filter-5star').removeClass('selected');
                $('.filter-45star').prop("checked", false);
                $('.filter-45star').removeClass('selected');
                $('.filter-4star').prop("checked", false);
                $('.filter-4star').removeClass('selected');
                $('.filter-35star').prop("checked", false);
                $('.filter-35star').removeClass('selected');
                $('.filter-3star').prop("checked", false);
                $('.filter-3star').removeClass('selected');
                $('.filter-1500').prop("checked", false);
                $('.filter-1500').removeClass('selected');
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

        var options = {
            valueNames: ['nama', 'bintang', 'harga', 'lokasi']
        };

        var hotelList = new List('hotel-list', options);

        $('.filter-5star').on('click', function() {
            if ($(this).hasClass('selected')) {
                hotelList.filter();
                $(this).removeClass('selected');
            } else {
                hotelList.filter(function(item) {
                    return (item.values().bintang == 5);
                });
                $(this).addClass('selected');
                $('.filter-45star').prop("checked", false);
                $('.filter-45star').removeClass('selected');
                $('.filter-4star').prop("checked", false);
                $('.filter-4star').removeClass('selected');
                $('.filter-35star').prop("checked", false);
                $('.filter-35star').removeClass('selected');
                $('.filter-3star').prop("checked", false);
                $('.filter-3star').removeClass('selected');
            }
        });
        $('.filter-45star').on('click', function() {
            if ($(this).hasClass('selected')) {
                hotelList.filter();
                $(this).removeClass('selected');
            } else {
                hotelList.filter(function(item) {
                    return (item.values().bintang == 4.5);
                });
                $(this).addClass('selected');
                $('.filter-5star').prop("checked", false);
                $('.filter-5star').removeClass('selected');
                $('.filter-4star').prop("checked", false);
                $('.filter-4star').removeClass('selected');
                $('.filter-35star').prop("checked", false);
                $('.filter-35star').removeClass('selected');
                $('.filter-3star').prop("checked", false);
                $('.filter-3star').removeClass('selected');
            }
        });
        $('.filter-4star').on('click', function() {
            if ($(this).hasClass('selected')) {
                hotelList.filter();
                $(this).removeClass('selected');
            } else {
                hotelList.filter(function(item) {
                    return (item.values().bintang == 4);
                });
                $(this).addClass('selected');
                $('.filter-5star').prop("checked", false);
                $('.filter-5star').removeClass('selected');
                $('.filter-45star').prop("checked", false);
                $('.filter-45star').removeClass('selected');
                $('.filter-35star').prop("checked", false);
                $('.filter-35star').removeClass('selected');
                $('.filter-3star').prop("checked", false);
                $('.filter-3star').removeClass('selected');
            }
        });
        $('.filter-35star').on('click', function() {
            if ($(this).hasClass('selected')) {
                hotelList.filter();
                $(this).removeClass('selected');
            } else {
                hotelList.filter(function(item) {
                    return (item.values().bintang == 3.5);
                });
                $(this).addClass('selected');
                $('.filter-5star').prop("checked", false);
                $('.filter-5star').removeClass('selected');
                $('.filter-45star').prop("checked", false);
                $('.filter-45star').removeClass('selected');
                $('.filter-4star').prop("checked", false);
                $('.filter-4star').removeClass('selected');
                $('.filter-3star').prop("checked", false);
                $('.filter-3star').removeClass('selected');
            }
        });
        $('.filter-3star').on('click', function() {
            if ($(this).hasClass('selected')) {
                hotelList.filter();
                $(this).removeClass('selected');
            } else {
                hotelList.filter(function(item) {
                    return (item.values().bintang == 3);
                });
                $(this).addClass('selected');
                $('.filter-5star').prop("checked", false);
                $('.filter-5star').removeClass('selected');
                $('.filter-45star').prop("checked", false);
                $('.filter-45star').removeClass('selected');
                $('.filter-4star').prop("checked", false);
                $('.filter-4star').removeClass('selected');
                $('.filter-35star').prop("checked", false);
                $('.filter-35star').removeClass('selected');
            }
        });


        $('.filter-1500').on('click', function() {
            if ($(this).hasClass('selected')) {
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
        $('.filter-1750').on('click', function() {
            if ($(this).hasClass('selected')) {
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
        $('.filter-2250').on('click', function() {
            if ($(this).hasClass('selected')) {
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
        $('.filter-2750').on('click', function() {
            if ($(this).hasClass('selected')) {
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
        $('.filter-3000').on('click', function() {
            if ($(this).hasClass('selected')) {
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


        $('.filter-tangerang').on('click', function() {
            if ($(this).hasClass('selected')) {
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
        $('.filter-bandung').on('click', function() {
            if ($(this).hasClass('selected')) {
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
        $('.filter-jakarta').on('click', function() {
            if ($(this).hasClass('selected')) {
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
        $('.filter-bali').on('click', function() {
            if ($(this).hasClass('selected')) {
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
            var sticky = $('.menu'),
                scroll = $(window).scrollTop();
            var text = $('.test');

            if (scroll >= window.innerHeight) {
                sticky.addClass('fixed');
                text.css('margin-top', '8.075rem');
                sticky.css('width', '100%');
            } else {
                sticky.removeClass('fixed');
                text.css('margin-top', '2rem');
                sticky.css('width', '');
            }
        });
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>
    <script>
        document.onreadystatechange = function () {
        var state = document.readyState
        if (state == 'complete') {
                document.getElementById('interactive');
                document.getElementById('load').style.visibility="hidden";
        }
        }
    </script>
</body>

</html>