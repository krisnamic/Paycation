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
        <h1>User Profile Page</h1>
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 540px;">
            <form action="{{url('user/'.$user[0][0]->id.'/edit')}}" method="GET">
                <div class="d-flex flex-wrap">
                    <div class="col-md-5 d-flex justify-content-around">
                        <img src="{{asset('img/userProfile/'.$user[0][0]->foto)}}" alt="user_image" width="200px">
                    </div>
                    <div class="card-body ">
                        <!-- <div class="card-body"> -->
                        <h5 class="card-title">{{$user[0][0]->name}}</h5>
                        <h5 class="card-text">{{$user[0][0]->email}}</h5>
                        <p class="card-text">{{$user[0][0]->noTelepon}}</p>
                        <p class="card-text">{{$user[0][0]->alamat}}</p>
                        <p class="card-text">{{$user[0][0]->tanggalLahir}}</p>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="card-body">
                    <p class="card-text"><small class="text-muted">Last updated {{$user[0][0]->updated_at}}</small></p>
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                </div>
            </form>
        </div>
    </div>

    @include('Template/script')
</body>

</html>