<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
  <!-- Sebelumnya Jangan lupa di cmd bikin npm run watch ya -->
</head>
<body>
<center>
<form>
<div class="topbar">Login</div>
<div class="tabel">
  <div class="form-group">
    <label for="email1">Email address</label>
    <input type="email" class="form-control" id="email1" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="Password1" placeholder="Password" required>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="Check" required>
    <label class="form-check-label" for="Check">Check me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<div class="registered">
<p>Not registered? <a href="/register">sign up now</a></p>
</div>
</center>
</body>
</html>