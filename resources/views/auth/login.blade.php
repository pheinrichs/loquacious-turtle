<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html>
<head>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script type="text/javascript" src="/js/angular.min.js"> </script>
      <script type="text/javascript" src="/js/ui-bootstrap-0.13.4.min.js"> </script>
      <script type="text/javascript" src="/js/ui-bootstrap-tpls-0.13.4.min.js"> </script>
    <title></title>
</head>
<body>


<link rel="stylesheet" href="<% URL::asset('css/login.css') %>" /> 

<div class="wrapper">
<div class="form-signin">
    <h2 class="form-signin-heading">Please login</h2>
    <form  method="POST" action="/auth/login">
        {!! csrf_field() !!}
            <input class="form-control" type="email" name="email" value="<% old('email') %>" required autofocus placeholder="Email">
            <input class="form-control" type="password" name="password" id="password" required placeholder="Password">
            <label class="checkbox">
            <input type="checkbox" name="remember"> Remember Me
            </label>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
            <div class="login-help">
                <a href="register">Register</a> - <a href="#">Forgot Password</a>
            </div>
</div>
</body>
</html>