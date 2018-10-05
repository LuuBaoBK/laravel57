<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="css/app.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="mytheme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="mytheme/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          {{ Form::open(['route' => 'postLogin', 'method' => 'post'])}}
            <div class="form-group">
              <div class="form-label-group">
                {{ Form::email('user_name', null, ['class' => 'form-control', 'placeholder' => 'Email address', 'required' => 'required', 'autofocus' => "autofocus", "id" => "inputEmail"])}}
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                {{ Form::password('password', ['id' => 'inputPassword', 'class' => 'form-control', 'placeholder' => "Password", "required" => "required"])}}
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block'])}}
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.html">Register an Account</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="js/app.js"></script>

  </body>

</html>
