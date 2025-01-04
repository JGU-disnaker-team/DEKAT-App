<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin</title>
  <!-- <link rel="stylesheet" href="/DEKAT-App/resources/css/login-admin.css"> -->
  <link rel="stylesheet" href="/DEKAT-App/public/assets/css/login-admin.css">
  <!-- <link rel="stylesheet" href="{{ asset('/DEKAT-App/public/assets/css/login-admin.css') }}"> -->
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
        <input type="email" name="email" placeholder="Email" required />
      </div>

      <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Kata Sandi" required />
      </div>

      <div class="row button">
        <input type="submit" value="Login" />
      </div>

      <!-- Pesan Error -->
      @if ($errors->any())
      <div class="error-messages">
      @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
    @endforeach
      </div>
    @endif
    </form>

  </div>
</body>

</html>