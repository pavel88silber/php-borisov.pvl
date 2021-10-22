<?php
  $output = "";
  if($_SERVER["REQUEST_METHOD"]=="POST") {
    $num1 = (int)$_POST["num1"];
    $num2 = (int)$_POST["num2"];
    $opr = $_POST["operator"];
    $output = "$num1 $opr $num2 = ";

  switch($opr){
    case "+": $res = $num1 + $num2; break;
    case "-": $res = $num1 - $num2; break;
  }

  echo "<h3>Result: " . $res . "</h3>";

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


