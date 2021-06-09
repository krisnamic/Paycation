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
            <div class="media position-relative">
                <img src="{{asset('img/hotel/'.$p->gambarHotel1)}}" class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0"></h5>
                    <p>Price : Rp. {{$p->hargaPesanan}} ,-</p>
                    <p>Check In : {{$p->checkIn}}</p>
                    <p>Check Out : {{$p->checkOut}}</p>
                    <p>Book Time : {{$p->jamBooking}}</p>
                    <p>Book Date : {{$p->tanggalBooking}}</p>
                    <a href="#" class="stretched-link">View Detail Booking</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- end of content -->

    @include('Template/script')
</body>

</html>