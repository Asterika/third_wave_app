<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Shops</h1>
    <!-- loop through the shops and display each title as a list item -->
    @foreach ($shops as $shop)
      <a href="/shops/{{$shop->id}}">
        <li>{{ $shop->name_location }}</li>
      </a>
    @endforeach
  </body>
</html>
