<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
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
      }

      .full-height {
          height: 100vh;
      }

      .flex-center {
          align-items: flex-start;
          display: flex;
          justify-content: center;
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
          font-size: 60px;
      }
      .title-small {
          font-size: 45px;
      }

      .links > a {
          color: #636b6f;
          padding: 0 15px;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }
      a:hover {
        color: #4286f4; 
      }

      .m-b-md {
          margin-bottom: 30px;
      }
  </style>

  <body>

    <div class="content">
      <div class="links">
        <a href="/sign-up">Sign Up</a>
        <a href="/login">Login</a>
      </div>

      <hr >
      <div class="links" style="margin-bottom:-3.4%;">
          <a href="/">Home <img src="/images/home.png" style="height:12px; width:12px;"></a>
          <a href="/about">What is Third Wave? <img src="/images/question.png" style="height:12px; width:12px;"></a>
          <a href="/lingo">Lingo <img src="/images/speech-bubble.png" style="height:12px; width:12px;"></a>
          <a href="/brew">Brew <img src="/images/coffee-cup.png" style="height:12px; width:12px;"></a>
          <a href="/locate">Locate <img src="/images/placeholder (1).png" style="height:12px; width:12px;"></a>
      </div><br ><hr >

    <div class="container">
      @yield('content')
    </div>

  </body>
</html>
