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

              <div id="nav">
                <div class="links">
                  <!-- style="margin-top:1.5%; margin-bottom:2%; -->
                    <a href="/about">What is Third Wave?</a>
                    <a href="/lingo">Lingo</a>
                    <a href="/brew">Brew</a>
                    <a href="/locate">Locate</a>
                    <a href="/shops">Shops</a>
                </div>
              </div>

                <div>
                  <img class="img-responsive" alt="Barista Pouring Lattes | Photo by Tyler Nix on Unsplash" src="/images/pouring_lattes.jpg">
                </div>
            </div>
    </body>
</html>
