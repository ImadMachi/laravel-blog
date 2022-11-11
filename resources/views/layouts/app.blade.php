<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blog</title>
  @vite('resources/sass/app.scss')
</head>

<body>
  <section class="border-bottom d-none d-lg-block">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
          <x-social-media-horizontal />
        </div>
        <div class="col text-center">
          <h1 class="display-5">LOGO</h1>
        </div>
        <div class="col text-end">
          <x-button class="rounded-pill" style="padding-top:4px;padding-bottom:5px;font-size:11px;font-weight:500;letter-spacing:2px">SUBSCRIBE <i class="fa-solid fa-paper-plane"></i></x-button>
        </div>
      </div>
  </section>

  <nav class="navbar navbar-expand-lg shadow-sm p-lg-3">
    <div class="container">
      <a class="navbar-brand d-lg-none" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-lg-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    @yield('content')
  </main>
  @vite('resources/js/app.js')
</body>

</html>