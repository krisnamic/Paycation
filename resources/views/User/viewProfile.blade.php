<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gmbaruser img {
            width: 250px;
            height: 250px;
        }
    </style>
    <title>Paycation | View Profile</title>
</head>

<body>
    @include('Template/head')

    <!-- navbar -->
    @include('template/userNavbar')
    <!-- end of navbar -->
    <div class="container">
        <h1>Your Profile Page</h1>
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 720px;">
            <form action="{{url('user/'.$user[0][0]->id.'/edit')}}" method="GET">
                <div class="d-flex flex-wrap">
                    <div class="gmbaruser col-md-5 d-flex justify-content-around mt-3">
                        <img src="{{asset('img/userProfile/'.$user[0][0]->foto)}}" alt="user_image">
                    </div>
                    <div class="card-body ">
                        <!-- <div class="card-body"> -->
                        <h5 class="card-text">Profile Completeness : </h5>
                        @if($user[0][0]->foto == 'default.png')
                        <div class="progress">
                            <div class="progress-bar  bg-info" role="progressbar" style="width: 83%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">83.3%</div>
                        </div>
                        <small>upload your profile image to complete your profile </small>
                        @else
                        <div class="progress">
                            <div class="progress-bar  bg-info" role="progressbar" style="width: 100%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">100%</div>
                        </div>
                        @endif
                        <br><br>
                        <h5 class="card-text">Nama &emsp;&emsp;&emsp;&emsp;: {{$user[0][0]->name}}
                        </h5>
                        <h5 class="card-text">Email &emsp;&emsp;&emsp;&emsp;&nbsp;: {{$user[0][0]->email}}
                        </h5>
                        <h5 class="card-text">Nomor Telepon &nbsp;: {{$user[0][0]->noTelepon}}
                        </h5>
                        <h5 class="card-text">Alamat &emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;: {{$user[0][0]->alamat}}
                        </h5>
                        <h5 class="card-text">Tanggal lahir &emsp;&nbsp;&nbsp;: {{$user[0][0]->tanggalLahir}}
                        </h5>
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