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
    @include('Template/userNavbar')
    <!-- end of navbar -->

    <!-- content -->
    @foreach($hotel as $h)
    @php
    $now = date('Y-m-d');
    @endphp
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$h->namaHotel}}</h5>
                        <br>
                        <p>{{$h->lokasi}}</p>
                        <p>Rating :
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
                        <p>Available Rooms : {{$h->stokKamar}}</p>
                        <!-- <p id="stokKamar" hidden>{{$h->stokKamar}}</p> -->
                        <input type="hidden" id="availRooms" value="{{$h->stokKamar}}">

                        <p>Price for 1 day : {{$h->hargaKamar}}</p>
                        <p id="price1day" hidden>{{$h->hargaKamar}}</p>
                    </div>
                </div>
                <h3>Total Harga</h3>
                <input type="hidden" id="totalRoomPrice" value="">
                <p>Rp. </p>
                <h6 id="totalprice"></h6>
            </div>
            <div class="col-8">
                <form action="{{route('booking')}}" method="POST">
                    {{csrf_field()}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0][0]->name}}" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" name="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$user[0][0]->email}}" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Number of Rooms</label>
                        <input type="number" min="1" max="{{$h->stokKamar}}" class="form-control" id="roomNumber" name="numberOfRooms">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Check In</label>
                        <input type="date" min="{{$now}}" class=" form-control" id="checkin" name="checkIn">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Check Out</label>
                        <input type="date" min="{{$now}}" class=" form-control" id="checkout" name="checkOut">
                    </div>
                    <input type="hidden" id="id_hotel" value="{{$h->id}}" name="id_hotel">
                    <input type="hidden" id="numOfDay" value="" name="numOfDay">
                    <input type="hidden" id="grandTotalPrice" value="" name="grandTotalPrice">
                    <input type="hidden" id="namaHotel" value="{{$h->namaHotel}}" name="namaHotel">
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <!-- end of content -->

    @include('Template/script')
    <script>
        const $inputdate = $('input[type="date"]');
        $inputdate.change(function() {
            var check_in = $('#checkin').val();
            var check_out = $('#checkout').val();
            if (check_in >= check_out) {
                var new_date = moment(check_in, "YYYY-MM-DD").add(1, 'days').toDate();
                new_date = moment(new_date).format("YYYY-MM-DD");
                $('#checkout').val(new_date);
            }
        });
        var priceperday = $('#price1day').html();
        var inputRoom = $('#roomNumber');
        inputRoom.change(function() {
            var roomInput = parseInt($('#roomNumber').val());
            var availRooms = parseInt($('#availRooms').attr('value'));
            if (roomInput > availRooms) {
                alert('the number of rooms you entered exceeds the limit');
                var totalRoomPrice = $('#availRooms').val() * priceperday;
                $('#totalRoomPrice').val(totalRoomPrice);
                var totalprice2 = parseInt($('#totalRoomPrice').val()) * parseInt($('#numOfDay').val());
                $('#totalprice').html(totalprice2);
                $('#grandTotalPrice').val(totalprice2);
            } else {
                var totalRoomPrice = $('#roomNumber').val() * priceperday;
                $('#totalRoomPrice').val(totalRoomPrice);
                var totalprice2 = parseInt($('#totalRoomPrice').val()) * parseInt($('#numOfDay').val());
                $('#totalprice').html(totalprice2);
                $('#grandTotalPrice').val(totalprice2);
            }
        });
        var $trigger = $('#checkin, #checkout');
        $trigger.change(function() {
            var check_in_date = $('#checkin').val();
            var check_out_date = $('#checkout').val();
            var checkOut = moment(check_out_date, 'YYYY-MM-DD');
            var checkIn = moment(check_in_date, 'YYYY-MM-DD');
            var numOfDay = checkOut.diff(checkIn, 'days');
            $('#numOfDay').val(numOfDay);
            var totalprice2 = parseInt($('#totalRoomPrice').val()) * parseInt($('#numOfDay').val());
            $('#totalprice').html(totalprice2);
            $('#grandTotalPrice').val(totalprice2);
        });
    </script>
</body>

</html>