<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
</head>

@include('Template/head')

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="login-logo">
      <img src="{{asset('img/paycation/paycation-1.svg')}}" style="position: relative; width: 65%; height: auto; margin-left: 10%;">
    </div>

    <div class="card" style="margin: 0 auto; float: none;">
      <div class="card-body login-card-body">
        <h4 class="login-box-msg">Register</h4>

        <form action="{{route('postregister')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <input type="text" class="form-control " name="name" placeholder="Full name" value="{{old('name')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <p class="errorMsg" style="font-size:12px; color:red;">@error('name')
            {{ $message }}
            @enderror
          </p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="noTelepon" placeholder="Phone number" value="{{old('noTelepon')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-phone"></span>
              </div>
            </div>
          </div>
          <p class="errorMsg" style="font-size:12px; color:red;">@error('noTelepon')
            {{ $message }}
            @enderror
          </p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="alamat" placeholder="Address" value="{{old('alamat')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-home"></span>
              </div>
            </div>
          </div>
          <p class="errorMsg" style="font-size:12px; color:red;">@error('alamat')
            {{ $message }}
            @enderror
          </p>
          <div class="input-group mb-3">
            <input type="date" class="form-control" name="tanggalLahir" placeholder="Birth Date" value="{{old('tanggalLahir')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-birthday-cake"></span>
              </div>
            </div>
          </div>
          <p class="errorMsg" style="font-size:12px; color:red;">@error('tanggalLahir')
            {{ $message }}
            @enderror
          </p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" name="email" placeholder="Email" value="{{old('email')}}">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <p class="errorMsg" style="font-size:12px; color:red;">@error('email')
            {{ $message }}
            @enderror
          </p>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <p class="errorMsg" style="font-size:12px; color:red;">@error('password')
            {{ $message }}
            @enderror
          </p>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Photos</span>
            </div>
            <div class="custom-file">
            <label class="custom-file-label" for="inputGroupFile01" id="file">Choose file...</label>
              <input type="file" class="custom-file-input" name="foto" id="inputGroupFile01">
            </div>
          </div>
          <p class="errorMsg" style="font-size:12px; color:red;">@error('foto')
            {{ $message }}
            @enderror
          </p>
          <div class="d-flex flex-row justify-content-between mb-0">
            <div class="d-flex flex-column">
              <a href="{{route('login')}}" class="text-left" style="vertical-align: middle; line-height: 1.2;">
                < Login to an account
              </a>
              <a href="/" class="text-left" style="vertical-align: middle;">
                < Back to main page
              </a>
            </div>
            <div>
              <div class="ml-auto">
                <button type="submit" id="login-btn" class="btn btn-primary btn-block">Register</button>
              </div>
            </div>
          </div>
          
          </div>
        </form>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  @include('Template.script')
  <script type="text/javascript">
    $('#inputGroupFile01').change(function() {
      var i = $(this).prev('label').clone();
      var file = $('#inputGroupFile01')[0].files[0].name;
      $(this).prev('label').text(file);
    });
  </script>
</body>

</html>