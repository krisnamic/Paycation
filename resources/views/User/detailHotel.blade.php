<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paycation | {{$hotel->first()->namaHotel}}</title>
</head>

<body>
    @include('Template/head')

    <!-- navbar -->
    @include('template/userNavbar')
    <!-- end of navbar -->

    <!-- Content -->
    
    <div class="d-flex flex-column justify-content-center container">
        @foreach($hotel as $h)
        <!-- card -->
        <div class="card" style="width: 50.75rem; height: auto; margin: 2em auto; float: none;">
            <img src="{{asset('img/Logo/'.$h->logoHotel.'-v.svg')}}" alt="" class="detailLogo" style="position: relative; width: auto; height: auto; margin: 2em 0;">
            <!-- hotel images -->
            <div class="hotelImg1 d-flex flex-column justify-content-center" style=" width: 55em; height: 100%;">
                <div class="d-flex flex-row flex-grow-1" style="margin-bottom: 0.5em;"> 
                    <div>
                        <img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" alt="gambarHotel" style="width: 33.75em; margin-right: 0.5em;">
                    </div>
                    <div class="d-flex flex-column">
                        <div>
                            <img src="{{asset('img/hotel/'.$h->gambarHotel2)}}" alt="gambarHotel" style="width: 16.5em; margin-bottom: 0.5em">
                        </div>
                        <div>
                            <img src="{{asset('img/hotel/'.$h->gambarHotel3)}}" alt="gambarHotel" style="width: 16.5em;">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <img src="{{asset('img/hotel/'.$h->gambarHotel4)}}" alt="gambarHotel" style="width: 25.15em; margin-right: 0.5em;">
                    </div>
                    <div>
                        <img src="{{asset('img/hotel/'.$h->gambarHotel5)}}" alt="gambarHotel" style="width: 25.15em;">
                    </div>
                </div>
            </div>

            <div class="hotelImg2 d-flex flex-column justify-content-center" style=" width: 55em; height: 100%;">
                <img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" alt="gambarHotel" style="width: 70vw;">
                <img src="{{asset('img/hotel/'.$h->gambarHotel2)}}" alt="gambarHotel" style="width: 70vw;">
                <img src="{{asset('img/hotel/'.$h->gambarHotel3)}}" alt="gambarHotel" style="width: 70vw;">
                <img src="{{asset('img/hotel/'.$h->gambarHotel4)}}" alt="gambarHotel" style="width: 70vw;">
                <img src="{{asset('img/hotel/'.$h->gambarHotel5)}}" alt="gambarHotel" style="width: 70vw;">
            </div>
            

            <!-- <div class="row card-img-top">
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
            </div> -->
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
                <a href="javascript:history.back()" class="btn btn-default" role="button">Back to Catalogue</a>
            </div>
            <!-- end of description & order button -->
        </div>
        <!-- end of card -->
        @endforeach
    </div>
    <!-- End of Content -->

    @include('Template/footer')

    @include('Template/script')
</body>

</html>