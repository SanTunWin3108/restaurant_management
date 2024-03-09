<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="{{asset('adminLTE/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('adminLTE/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('adminLTE//plugins/iCheck/square/blue.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="register-page" style="max-height: 500px; display: flex; align-items: center;">
    <div class="register-box" style="margin-bottom: -20px;">
      <div class="register-logo">
        <a><b>Pos</b>System</a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="{{route('register')}}" method="post">
            @csrf
          <div class="form-group has-feedback">
            <input name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Full name"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            @error('name')
                <p style="color: red">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group has-feedback">
            <input name="email" value="{{old('email')}}" type="text" class="form-control" placeholder="Email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            @error('email')
                <p style="color: red">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            @error('password')
                <p style="color: red">{{$message}}</p>
            @enderror
          </div>
          <div class="form-group has-feedback">
            <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password"/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            @error('password_confirmation')
                <p style="color: red">{{$message}}</p>
            @enderror
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
        </div>

        <a href="{{route('admin#login')}}" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
    </div><!-- /.register-box -->

    <!-- jQuery 2.1.3 -->
    <script src="{{asset('adminLTE/plugins/jQuery/jQuery-2.1.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{asset('adminLTE//bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="{{asset('adminLTE/plugins/iCheck/icheck.min.js')}}" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
