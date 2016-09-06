<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $img;

        function __construct($car_make_model, $car_price, $car_miles, $image_path)
        {
            $this->make_model = $car_make_model;
            $this->price = $car_price;
            $this->miles = $car_miles;
            $this->img = $image_path;
        }

        function setPrice($new_price)
        {
            $float_price = (float) $new_price;
            if ($float_price !=0) {
              $formatted_price = number_format($float_price, 2);
              $this->price = $formatted_price;
            }
        }

        function getPrice()
        {
            return $this->price;
        }
        function setMakeModel($new_make_model)
        {
            $this->make_model = $new_make_model;
        }
        function getMakeModel()
        {
            return $this->make_model;
        }
        function setMiles($new_miles)
        {
            $this->miles = $new_miles;
        }
        function getMiles()
        {
            return $this->miles;
        }
        function setImg($new_img)
        {
            $this->img = $new_img;
        }
        function getImg()
        {
          return $this->img;
        }



        function worthBuying($max_price, $max_mileage)
        {
            if ($this->price < ($max_price + 100) && $this->miles < $max_mileage) {
                return true;
            }
        }
    }


// $porsche = new Car();
// $porsche->make_model = "2014 Porsche 911";
// $porsche->price = 114991;
// $porsche->miles = 7864;
//
// $ford = new Car();
// $ford->make_model = "2011 Ford F450";
// $ford->price = 55995;
// $ford->miles = 14241;
//
// $lexus = new Car();
// $lexus->make_model = "2013 Lexus RX 350";
// $lexus->price = 44700;
// $lexus->miles = 20000;
//
// $mercedes = new Car();
// $mercedes->make_model = "Mercedes Benz CLS550";
// $mercedes->price = 39900;
// $mercedes->miles = 37979;
//
// $cars = array($porsche, $ford, $lexus, $mercedes);
//
// $cars_matching_search = array();
// foreach ($cars as $car) {
//     if ($car->price < $_GET["price"]) {
//         array_push($cars_matching_search, $car);
//     }
// }

?>
