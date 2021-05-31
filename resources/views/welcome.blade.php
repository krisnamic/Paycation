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
    @include('Template/userNavbar')
    <!-- end of navbar -->

    <!-- content -->
    <div class="row row-cols-4">
        @foreach($hotel as $h)
        <div class="container mt-3">
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
                            <span class="fas fa-star"></span>
                            @php ($lol -= 1)
                            @endwhile
                    </p>
                    <p>Price : {{$h->hargaKamar}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- end of content -->

    @include('Template/script')
</body>

</html>