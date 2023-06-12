<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login </title>
    <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}">
  </head>
  <body>
    <div class="center">
      <img src="image/biotrop.png" width="150px" style="display:block; margin:auto;" >
      <h1>Login Admin</h1>
      <form action="{{ route('kunjungan.index') }}" method="GET">
        <div class="txt_field">
          <input type="text" name="email" required>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link">
         <a href="{{ route('kunjungan.create') }}">Halaman tamu</a>
        </div>
      </form>
    </div>

  </body>
</html>