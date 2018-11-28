<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Third Wave Coffee</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- Optimize for various screen sizes -->
    <!-- <link rel="stylesheet" media="screen and (min-width: 900px)" href="widescreen.css"> -->
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="smallscreen.css">
    <meta name="viewport" content="initial-scale=1">

  </head>
  <!-- Styles -->
  <style>
      html, body {
          background-color: #fff;
          /* color: #636b6f; */
          color: #586064;
          /* font-family: 'Nunito', sans-serif; */
          font-family: 'Inconsolata', monospace;
          font-size: 0.95rem;
          font-weight: 50;
          height: 100vh;
          margin: 0;
          text-align: center;
      }

      .full-height {
          height: 100vh;
      }

      .flex-center {
          align-items: flex-start;
          display: flex;
          justify-content: center;
      }

      .form {

      }

      hr {
      display: block;
      height: 1px;
      border: 0;
      border-top: 1px solid #ccc;
      margin: 1em 0;
      padding: 0;
      }

      .position-ref {
          position: relative;
      }

      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }

      .content {
          text-align: center;
      }
/*
      #rotate-text {
        transform: rotate(5deg);
      } */

      .title {
          font-size: 2.6rem;
      }
      .title-small {
          font-size: 1.6rem;
          font-style: Courier;
          font-weight: bold;
      }

      .links > a {
          color: #636b6f;
          padding: 0 3%;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }
      a:hover {
        color: #4286f4;
      }
      a {
        /* color: #3B8282; */
        color: #586064;
      }

      .m-b-md {
          margin-bottom: 30px;
      }
  </style>

  <body>

    <!-- <div class="content">
      <div class="links">
        <a href="/sign-up">Sign Up</a>
        <a href="/login">Login</a>
      </div> -->

      <hr >
      @include('partials.navigation')
    <div class="content">
      <div class="links" style="margin-bottom:-5%;">
          <a href="/">Home <img src="/images/home.png" style="height:12px; width:12px;"></a>
          <a href="/about">What is Third Wave? <img src="/images/question.png" style="height:12px; width:12px;"></a>
          <a href="/lingo">Lingo <img src="/images/speech-bubble.png" style="height:12px; width:12px;"></a>
          <a href="/brew">Brew <img src="/images/brewpot_light.png" style="height:13px; width:13px;"></a>
          <a href="/shops">Shops <img src="/images/coffee-cup.png" style="height:12px; width:12px;"></a>
          <a href="/locate">Locate <img src="/images/placeholder (1).png" style="height:12px; width:12px;"></a>
      </div>
    </div><br ><hr >

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
