<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Shops</h1>
    <!-- get each shop by id and display its profile -->
    <ul>
      <li><a href="/shops/{shop}">{{ $shop->name_location }}</a></li>
      <li>Location: {{ $shop->address1 }}</li>
      <li>Hours: {{ $shop->hours1 }}</li>
      <li>Phone: {{ $shop->phone1 }}</li><br ><br >
      <li>Second Location: {{ $shop->address2 }}</li>
      <li>Second Location Hours: {{ $shop->hours2 }}</li>
      <li>Second Location Phone: {{ $shop->phone2 }}</li><br ><br >
      <li>Website: {{ $shop->website }}</li><br ><br >
      <li>Favorite Drink: {{ $shop->favorite_drink }}</li>
    </ul>

    <!-- <form method="POST" action="/shops/{{ $shop->id }}">
      @method('HOME')
      @csrf
        <div class="field">

          <div class="control">

            <button type="submit" class="button">Return to Shops Gallery</button>

          </div>

        </div>

    </form> -->

  </body>
</html>
