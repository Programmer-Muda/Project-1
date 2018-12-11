<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
  <!-- Sebelumnya Jangan lupa di cmd bikin npm run watch ya -->
</head>
<body>
<div class="img">
  <img src="{{ asset('img/blogin.jpg')}}" alt="">
</div>
<div class="sidebar">
  <h5 class="topbar">LOGIN</h5>
  <form action="">
    <label>Email Address</label>
    <input class="form-control" type="text" placeholder="Email..">
    <label>Password</label>
    <input class="form-control" type="password" placeholder="Password..">
    <div class="custom-control custom-checkbox check">
      <input type="check" class="custom-control-input" id="Check" required>
      <label class="custom-control-label" for="Check">Check This</label>
    </div>
    <button type="submit" class="btn btn-primary">Login Now</button>
  </form>
  <div class="sosmed">
    <h5>Login With :</h5>
  </div>
</div>
</body>
</html>