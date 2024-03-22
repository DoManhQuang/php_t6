<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>
<?php

function myArr(){
	  $data = [
        "Ha Noi"=>"Viet Nam", 
        "HaUI"=>"Đại Học Công Nghiệp Hà Nội", 
        "Dragon"=>2024
    ];
      $flag = 100;
      foreach ($data as $key => $value) {
        if($flag == "100"){
          echo "key: $key ---- value: $value <br>";
        }
      }
  };
  $data_2 = [1, 2, "hello", "Viet Nam", myArr()];
  $data_2[4];
  var_dump($data_2);
?>
     </body>
</html>
