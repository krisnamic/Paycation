<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Paycation | Login</title>
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
  <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

@include('Template/head')

<body class="hold-transition login-page bg-img1">
  <div class="login-box">
    <div class="login-logo">
      <img src="{{asset('img/paycation/paycation-1-light.svg')}}" style="position: relative; width: 65%; height: auto; margin-left: 10%;">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <h4 class="login-box-msg">Login</h4>

        <form action="{{route('postlogin')}}" method="post">
          {{csrf_field()}}
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
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
            <input type="password" class="form-control" placeholder="Password" name="password">
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
          @if(Session::has('error'))
          <p class="errorMsg" style="font-size:12px; color:red;">{{ Session::get('error') }}</p>
          @endif
          <div class="row">
            

             <!-- captcha -->
              <div class="input-group mb-3" style="margin-top: 10px !important;">
                <div class="captcha">
                  <span>{!! captcha_img() !!}</span>
                  <button type="button" class="btn btn-danger" class="refresh-captcha" id="refresh-captcha">
                    &#x21bb;
                  </button>
                </div>
              </div>

              <div class="input-group mb-3" style="margin-top: 10px !important;">
                <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-recycle"></span>
                  </div>
                </div>
              </div>
              <p class="errorMsg" style="font-size:12px; color:red;">@error('captcha')
                {{ $message }}
                @enderror
              </p>

              @if(Session::has('error'))
              <p class="errorMsg" class="font-size:12px; color:red;">{{ Session::get('error') }}</p>
              @endif
              <div class="d-flex justify-content-between" style="margin-top: 1em;">

                <div class="d-flex flex-column mb-0">
                  <a href="{{route('register')}}" class="text-left" style="vertical-align: middle; line-height: 1.2;">< Create a new account</a>
                  <a href="/" class="text-left" style="vertical-align: middle;">< Back to main page</a>
                </div>

                <div class="ml-auto">
                  <button type="submit" id="login-btn" class="btn btn-primary btn-block">Sign In</button>
                </div>

              </div>
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{asset('AdminLTE/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('AdminLTE/dist/js/adminlte.min.js')}}"></script>

  <script type="text/javascript">
    $('#refresh-captcha').click(function() {
      $.ajax({
        type: 'GET',
        url: 'refresh-captcha',
        success: function(data) {
          $(".captcha span").html(data.captcha);
        }
      });
    });
  </script>
</body>

</html>