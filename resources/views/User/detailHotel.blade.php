<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @include('Template/head')

    <!-- navbar -->
    @include('template/navbar')
    <!-- end of navbar -->

    <!-- Content -->
    <h1>Detail Hotel Page</h1>
    <div class="container">
        @foreach($hotel as $h)
        <!-- card -->
        <div class="card" style="width: 54rem;">
            <!-- hotel images -->
            <div class="row card-img-top">
                <div class="col">
                    <img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" alt="gambarHotel" width="500px">
                </div>
                <div class="col ml-2 mb-1">
                    <img src="{{asset('img/hotel/'.$h->gambarHotel2)}}" alt="gambarHotel" height="155px" width="200px">
                    <div class="row mt-4">
                        <img src="{{asset('img/hotel/'.$h->gambarHotel3)}}" alt="gambarHotel" height="155px" width="200px">
                    </div>
                </div>
            </div>
            <div class="row ml-2">
                <img src="{{asset('img/hotel/'.$h->gambarHotel4)}}" alt="gambarHotel" height="155px" width="350px" class="mr-4">
                <img src="{{asset('img/hotel/'.$h->gambarHotel5)}}" alt="gambarHotel" height="155px" width="350px">
            </div>
            <!-- end of hotel images -->

            <!-- description & order button -->
            <div class="card-body">
                <h5 class="card-title">{{$h->namaHotel}}</h5>
                <p class="card-text">Lokasi : {{$h->lokasi}}</p>
                <p class="card-text">Rating :
                    @php $rating = $h->bintang; @endphp

                    @foreach(range(1,5) as $i)
                    <span class="fa-stack" style="width:1em">
                        <i class="fas fa-star fa-stack-1x" style="color: #CECECE;"></i>

                        @if($rating >0)
                        @if($rating >0.5)
                        <i class="fas fa-star checked fa-stack-1x" style="color: gold;"></i>
                        @else
                        <i class="fas fa-star-half checked fa-stack-1x" style="color: gold;"></i>
                        @endif
                        @endif
                        @php $rating--; @endphp
                    </span>
                    @endforeach
                </p>
                <p class="card-text">Rp. {{$h->hargaKamar}}</p>
                <p class="card-text">Stok kamar : {{$h->stokKamar}}</p>
                <p class="card-text"> {{$h->deskripsiHotel}}</p>
                <form action="{{url('bookingform/'.$h->id)}}" method="GET">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$h->id}}" name="id_hotel">
                    @if(Session::has('user_id'))
                    @if($h->stokKamar === 0)
                    <button type="submit" href="#" class="btn btn-primary" disabled>Book now</button>
                    @else
                    <button type="submit" href="#" class="btn btn-primary">Book now</button>
                    @endif
                </form>
                @elseif(Session::missing('user_id'))
                <a href="/login" class="btn btn-primary">Book now</a>
                @endif
            </div>
            <!-- end of description & order button -->
        </div>
        <!-- end of card -->
        @endforeach
    </div>
    <!-- End of Content -->

    @include('Template/script')
</body>

</html>