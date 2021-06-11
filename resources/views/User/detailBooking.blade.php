<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paycation | Booking Detail</title>
</head>
<style>
    .media img {
        height: 250px;
    }
</style>

<body>
    @include('Template/head')

    <!-- navbar -->
    @include('template/userNavbar')
    <!-- end of navbar -->

    <!-- content -->
    <div class="container">
        <div class="card shadow p-3 mb-5 bg-white rounded rounded-lg">
            <h1>&nbsp;&nbsp;Booking List</h1>
            @foreach($pesanan as $p)
            <div class="card shadow p-3 mb-5 bg-white rounded rounded-lg">
                <div class="media position-relative">
                    <img src="{{asset('img/hotel/'.$p->gambarHotel1)}}" class="zoom mr-5 mt-4 ml-3 mb-3 rounded-lg" alt="...">
                    <div class="media-body mt-4 mb-3">
                        <h5 class="detail-text font-weight-bold">Booking <i>#</i> {{$pesanan2[$loop->index]->id}}</h5>
                        <h4 class="mt-3 detail-text font-weight-bold">{{$p->namaHotel}}</h4>
                        <p style="margin-bottom:0.25rem;">Price &emsp;&emsp;&emsp;&nbsp;&nbsp;: Rp. {{$p->hargaPesanan}} ,-</p>
                        <p style="margin-bottom:0.25rem;">Check In &emsp;&emsp;: {{$p->checkIn}}</p>
                        <p style="margin-bottom:0.25rem;">Check Out &emsp;&nbsp;: {{$p->checkOut}}</p>
                        <p style="margin-bottom:0.25rem;">Book Time &emsp;: {{$p->jamBooking}}</p>
                        <p style="margin-bottom:0.25rem;">Book Date &emsp;: {{$p->tanggalBooking}}</p>
                        <div class="d-flex justify-content-end">
                            <a href="/invoice/{{$pesanan2[$loop->index]->id}}" class="stretched-link btn btn-primary mt-1 ">View Detail Booking</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end of content -->
    @include('Template/script')
</body>

</html>