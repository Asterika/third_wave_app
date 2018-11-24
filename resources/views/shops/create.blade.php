<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Add Your Favorite Third Wave Coffee Shop to Our Gallery</h1>

    <form method="POST" action="/shops">
      {{ csrf_field() }}

      <div>
        <input type="text" name="name_location" placeholder="Shop Name and State"><br ><br >
        <input type="text" name="address1" placeholder="Address">
        <input type="text" name="hours1" placeholder="Shop hours">
        <input type="text" name="phone1" placeholder="Phone"><br ><br >
        <input type="text" name="address2" placeholder="Second address">
        <input type="text" name="hours2" placeholder="Second location hours">
        <input type="text" name="phone2" placeholder="Second location phone"><br ><br >
        <input type="text" name="website" placeholder="Website">
        <input type="text" name="favorite_drink" placeholder="Add your favorite drink">
      </div><br >

      <div>
        <button type="submit">Add Shop</button>
      </div>
    </form>

  </body>
</html>
