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
        "Dragon"=>1010
    ];
      $flag = 100;
      foreach ($data as $key => $value) {
        if($flag == "100"){
          echo "key: $key <br>";

        }
      }
  };
?>
     </body>
</html>
