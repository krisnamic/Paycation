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
    @include('template/userNavbar')
    <!-- end of navbar -->
    <h1>detailbooking page</h1>

    <!-- content -->
    <div class="container">
        @foreach($pesanan as $p)
        <div class="card">
            <div class="media position-relative ">
                <img src="{{asset('img/hotel/'.$p->gambarHotel1)}}" class="mr-3 mt-4 ml-3 mb-3" alt="..." style="width:250px;">
                <div class="media-body mt-0 mb-3">
                    <h5>Pesanan 00000{{$pesanan2[$loop->index]->id}}</h5>
                    <h5 class="mt-3 detail-text">{{$p->namaHotel}}</h5>
                    <p style="margin-bottom:0.25rem;">Price : Rp. {{$p->hargaPesanan}} ,-</p>
                    <p style="margin-bottom:0.25rem;">Check In : {{$p->checkIn}}</p>
                    <p style="margin-bottom:0.25rem;">Check Out : {{$p->checkOut}}</p>
                    <p style="margin-bottom:0.25rem;">Book Time : {{$p->jamBooking}}</p>
                    <p style="margin-bottom:0.25rem;">Book Date : {{$p->tanggalBooking}}</p>
                    <a href="/invoice/{{$pesanan2[$loop->index]->id}}" class="stretched-link">View Detail Booking</a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- end of content -->
    </div>
    @include('Template/script')
</body>

</html>