<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/pap.css')}}">
</head>
<body>
<center>
<form>
<div class="topbar">Register</div>
<div class="tabel">
<div class="form-group">
    <label for="user">Username</label>
    <input type="text" class="form-control" id="user" placeholder="Enter username" required>
  </div>
  <div class="form-group">
    <label for="email1">Email address</label>
    <input type="email" class="form-control" id="email1" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="Password1" placeholder="Password" required>
  </div>
  <center>
  <button type="submit" class="btn btn-primary">Registration</button>
  </center>
</div>
</form>
<div class="log">
<p>You Have Account ? <a href="/login">Sign in now</a></p>
</div>
</center>
</body>
</html>