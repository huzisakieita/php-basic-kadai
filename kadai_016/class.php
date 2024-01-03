<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         // クラスを定義する
         class Food {                      
             private $name;
             private $price;
             public function __construct(string $name, int $price) {
                 $this->name = $name;
                 $this->price = $price;
             }
             public function show_price() {
              echo $this->price . '<br>';
            }
         }
         class Animal {                      
          private $name;
          private $height;
          private $weight;

          public function __construct(string $name, int $height, int $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;  
          }
          public function show_height() {
            echo $this->height . '<br>';
          }
      }

         // インスタンス化する
         $food_out = new Food('potato', 250);
 
         // インスタンス化する
         $animal_out = new Animal('dog', 60, 5000);
 
         // インスタンス$userの各プロパティの値を出力する
         print_r($food_out);
         echo "<br>";
         print_r($animal_out);
         echo "<br>";
         $food_out -> show_price();

         $animal_out -> show_height();


         ?>
     </p>
 </body>
 
 </html>
