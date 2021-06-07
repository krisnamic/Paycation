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
    </style>
</head>

<body class="antialiased">
    @include('Template/head')

    <!-- navbar -->
    @include('Template/navbar')
    <!-- end of navbar -->

    <!-- content -->
    @include('User/search')
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
    <!-- end of content -->
        
    @include('Template/script')
</body>

</html>