<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/car-dealer.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      return "
      <!DOCTYPE html>
      <html>
      <head>
          <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
          <title>Find a Car</title>
      </head>
      <body>
          <div class='container'>
              <h1>Find a Car!</h1>
              <form action='/cars'>
                  <div class='form-group'>
                      <label for='price'>Enter Maximum Price:</label>
                      <input id='price' name='price' class='form-control' type='number'>
                  </div>
                  <div class='form-group'>
                      <label for='miles'>Enter Maximum Miles:</label>
                      <input id='miles' name='miles' class='form-control' type='number'>
                  </div>
                  <button type='submit' class='btn-success'>Submit</button>
              </form>
          </div>
      </body>
      </html>
      ";
    });

    $app->get("/cars", function() {

      $max_price = $_GET['price'];
      $max_miles = $_GET['miles'];

      $first_car = new Car ("2015 Mercedez CLS550", 39990, 10000, "img/cedez.jpg");
      $second_car = new Car ("2011 Ford 450", 59990, 12000, "img/f450.jpg");
      $third_car = new Car ("2013 Lexus RX 350", 365990, 104000, "img/rx.jpg");
      $fourth_car = new Car ("1996 Toyota Corolla", 203090, 1000450, "img/corolla.jpg");
      $cars = array($first_car, $second_car, $third_car, $fourth_car);

      $searched_cars = [];
      foreach ($cars as $car) {
        if($car->worthBuying($max_price, $max_miles)) {
          array_push($searched_cars, $car);
        }
      }

    if(empty($searched_cars)) {
      return "<p>your search does not match our cars bro</p>
              click <a href='/'>here</a> to go back to the home page";
    }
      $output = "";
      foreach ($searched_cars as $car) {
        $output .= "
          <div>
            <p>" . $car->getMakeModel() ." </p>
            <p>" . $car->getMiles() ." </p>
            <p>" . $car->getPrice() ." </p>
            <img src=" . $car->getImg() . ">
          </div>
        ";
      }
      return $output;
    });
return $app;
 ?>
