<?php

  function clearStr($data) {
    return trim(strip_tags($data));
  }

  function clearInt($data) {
    // return abs($data);
    return $data;
  }

  $output = "";
  if($_SERVER["REQUEST_METHOD"]=="POST") {
    $num1 = (int)$_POST["num1"];
    $num2 = (int)$_POST["num2"];
    $opr = $_POST["operator"];
    $output = "$num1 $opr $num2 = ";

    switch($opr){
      case "+": $res = $num1 + $num2; 
      echo "<h3>Result: " . $output . $res ."</h3>"; break;
      case "-": $res = $num1 - $num2; 
      echo "<h3>Result: " . $output . $res ."</h3>"; break;
      case "*": $res = $num1 * $num2; 
      echo "<h3>Result: " . $output . $res ."</h3>"; break;
      case "/": 
        if($num2 == 0)
          $output = "You can NOT divide by 0";
        else 
          $res = $num1 / $num2; 
      default: $output = "Unknown operator";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calc</title>
  <link rel="stylesheet" href="mystyle.css">
</head>
  <body>
    <h1>Calculator</h1>
    <!-- Область основного контента -->
    <form action='' method='post'>
          <label>Число 1:</label>
          <br />
          <input name='num1' type='text' />
          <br />
          <label>Оператор: </label>
          <br />
          <input name='operator' type='text' />
          <br />
          <label>Число 2: </label>
          <br />
          <input name='num2' type='text' />
          <br />
          <br />
          <input type='submit' value='Считать'>
        </form>
        <!-- Область основного контента -->    
  </body>
</html>


