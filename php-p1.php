<!DOCTYPE html>
<html>
    <body>
<?php

function myArr(){
	  $data = [
        "Ha Noi"=>"Viet Nam", 
        "Dragon"=>1010
    ];
      $flag = 100;
      foreach ($data as $key => $value) {
          echo "key: $key <br>";
      }
  };
?>
     </body>
</html>
