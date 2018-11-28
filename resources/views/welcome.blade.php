<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Third Wave</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">

        <!-- Link Stylesheet -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>

    <!-- Styles -->
    <style>
      html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
          text-align:center;
      }
      .links > a {
          color: #636b6f;
          padding: 0 5%;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }
      a:hover {
        color: #63AF86;
      }
    </style>

    <body>
            <div class="content">
              @if (Route::has('login'))
                <div class="links">
                  @auth
                    <a href="{{ url('/home') }}">Logout</a>
                  @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                      <a href="{{ route('register')}}">Register</a>
                    @endif
                  @endauth
                </div>
              @endif

              </div>
                <div class="title" style="text-align:center;">
                    Third Wave <div class="title-small" style="display:inline; text-align:center;">Coffee</div>
                </div>

                @include('partials.landingpagenavigation')

                <div>
                  <img class="img-responsive" alt="Barista Pouring Lattes | Photo by Tyler Nix on Unsplash" src="/images/pouring_lattes.jpg">
                </div>
            </div>
    </body>
</html>
