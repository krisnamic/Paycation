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

    <!-- Content -->
    <h1>Detail Hotel Page</h1>
    <div class="container">
        @foreach($hotel as $h)
        <img src="{{asset('img/hotel/'.$h->gambarHotel1)}}" alt="gambarHotel">
        <img src="{{asset('img/hotel/'.$h->gambarHotel2)}}" alt="gambarHotel">
        <img src="{{asset('img/hotel/'.$h->gambarHotel3)}}" alt="gambarHotel">
        <img src="{{asset('img/hotel/'.$h->gambarHotel4)}}" alt="gambarHotel">
        <img src="{{asset('img/hotel/'.$h->gambarHotel5)}}" alt="gambarHotel">
        @endforeach
    </div>




    <!-- End of Content -->

    @include('Template/script')
</body>

</html>