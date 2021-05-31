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
    <div class="container">
        <h1>User Edit Profile Page</h1>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('img/userProfile/'.$user[0][0]->foto)}}" alt="user_image" width="200px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{$user[0][0]->name}}</h5>
                        <p class="card-text">{{$user[0][0]->email}}</p>
                        <p class="card-text">{{$user[0][0]->password}}</p>
                        <p class="card-text">{{$user[0][0]->noTelepon}}</p>
                        <p class="card-text">{{$user[0][0]->alamat}}</p>
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated {{$user[0][0]->updated_at}}</small></p>
                    <p class="card-text">{{$user[0][0]->tanggalLahir}}</p>
                </div>
            </div>
        </div>
    </div>

    @include('Template/script')
</body>

</html>