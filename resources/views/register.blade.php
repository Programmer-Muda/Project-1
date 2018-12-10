<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
<form>
<div class="topbar">Register</div>
<div class="tabel">
  <div class="form-group">
    <label for="email1">Email address</label>
    <input type="email" class="form-control" id="email1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="Password1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="Check" required>
    <label class="form-check-label" for="Check">Check me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<div class="login">
<p>You Have Account ? <a href="">Sign in now</a></p>
</div>
</body>
</html>