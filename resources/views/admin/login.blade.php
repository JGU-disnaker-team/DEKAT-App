<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin</title>
<<<<<<< Updated upstream
  <link rel="stylesheet" href="{{ asset('css/login-admin.css')}}" />
=======
  <link rel="stylesheet" href="{{ asset('resources/css/login-admin.css') }}">
>>>>>>> Stashed changes
  <!-- Font Awesome CDN link for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <div class="title"><span>Admin</span></div>
    <form action="{{ route('admin.login') }}" method="POST">
      @csrf
      <div class="row">
        <i class="fa-solid fa-at"></i>
        <input type="text" name="email" placeholder="Email" required />
      </div>
      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Kata Sandi" required />
      </div>
      <div class="row button">
        <input type="submit" value="Login" />
      </div>
      @if ($errors->has('error'))
      <p>{{ $errors->first('error') }}</p>
    @endif
    </form>

  </div>
</body>

</html>