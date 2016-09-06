<?php
    require_once __DIR__."/../vendor/autoload.php";
    // require_once __DIR__."/../src/car-dealer.php";

    $app = new Silex\Application();

    $app->get("/", function() {
      $first_car = new Car ("2015 Mercedez CLS550", 39990, 10000, "../img/cedez.jpg");
      $second_car = new Car ("2011 Ford 450", 59990, 12000, "../img/f450.jpg");
      $first_car = new Car ("2013 Lexus RX 350", 365990, 104000, "../img/rx");
      $first_car = new Car ("1996 Toyota Corolla", 203090, 1000450, "../img/corolla");
    });
return $app;
 ?>
