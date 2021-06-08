<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .checked {
            color: gold;
        }

        /* .main-footer {
            background-color: #169eda !important;
            color: white !important;
            margin-left: 0 !important;
        } */
    </style>
</head>

<body class="antialiased">
    @include('Template/head')

    <!-- navbar -->
    @include('Template/userNavbar')
    <!-- end of navbar -->

    <!-- content -->
    <div class="row row-cols-4">
        @foreach($hotel as $h)
        <div class="container mt-3">
            <div class="card" style="width: 18rem;">
                <a href="/{{$h->id}}" style="color: black;">
                    <img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" class="card-img-top" alt="hotel_image">
                    <div class="card-body">
                        <p>{{$h->id}}</p>
                        <p>{{$h->namaHotel}}</p>
                        <p>{{$h->lokasi}}</p>
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
                        <p>Price : {{$h->hargaKamar}}</p>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- <div style="width: 100%; height: 75vh;"> -->

        <!-- <img style="position: absolute; z-index: 99998" src="{{asset('img/home/city.svg')}}" alt=""> -->
        
        <!-- <svg style="position: absolute; z-index: 99999" viewBox="0 0 1440 232" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="-6" width="1452" height="232" fill="url(#paint0_linear)"/>
        <defs>
        <linearGradient id="paint0_linear" x1="720" y1="0" x2="720" y2="232" gradientUnits="userSpaceOnUse">
        <stop stop-color="#FFFFFF"/>
        <stop offset="0.47708" stop-color="#FFFFFF"/>
        <stop offset="1" stop-color="white" stop-opacity="0"/>
        </linearGradient>
        </defs>
        </svg> -->

        
    <!-- </div> -->

    @include('Template/footer')
    <!-- end of content -->

    @include('Template/script')
</body>

</html>