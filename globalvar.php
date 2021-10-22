<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Global Variables</h1>
    
    $name = 'John';
    $GLOBALS["name"] = "John";

    <?
    echo '<hr>';
    $code = '<?php
        echo "Hello, World!";
    ?>';
    
    echo '<pre>' . highlight_string($code) . '</pre>';
    ?>
    

</body>
</html>