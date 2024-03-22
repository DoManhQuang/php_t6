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
        if($flag == "100"){
          echo "key: $key ---- value: $value <br>";
        }
      }
  };
?>
     </body>
</html>
