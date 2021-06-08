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
    <div class="container">
        <h1>User Edit Profile Page</h1>
        <div class="card mb-3 shadow p-3 mb-5 bg-white rounded" style="max-width: 620px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('img/userProfile/'.$user[0][0]->foto)}}" alt="user_image" width="200px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form action="{{url('user/'.$user[0][0]->id)}}" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0][0]->name}}" name="name">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0][0]->email}}" name="email" disabled>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">noTelepon</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0][0]->noTelepon}}" name="noTelepon">
                            </div>
                            <p class="errorMsg" style="font-size:12px; color:red;">@error('noTelepon')
                                {{ $message }}
                                @enderror
                            </p>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">alamat</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user[0][0]->alamat}}" name="alamat">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" value="{{$user[0][0]->tanggalLahir}}" name="tanggalLahir">
                            </div>
                            <div class="input-group">
                                <label for="exampleInputEmail1" class="form-label">New Password</label>
                                <input type="password" class="form-control" id="myPassword" name="newPassword">
                                <!-- eye -->
                                <span class="input-group-btn" id="eyeSlash">
                                    <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye-slash" aria-hidden="true"></i></button>
                                </span>
                                <span class="input-group-btn" id="eyeShow" style="display: none;">
                                    <button class="btn btn-default reveal" onclick="visibility3()" type="button"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </span>
                                <!-- end of eye -->
                            </div>
                            <p class="errorMsg" style="font-size:12px; color:red;">@error('newPassword')
                                {{ $message }}
                                @enderror
                            </p>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Photos</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="foto">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file...</label>
                                </div>
                            </div>
                            <p class="errorMsg" style="font-size:12px; color:red;">@error('foto')
                                {{ $message }}
                                @enderror
                            </p>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>

    @include('Template/script')
    <script>
        function visibility3() {
            var x = document.getElementById('myPassword');
            if (x.type === 'password') {
                x.type = "text";
                $('#eyeShow').show();
                $('#eyeSlash').hide();
            } else {
                x.type = "password";
                $('#eyeShow').hide();
                $('#eyeSlash').show();
            }
        }
    </script>
</body>

</html>