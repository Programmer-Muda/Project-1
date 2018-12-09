<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <!-- Disini bikin <link href="{{ asset('css/app.css')}}" rel="stylesheet"> -->
  <!-- Sebelumnya Jangan lupa di cmd bikin npm run watch ya -->
</head>
<body>
<form>
  <div class="form-group">
    <label for="email1">Email address</label>
    <input type="email" class="form-control" id="email1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="Password1">Password</label>
    <input type="password" class="form-control" id="Password1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>